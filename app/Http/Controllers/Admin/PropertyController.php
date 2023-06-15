<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use App\Models\property_review;
use App\Models\multiple_image;
use Illuminate\Http\Request;
use App\Common\FileHandler;
use DB;
use Mail;

use Illuminate\Support\Str; 
use Carbon\Carbon;



class PropertyController extends Controller
{ 
        public function index() 
    {
        $viewData = array(
            'pageName' => 'Property',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard', 
                    'class' => '',
                    'url' => route('admin.dashboard') 
                ),
                (object)array( 
                    'name' => 'Property',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.property.property')->with($viewData);
    }



       public function tabledata(Request $request) {
        // echo 'asd';exit;
        $input = $request->all();
        $query = Property::query();
        if($request->search['value']) {
            $searchStrings = explode(' ', $request->search['value']);
            foreach($searchStrings as $searchString) {
                $query->where(function ($query) use ($searchString) {
                    $query->orWhere('type', 'like', '%' . $searchString . '%');
                    $query->orWhere('price', 'like', '%' . $searchString . '%');
                });
            }
        }
        if($request->order) {
            $orderableColumns = array('type', 'price', '');
            $query->orderBy($orderableColumns[$request->order['0']['column']], $request->order['0']['dir']);
        }else {
            $query->orderBy('id', 'DESC');
        }
        $recordsFiltered = $query->count();
        $query->offset($input['start']); 
        $query->limit($input['length']);
        $filteredProperties = $query->get();
        foreach($filteredProperties as $property) { 

        $property->actions = '<a class="edit_property" href="'.route('admin.property.pool', ['id' => $property->id]).'">
                       <i class="fa fa-eye"></i>
                    </a>

        <a class="edit_property" href="'.route('admin.property.edit', ['id' => $property->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
                    </a>

                 


                    <a class="deleteprocess" data-type="property" data-id="'.$property->id.'" href="javascript:;">
                        <img src="'.asset('img/trash-solid.svg').'" alt="delete icon">
                    </a>
                    <form class="deleteformproperty'. $property->id.'" method="POST" action="'.route('admin.property.destroy', ['id' => $property->id]).'">
                      <input type="hidden" name="_token" value="'.csrf_token().'">
                      <input type="hidden" name="_method" value="DELETE">
                    </form>';



        }



        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => Property::count(),
            'recordsFiltered' => $recordsFiltered,
            "data" =>  $filteredProperties
        ];
        return response()->json($data);
    }


        public function create()
    {
        $viewData = array(
            'pageName' => 'Add Property',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Property',
                    'class' => '',
                    'url' => route('admin.property.index')
                ),
                (object)array(
                    'name' => 'Add New property',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.property.addeditproperty')->with($viewData);
    }


     public function store(Request $request)
    {
        $a=$request->all();
        $property = new Property;
   


        // echo "<pre>";
        // print_r($a);
        // exit;

          
   

    if($request->hasfile('featured_image'))
    {
        $file = $request->file('featured_image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads', $filename);
        $property->featured_image = $filename;
    }



        $property->type = $request->type;
        $property->address = $request->address;
        $property->price = $request->price;
        $property->bedrooms = $request->bedrooms;

        $property->master_bedroom_area = $request->master_bedroom_area;
        $property->master_bedroom_length = $request->master_bedroom_length;
        $property->master_bedroom_width = $request->master_bedroom_width;
        $property->master_bedroom_level = $request->master_bedroom_level;
        $property->master_bedroom_features = $request->master_bedroom_features;

        $property->bedroom_2_area = $request->bedroom_2_area;
        $property->bedroom_2_length = $request->bedroom_2_length;
        $property->bedroom_2_width = $request->bedroom_2_width;
        $property->bedroom_2_level = $request->bedroom_2_level;
        $property->bedroom_2_features = $request->bedroom_2_features;

        $property->bedroom_3_area = $request->bedroom_3_area;
        $property->bedroom_3_length = $request->bedroom_3_length;
        $property->bedroom_3_width = $request->bedroom_3_width;
        $property->bedroom_3_level = $request->bedroom_3_level;
        $property->bedroom_3_features = $request->bedroom_3_features;

        $property->bedroom_4_area = $request->bedroom_4_area;
        $property->bedroom_4_length = $request->bedroom_4_length;
        $property->bedroom_4_width = $request->bedroom_4_width;
        $property->bedroom_4_level = $request->bedroom_4_level;
        $property->bedroom_4_features = $request->bedroom_4_features;

        $property->bedroom_5_area = $request->bedroom_5_area;
        $property->bedroom_5_length = $request->bedroom_5_length;
        $property->bedroom_5_width = $request->bedroom_5_width;
        $property->bedroom_5_level = $request->bedroom_5_level;
        $property->bedroom_5_features = $request->bedroom_5_features;

        $property->bedroom_6_area = $request->bedroom_6_area;
        $property->bedroom_6_length = $request->bedroom_6_length;
        $property->bedroom_6_width = $request->bedroom_6_width;
        $property->bedroom_6_level = $request->bedroom_6_level;
        $property->bedroom_6_features = $request->bedroom_6_features;

        $property->bedroom_7_area = $request->bedroom_7_area;
        $property->bedroom_7_length = $request->bedroom_7_length;
        $property->bedroom_7_width = $request->bedroom_7_width;
        $property->bedroom_7_level = $request->bedroom_7_level;
        $property->bedroom_7_features = $request->bedroom_7_features;

        $property->bedroom_8_area = $request->bedroom_8_area;
        $property->bedroom_8_length = $request->bedroom_8_length;
        $property->bedroom_8_width = $request->bedroom_8_width;
        $property->bedroom_8_level = $request->bedroom_8_level;
        $property->bedroom_8_features = $request->bedroom_8_features;

        $property->bedroom_9_area = $request->bedroom_9_area;
        $property->bedroom_9_length = $request->bedroom_9_length;
        $property->bedroom_9_width = $request->bedroom_9_width;
        $property->bedroom_9_level = $request->bedroom_9_level;
        $property->bedroom_9_features = $request->bedroom_9_features;

        $property->bedroom_10_area = $request->bedroom_10_area;
        $property->bedroom_10_length = $request->bedroom_10_length;
        $property->bedroom_10_width = $request->bedroom_10_width;
        $property->bedroom_10_level = $request->bedroom_10_level;
        $property->bedroom_10_features = $request->bedroom_10_features;
        
        $property->bathrooms = $request->bathrooms;
        $property->has_garage = $request->has_garage;
        $property->open_parking = $request->open_parking;
        $property->total_garage = $request->total_garage;
        $property->covered_garage = $request->covered_garage;

        $property->hot_properties = $request->hot_properties;

        $property->description = $request->description;
        $property->save();


        $images = $request->file('multiple_images');
        $filenames = [];
        foreach ($images as $image) {
            $filename = time() . '-' . $image->getClientOriginalName();
            $image->move('uploads', $filename);
            $filenames[] = $filename;
    
            $multiple_images = new multiple_image;
            $multiple_images->multiple_images = $filename;
            $multiple_images->property_id = $property->id;

            $multiple_images->save();
        }
        return Redirect()->route("admin.property.index")->with('success', 'property added successfully');

    }



     public function edit($id)
    {
        $property = Property::findOrFail($id);
        $property_images = multiple_image::where('property_id',$id)->get();

        $viewData = array(
            'pageName' => 'Update property',
            'property' => $property,
            'property_images' => $property_images,

            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Property',
                    'class' => '',
                    'url' => route('admin.property.index')
                ),
                (object)array(
                    'name' => 'Update Property',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.property.addeditproperty')->with($viewData);
    }

     public function update(Request $request, $id)
    {
        $a=$request->all();
        
        // echo '<pre>';
        // print_r($a);
        // exit;

        $property = property::findOrFail($id);
  
        if($request->hasfile('featured_image'))
        {
            $file = $request->file('featured_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads', $filename);
            $property->featured_image = $filename;
        }



        $property->type = $request->type;
        $property->address = $request->address;
        $property->price = $request->price;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->garage = $request->garage;
        $property->lot_size = $request->lot_size;
        $property->elevator = $request->elevator;
        $property->fireplace = $request->fireplace;
        $property->gated = $request->gated;
        $property->garden = $request->garden;
        $property->balcony = $request->balcony;
        $property->terrace = $request->terrace;
        $property->pool = $request->pool;
        $property->basement = $request->basement;
        $property->furnished = $request->furnished;
        $property->hot_properties = $request->hot_properties;
        $property->company_profit = $request->company_profit;
        $property->description = $request->description;
        $property->save();


        $images = $request->file('multiple_images');
        if (!empty($images)) {
            // Delete the existing multiple_image instances and their corresponding images
            $instances = $property->multiple_images;
            if (!is_null($instances) && is_iterable($instances)) {
                foreach ($instances as $instance) {
                    Storage::delete('uploads/' . $instance->multiple_images);
                    $instance->delete();
                }
            }
        
            // Upload the new images and create new multiple_image instances
            foreach ($images as $image) {
                $filename = time() . '-' . $image->getClientOriginalName();
                $image->move('uploads', $filename);
        
                $multiple_images = new multiple_image();
                $multiple_images->multiple_images = $filename;
                $multiple_images->property_id = $property->id;
        
                $multiple_images->save();
            }
        }
        
        
        




        return Redirect()->route("admin.property.index")->with('success', 'property updated successfully');
    }

    public function deleteImage(Request $request)
    {
       
        $image_id = $request->input('image_id');
    
        DB::table('multiple_images')->where('id', $image_id)->delete();
        
    
        return response()->json(['message' => 'Image deleted successfully']);
    }




     public function destroy($id)
    {
        property::destroy($id);
        return Redirect()->route("admin.property.index")->with('success', 'Property deleted successfully');
    }





    // property Pool 
      public function property_pool($id)
    {
        $property=property::findOrFail($id);
        
        // echo "<pre>"; 
        // print_r($property); 
        // exit;
        
        $viewData = array(
            'pageName' => 'Property Pool',
            'property_id' => $id,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Properties',
                    'class' => '',
                    'url' => route('admin.property.index')
                ),
                (object)array(
                    'name' => 'Property Pool',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.property.property_pool',compact('property'))->with($viewData);
    }


     public function pool_tabledata(Request $request, $id = NULL ) {
        $input = $request->all();

        // $query = User::where('id','>','1' );
        $query = DB::table('property_reviews')
            ->join('users', 'users.id', '=', 'property_reviews.user_id')
            ->select('property_reviews.id','users.name', 'users.email','users.investment')
                        ->where('property_reviews.property_id',$id);



        if($request->search['value']) {
            $searchStrings = explode(' ', $request->search['value']);
            foreach($searchStrings as $searchString) {
                $query->where(function ($query) use ($searchString) {
                    $query->orWhere('name', 'like', '%' . $searchString . '%');
                    $query->orWhere('investment', 'like', '%' . $searchString . '%');
                });
            }
        }
        if($request->order) {
            $orderableColumns = array('name', 'investment', '');
            $query->orderBy($orderableColumns[$request->order['0']['column']], $request->order['0']['dir']);
        }else {
            $query->orderBy('users.id', 'DESC');
        }
        $recordsFiltered = $query->count();
        $query->offset($input['start']);
        $query->limit($input['length']);
        $filteredUsers = $query->get();
            // print_r($filteredUsers);exit;


 foreach($filteredUsers as $property_pool) { 
        $property_pool->actions = '<a class="edit_property"  href="'.route('admin.property.review', ['id' => $property_pool->id]).'">
                       <i class="fa fa-eye"></i>
                    </a>';


                }


        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => User::count(),
            'recordsFiltered' => $recordsFiltered,
            "data" =>  $filteredUsers
        ];
        return response()->json($data);
    }


    public function property_review($id){
        // echo $id;exit;
        // $review=property_review::all();
        $review=property_review::findOrFail($id);
$userData = User::find($review->user_id);
$propertyData = Property::find($review->property_id);

		// echo "<pre>";print_r($review);echo "</pre>";exit;


                $viewData = array(
            'pageName' => 'Property Pool',
            'user_id' => $id,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Properties',
                    'class' => '',
                    'url' => route('admin.property.index')
                ),
                (object)array(
                    'name' => 'Property Review',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.property.property_review',compact('review','userData','propertyData'))->with($viewData);
    }
    


    public function property_detail($id){
        // echo $id;exit;
        $property=Property::findorfail($id);
        // $total_amount = property_review::where('property_id', $id)->sum('total_investment_value');
        // $total_amount_percent = property_review::where('property_id', $id)->sum('total_investment');
        $investers=property_review::Where('property_id', $id)->where('user_id','!=','')->get();

        
       
 
                $viewData = array(
            'pageName' => 'Property Detail',
 
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Properties',
                    'class' => '',
                    'url' => route('admin.property.index')
                ),
                (object)array(
                    'name' => 'Property Review',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.property.property_detail',compact('property','investers'))->with($viewData);


    }


    public function property_status(request $request, $id, $status){

        $statuss = Property::findOrFail($id);

        $property_reviews=Property_review::where('property_id',$id)->select('user_id')->get();
        // $users=User::where('id',$property_review->user_id)->get();

        $users = [];

            foreach ($property_reviews as $property_review) {
                $user_id = $property_review->user_id;
                $user = User::find($user_id); 
                $users[] = $user;
            } 


    //    echo '<pre>';
    //     print_r($users);exit;

      

    
        if ($status == 0 && $status == $status) {
           
           
            $data=['name'=>"Pulse Realty",'data'=>"Hello"];
            foreach ($users as $user) {
                $user['to']=$user->email;
                Mail::send('admin.property.pool_close_mail',$data,function($messages) use ($user){
                    $messages->to($user['to']);
                    $messages->subject('Property Status');
                });
            }
          

            $statuss->status = 1;
            $statuss->save();
            DB::table('property_reviews')->where('property_id',$id)->update(['pool_close_date'=>\date('Y-m-d')]);
            

        } else if ($status == 1 && $status == $status) {
            $data=['name'=>"Pulse Realty",'data'=>"Hello"];
              foreach ($users as $user) {
                $user['to']=$user->email;
                Mail::send('admin.property.property_bought_mail',$data,function($messages) use ($user){
                    $messages->to($user['to']);
                    $messages->subject('Property Status');
                });
            }
       
            $statuss->status = 2;
            $statuss->save();
            DB::table('property_reviews')->where('property_id',$id)->update(['property_bought_date'=>\date('Y-m-d')]);
        }
        else if ($status == 2 && $status == $status) {
            $data=['name'=>"Pulse Realty",'data'=>"Hello"];
            foreach ($users as $user) {
                $user['to']=$user->email;
                Mail::send('admin.property.place_bid_mail',$data,function($messages) use ($user){
                    $messages->to($user['to']);
                    $messages->subject('Property Status');
                });
            }
       

            $statuss->status = 3;
            $statuss->save();
            DB::table('property_reviews')->where('property_id',$id)->update(['place_bid_date'=>\date('Y-m-d')]);
        }
        return redirect()->back()->with('success', 'Status updated successfully');
    }


    // viewbid

    public function view_bid($id){

        $property=Property::findorfail($id);
        $bider=property_review::Where('property_id', $id)->where('action','!=','')->get();
        $buyer = property_review::orderByDesc('bid_amount')->where('property_id',$id)->first();
        $bid_users=User::where('id',$buyer->user_id)->first();
    
    //    echo '<pre>';
    //    print_r($bider);exit;


        $viewData = array(
            'pageName' => 'Property Detail',
 
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Properties',
                    'class' => '',
                    'url' => route('admin.property.index')
                ),
                (object)array(
                    'name' => 'Property Review',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.property.property_bid',compact('property','bider','buyer','bid_users'))->with($viewData);
    }

    


    
}
