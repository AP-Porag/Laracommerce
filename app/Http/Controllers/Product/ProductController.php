<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        validation request

        $this->validate($request,[

            'product'=>'required|unique:products,name|min:3',
            'category_id'=>'required',
            'sub_category_id'=>'required',
            'unit_id'=>'required',
            'photo'=>'required'
        ]);

        //saving to database
        $product = Product::create([
            'name'=>$request->product,
            'category_id'=>$request->category_id,
            'sub_category_id'=>$request->sub_category_id,
            'unit_id'=>$request->unit_id,
            'slug'=>Str::slug($request->product),
            'summary'=>$request->summary,
            'description'=>$request->summary,
        ]);
        if ($product){
            $thumbnail = $request->photo;

            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->save(base_path('/public/storage/product/thumbnail/'.$product->slug.'-'. $image_new_name));
            $product->thumbnail = '/storage/product/thumbnail/'.$product->slug.'-'. $image_new_name;
            $product->save();
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::findOrFail($id)->forceDelete();
        return back();
    }
}
