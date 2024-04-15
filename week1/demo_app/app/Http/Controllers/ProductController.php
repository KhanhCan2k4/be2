<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products.admin.index', ['products' => $products]);
    }

    public function indexList()
    {
        //
        $products = Product::all();

        foreach ($products as $product) {
            $product['description'] = trim(strip_tags($product['description']));
            if (strlen($product['description']) > 100) {
                # code...
                $product['description'] = mb_substr($product['description'], 0, mb_strpos($product['description'], ' ', 100));
            }
        }

        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.admin.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:50',
                'price' => 'required',
                'description' => 'required',
                'photo' => 'required',
            ],
            [
                'name.required' => 'Name is required',
                'price.required' => 'Price is required',
                'description.required' => 'Description is required',
                'photo.required' => 'Photo is required',
            ]
        );

        $product = new Product($validated);

        $product->save();
        $product->categories()->attach($request->categories);

        return redirect()->route('products.index')->with('success', 'Add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    public function showProduct(string $id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.admin.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:50',
                'price' => 'required',
                'description' => 'required',
                'photo' => 'required',
            ],
            [
                'name.required' => 'Name is required',
                'price.required' => 'Price is required',
                'description.required' => 'Description is required',
                'photo.required' => 'Photo is required',
            ]
        );

        $product = Product::find($id);

        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->photo = $validated['photo'];

        $product->save();
        $product->categories()->sync($request->categories);

        return redirect()->route('products.index')->with('success', 'Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Remove successfully');
    }
}
