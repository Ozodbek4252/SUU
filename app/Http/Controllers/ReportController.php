<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = Report::all();
        return view('report.index',compact('report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
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
        $img_name = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
        $img_path = '/images/news';
        $request->image->move(public_path('/images/news'), $img_name);

        $report = new Report;
        $report->name_uz = $request->name_uz;
        $report->name_ru = $request->name_ru;
        $report->name_en = $request->name_en;
        $report->photo = $img_name;
        $report->img_path = $img_path;
        $report->description_uz = $request->description_uz;
        $report->description_ru = $request->description_ru;
        $report->description_en = $request->description_en;
        $report->save();
        return redirect('report');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report,$id)
    {
        $report = Report::find($id);

        return view('report.edite',compact('report'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report,$id)
    {
        Report::where('id', $id)
            ->update([
                    'name_uz' => $request->input('name_uz'),
                    'name_ru'=>$request->input('name_ru'),
                    'name_en'=>$request->input('name_en'),
                    'photo'=>$request->input('photo'),
                    'description_uz'=>$request->input('description_uz'),
                    'description_ru'=>$request->input('description_ru'),
                    'description_en'=>$request->input('description_en')]
            );
        return redirect('report');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report,$id)
    {
        $report = Report::find($id);
        $report->delete();
        return redirect()->back();
    }
}
