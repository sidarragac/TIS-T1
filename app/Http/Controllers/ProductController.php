<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Taller 1';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();
        $viewData['msg'] = $request->query('msg', '');

        return view('product.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            'type' => 'required|in:car,airplane',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'brand' => 'required',
            'stockQuantity' => 'required|integer|gte:0',
        ]);

        $msg = $request->input('name').' has been created successfully';

        Product::create($request->only(['type', 'name', 'description', 'price', 'brand', 'stockQuantity']));

        return redirect()->route('product.index', ['msg' => $msg]);
    }
}
