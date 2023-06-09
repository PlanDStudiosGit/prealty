<?php

namespace App\Http\Controllers\Admin;

use Redirect;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $viewData = array(
            'pageName' => 'User',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'User',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.user.user')->with($viewData);
    }

    public function tabledata(Request $request) {
        $input = $request->all();
        $query = User::where('id', '>','1');
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
            $query->orderBy('id', 'DESC');
        }
        $recordsFiltered = $query->count();
        $query->offset($input['start']);
        $query->limit($input['length']);
        $filteredUsers = $query->get();


        $data = [
            'draw' => $input['draw'],
            'recordsTotal' => User::count(),
            'recordsFiltered' => $recordsFiltered,
            "data" =>  $filteredUsers
        ];
        return response()->json($data);
    }

  
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $viewData = array(
            'pageName' => 'Account',
            'user' => $user,
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Account',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.account')->with($viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => '',
            'confirm_password' => 'same:password',
        ]);
        if ($validator->fails()) {
            return Redirect()->route("admin.account", ['id' =>$id])->with('error', $validator->errors());
        }
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return Redirect()->route("admin.account", ['id' =>$id])->with('success', 'Account settings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
