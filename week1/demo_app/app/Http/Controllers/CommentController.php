<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'rate' => 'required|integer',
                'content' => 'required|max:255'
            ],
            [
                'rate.required' => 'You need to provide a rate',
                'rate.integer' => 'You need to provide a rate as a number',
                'content.required' => 'You need to provide a content',
                'content.max' => 'You need to provide a content within 255 characters',
            ]
        );
        // $comment = new Comment([
        //     'content' => $request->content,
        //     'rate' => $request->rate,
        //     'user_id' => 1,
        // ]);

        $comment = new Comment($validated);

        // $comment = new Comment($request->all());

        $product = Product::find($request->productId);

        $product->comments()->save($comment);

        return redirect()->route("products.show", $request->productId)
                    ->with("success..", "Bình luận thành công!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back()
                    ->with("success", "Xoá bình luận thành công!");
    }
}
