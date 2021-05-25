<?php

namespace App\Http\Controllers\ProductSettings;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\status;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductSettingsController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at','DESC')->paginate(2);
        $subCategories = SubCategory::orderBy('created_at','DESC')->paginate(2);
        $colors = Color::orderBy('created_at','DESC')->paginate(2);
        $sizes = Size::orderBy('created_at','DESC')->paginate(2);
        $units = Unit::orderBy('created_at','DESC')->paginate(2);
        $statuses = status::orderBy('created_at','DESC')->paginate(2);
        $products = Product::orderBy('created_at','DESC')->paginate(2);
        return view('admin.productSettings.index',compact('categories','subCategories','colors','sizes','units','statuses','products'));
    }
}
