<?php

namespace App\Http\Controllers\admin;

use Redirect;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $viewData = array(
            'pageName' => 'Service',
            'breadCrumbs' => array(
                (object)array(
                    'name' => 'Dashboard',
                    'class' => '',
                    'url' => route('admin.dashboard')
                ),
                (object)array(
                    'name' => 'Service',
                    'class' => 'active',
                    'url' => 'javascript:;'
                )
            )
        );
        return view('admin.user.user')->with($viewData);
    }

    public function tabledata(Request $request) {
        $input = $request->all();
        print_r($input);exit;
        $query = User::query();
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
        foreach($filteredUsers as $service) {
            $service->actions = '<a class="edit_service" href="'.route('admin.user.edit', ['id' => $user->id]).'">
                        <img src="'.asset('img/edit-solid.svg').'" alt="edit icon">
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

}
