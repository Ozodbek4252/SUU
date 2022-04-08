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
        $news = News::paginate(10);
        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        // dd($id);
        // if($id){
        //     $news = News::find($id);
        //     return view('news.create', ['news'=>$news]);
        // }
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
        
        return redirect()->route('news', app()->getLocale());
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
    public function edit(News $news, $lang, $id)
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
    public function update(Request $request, $lang, $id)
    {
        // $validatedData = $request->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);
        

        $news = News::find($id);

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

        session()->flash('message','News updated successfully.');

        return redirect()->route('news', app()->getLocale());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news, $lang, $id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back();
    }
}
