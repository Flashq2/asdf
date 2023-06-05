<?php

namespace App\Http\Controllers;

use App\Models\UserroleModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserroleController extends Controller
{
    public function index()
    {
        return view('role.user_role');
    }
    public function user_role_datatable(Request $request)
    {
        if($request->ajax()){
            return DataTables::eloquent(UserroleModel::query())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = " </button>
                <button class='edit' data-edit=$row->code> Edit
                </button></button>
                <button class='actiondelete' data-delete=$row->code > Delete
                </button>" ;
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }
    public function deleteuserrole(Request $request)
    {
         $data=UserroleModel::where('code',$request->code_to_delete)->delete();
         return response()->json([
            'status'=>'User Role code '.$request->code_to_delete.' has been delete from your Project'
         ]);
    }
}
