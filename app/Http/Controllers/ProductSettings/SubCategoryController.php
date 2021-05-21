<?php

namespace App\Http\Controllers\ProductSettings;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class SubCategoryController extends Controller
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

            'name'=>'required|unique:sub_categories,name|min:3',
            'category_id'=>'required',
            'photo'=>'required'
        ]);

        //saving to database
        $subCategory = SubCategory::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'slug'=>Str::slug($request->name)
        ]);
        if ($subCategory){
            $thumbnail = $request->photo;

            $image_new_name = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)
                ->save(base_path('/public/storage/subCategory/'.$subCategory->slug.'-'. $image_new_name));
            $subCategory->thumbnail = '/storage/subCategory/'.$subCategory->slug.'-'. $image_new_name;
            $subCategory->save();
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
        $category = SubCategory::findOrFail($id)->forceDelete();
        return back();
    }
}
