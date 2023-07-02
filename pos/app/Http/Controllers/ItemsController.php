<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $fb=new Facebook();
        $field=  DB::getSchemaBuilder()->getColumnListing('items');
        return view('items.item',compact('field'));
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'status'=>'This Function is working',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if($request->ajax()){
            return DataTables::eloquent(ItemModel::query())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = " <a href='addnewcustomer?code=$row->no '> </button>
                <button class='edit' data-edit=$row->no> Edit
                </button>
                    </a>
                </button>
                <button class='actiondelete' data-delete=$row->no > Delete
                </button>" ;
                return $actionBtn;
            })
            ->addColumn('product_brand_logo', function ($product_brand) {
                if($product_brand->picture==null){
                    $url=asset("/img/photos/unsplash-3.jpg");
                }
                else{
                      $url=asset("/tos/$product_brand->picture"); 
                }
              
                return '<img src='.$url.' data-src='.$url.' data-code='.$product_brand->no.'   width="40" class="img-rounded" align="center"; border-radius: 10px !important; />'; 
         })
            ->rawColumns(['action','product_brand_logo']) 
            ->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function getfield(Request $request)
    {
        $field=  DB::getSchemaBuilder()->getColumnListing('items');
        return response()->json([
            'data'=>$field,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
