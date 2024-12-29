<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 商品一覧ページの表示
    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    // 商品登録ページの表示
    public function add()
    {
        return view('add');
    }
}
