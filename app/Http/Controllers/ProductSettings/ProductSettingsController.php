<?php

namespace App\Http\Controllers\ProductSettings;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductSettingsController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at','DESC')->paginate(2);
        $subCategories = SubCategory::orderBy('created_at','DESC')->paginate(2);
        return view('admin.productSettings.index',compact('categories','subCategories'));
    }
}
