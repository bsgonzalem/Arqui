<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public static $products = [
        ['id' => '1', 'name' => 'TV', 'description' => 'Best TV', 'price' => 1200],
        ['id' => '2', 'name' => 'iPhone', 'description' => 'Best iPhone', 'price' => 1200],
        ['id' => '3', 'name' => 'Chromecast', 'description' => 'Best Chromecast', 'price' => 1200],
        ['id' => '4', 'name' => 'Glasses', 'description' => 'Best Glasses', 'price' => 1200],
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; // to be sent to the view

        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer|gt:0',
        ]);

        Product::create($request->only(['name', 'price']));

        return back();
    }

    public function show(string $id): View|RedirectResponse
    {
        $viewData = [];

        $product = Product::findOrFail($id);

        $viewData['title'] = $product['name'].' - Online Store';

        $viewData['subtitle'] = $product['name'].' - Product information';

        $viewData['product'] = $product;

        $viewData['price'] = $product['price'];

        return view('product.show')->with('viewData', $viewData);
    }
}
