<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;

class HomeController extends Controller
{
    public function index()
    {
    	$categories = CategoryResource::collection(Category::all());
    	$products = ProductResource::collection(Product::all());

    	return inertia('Home', compact('categories', 'products'));
    }

    public function show($slug)
    {
    	$product = new ProductResource(Product::where('slug', $slug)->first());

    	return inertia('Show', compact('product'));
    }
}
