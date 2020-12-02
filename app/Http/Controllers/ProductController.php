<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

// TODO: Реализовать все view
class ProductController extends Controller
{
    public function formAdd() {
        return view('product.add');
    }

    public function add(Request $request) {
        $product = new Product();
        $product->name = $request->input('name');
        $product->weight = $request->input('weight');
        $product->price = $request->input('price');
        $product->save();

        // TODO: Поменять на редирект роута с выводом товаров в админке
        return redirect()->route('products'); 
    }

    public function remove(int $id) {
        $product = Product::find($id);
        if ($product == null) 
            return view('product.notfound');
        $product->delete();

        // TODO: Поменять на редирект роута с выводом товаров в админке
        return redirect()->route('products'); 
    }
    
    public function all() {
        $products = Product::get();
        return view('product.all', [
            'products' => $products
        ]);
    }

    // TODO: Добавить редактирование товара

    public function search(Request $request) {
        $products = Product::where('name', 'like', '%' . $request->name . '%')->get();
        return $products->toJson();
    }
}
