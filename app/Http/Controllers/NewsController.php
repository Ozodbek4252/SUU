<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news.index',compact('news'));
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $news = new News;
        if($request->has('image')){
            $img_name = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $img_path = '/images/news';
            $request->image->move(public_path('/images/news'), $img_name);
            $news->image = $img_name;
            $news->image_path = $img_path;
        }

        $news->name_uz = $request->name_uz;
        $news->name_ru = $request->name_ru;
        $news->name_en = $request->name_en;
        $news->description_uz = $request->description_uz;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news->save();

        session()->flash('message','News added successfully.');
        
        return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news,$id)
    {
        $news = News::find($id);

        return view('news.edit',compact('news'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news,$id)
    {
        News::where('id', $id)
            ->update([
                    'name_uz' => $request->input('name_uz'),
                    'name_ru'=>$request->input('name_ru'),
                    'name_en'=>$request->input('name_en'),
                    'photo'=>$request->input('photo'),
                    'description_uz'=>$request->input('description_uz'),
                    'description_ru'=>$request->input('description_ru'),
                    'description_en'=>$request->input('description_en')]
            );
        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news,$id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back();
    }
}
