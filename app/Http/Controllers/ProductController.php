<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('updated_at', 'desc')->get();

        return view('product.list', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if($req->btn == "Delete"){
            $category = Category::find($req->cat_name);
            $category->delete();
            return redirect()->back();
        } elseif($req->btn == "Saqlash") {
            if ($req->cat_name_uz != null || $req->cat_name_ru != null || $req->cat_name_en != null) {
                if ($req->cat_name != null) {
                    $category = Category::find($req->cat_name);
                    $category->name_uz = $req->cat_name_uz;
                    $category->name_ru = $req->cat_name_ru;
                    $category->name_en = $req->cat_name_en;
                    $category->save();
                } else {
                    $category = new Category;
                    $category->name_uz = $req->cat_name_uz;
                    $category->name_ru = $req->cat_name_ru;
                    $category->name_en = $req->cat_name_en;
                    $category->save();
                }
                return redirect()->back();

            }
        }

        if($req->cat_id!=null || $req->image!=null || $req->name_uz!=null || $req->name_ru!=null ||
            $req->name_en!=null || $req->description_uz!=null || $req->description_ru!=null || $req->description_en!=null ||
            $req->size!=null){

            $validatedData = $req->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $img_name = Str::random(10).'.'.$req->file('image')->getClientOriginalExtension();
            $img_path = '/images/product/'.$img_name;
            $req->image->move(public_path('/images/product'), $img_name);

            $product = new Product;
            $product->photo = $img_name;
            $product->cat_id = $req->cat_id;
            $product->name_uz = $req->name_uz;
            $product->name_ru = $req->name_ru;
            $product->name_en = $req->name_en;
            $product->img_path = $img_path;
            $product->description_uz = $req->description_uz;
            $product->description_ru = $req->description_ru;
            $product->description_en = $req->description_en;
            $product->size = $req->size;
            $product->save();
        }
        return redirect('list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        Product::where('id', $id)
            ->update([
                    'photo'=>$request->input('photo'),
                    'name_uz' => $request->input('name_uz'),
                    'name_ru'=>$request->input('name_ru'),
                    'name_en'=>$request->input('name_en'),
                    'description_uz'=>$request->input('description_uz'),
                    'description_ru'=>$request->input('description_ru'),
                    'description_en'=>$request->input('description_en'),
                    'size'=>$request->input('size')]
            );

        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();

        $cat = Category::find($cat->$name);


        $cat->delete();

    }
}
