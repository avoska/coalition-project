<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    protected function validateProduct(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'stock' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
        ]);
    }

    public function add(Request $request)
    {
        $this->validateProduct($request);

        $product = new Product($request->all());
        $product->save();
    }

    public function update($id, Request $request)
    {
        $this->validateProduct($request);

        $product = Product::all()->where('id', $id)->first();
        if(!$product) {
            throw new NotFoundHttpException("Object with id $id not found");
        }

        $product->update($request->all());
    }

    public function list()
    {
        return Product::all()->sortBy('created_at');
    }
}
