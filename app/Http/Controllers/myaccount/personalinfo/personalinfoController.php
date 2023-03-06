<?php

namespace App\Http\Controllers\myaccount\personalinfo;

use App\Models\city;
use App\Models\User;
use App\Models\Nationality;
use App\Models\Personalinfo;
use Illuminate\Http\Request;
use App\Models\originalyCountry;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class personalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personalinfo = Personalinfo::where('userID',Auth::user()->id)->first();
        // dd($personalinfo);
        return view('account.page.myaccount',compact('personalinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city=city::all();
        $Nationality= Nationality::all();
        $originalyCountry=originalyCountry::all();
        return view('account.page.personalinfo.create',compact('Nationality','city','originalyCountry'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all());
    $request->validate([

        'city' => 'required',
        'nationality' => 'required',
        'originalyCountry' => 'required',
        'liveIN' => 'required',
        'age' => 'required',
    ],[
        'liveIN.required' => 'يجب ادخال مكان منطقة السكن',
        'city.required' => 'يجب اختيار المدينة',
        'nationality.required' => 'يجب اختيار الجنسية',
        'originalyCountry.required' => 'يجب اختيار بلد الاصل',
    ]);
    $personalinfo = new Personalinfo();
    $personalinfo->city = $request->input('city');
    $personalinfo->nationality = $request->input('nationality');
    $personalinfo->originalyCountry = $request->input('originalyCountry');
    $personalinfo->liveIN = $request->input('liveIN');
    $personalinfo->age = $request->input('age');
    $personalinfo->notes = $request->notes;
    $personalinfo->userID = Auth::user()->id;
    $personalinfo->save();
    $user = User::find(Auth::user()->id);
    $user->personal_info = '1';
    $user->save();
        return  redirect(url('/personalinfo'))->with("success", "تم اضافه معلوماتك بنجاح");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo"show";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personalinfo = Personalinfo::where('userID',Auth::user()->id)->first();
        $city=city::all();
        $Nationality= Nationality::all();
        $originalyCountry=originalyCountry::all();

        // dd($all_personal_infos);
        return view('account.page.personalinfo.edit',compact(['personalinfo','city','Nationality','originalyCountry']));
        // echo"edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'city' => 'required',
            'nationality' => 'required',
            'originalyCountry' => 'required',
            'liveIN' => 'required',
            'age' => 'required',
        ],[
            'liveIN.required' => 'يجب ادخال مكان منطقة السكن',
            'city.required' => 'يجب اختيار المدينة',
            'nationality.required' => 'يجب اختيار الجنسية',
            'originalyCountry.required' => 'يجب اختيار بلد الاصل',
        ]);

       $personalinfo = Personalinfo::findOrFail($id);

       $personalinfo->update([
        'age' => $request->input('age'),
        'liveIN' => $request->liveIN,
        'nationality' => $request->nationality,
        'originalyCountry' => $request->originalyCountry,
        'city' => $request->city,
        'notes' => $request->notes
       ]);
       return  redirect(url('/personalinfo'))->with("success_update", "تم تعديل معلوماتك بنجاح");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
