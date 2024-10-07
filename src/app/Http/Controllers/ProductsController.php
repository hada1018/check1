<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Season;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // 商品一覧画面
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products'));
    }

    // 検索
    public function search(Request $request)
    {
     //   $search = $request->only(['name']);
        return view('search');
    }

    // 商品登録
    public function register()
    {
        // $search = $request->only(['name']);
        return view('register');
    }

    // 商品詳細
    public function detail(Request $request)
    {
        // $item = ['name' -> "キウイ",];
        return view('detail');
    }
    
}
