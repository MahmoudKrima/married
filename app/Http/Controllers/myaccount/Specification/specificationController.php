<?php

namespace App\Http\Controllers\myaccount\specification;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\specification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class specificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('account.page.specification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'skin_colour' => 'required',
            'height' => 'required',
            'human_race' => 'required',
            'weight' => 'required',
            'beauty' => 'required',
            'body_mass' => 'required',
            'surgery' => 'required',
            'Health_status' => 'required',
            'about_your_self' => 'required',
            'exterior' => 'required',
            'smoke' => 'required',
            'mention_something' => 'required',
        ]);

        $specification = new specification();
        $specification->skin_colour = $request->skin_colour;
        $specification->height = $request->height;
        $specification->human_race = $request->human_race;
        $specification->weight = $request->weight;
        $specification->beauty = $request->beauty;
        $specification->body_mass = $request->body_mass;
        $specification->smoke = $request->smoke;
        $specification->surgery = $request->surgery;
        $specification->Health_status = $request->Health_status;
        $specification->about_your_self = $request->about_your_self;
        $specification->exterior = $request->exterior;
        $specification->mention_something = $request->mention_something;
        $specification->user_id = Auth::user()->id;
        $specification->save();
        $user = User::find(Auth::user()->id);
        $user->specification = '1';
         $user->save();
       return  redirect(url('/dashboard2'))->with("success_specification_add", "تم اضافه المواصفات بنجاح");



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specification = specification::where('user_id',Auth::user()->id)->first();
        return view('account.page.specification.edit',compact('specification'));
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
        $specification = Specification::findOrFail($id)->first();

        $request->validate([
            'skin_colour' => 'required',
            'height' => 'required',
            'human_race' => 'required',
            'weight' => 'required',
            'beauty' => 'required',
            'body_mass' => 'required',
            'surgery' => 'required',
            'Health_status' => 'required',
            'about_your_self' => 'required',
            'exterior' => 'required',
            'smoke' => 'required',
            'mention_something' => 'required',
        ]);
        $specification->skin_colour = $request->skin_colour;
        $specification->height = $request->height;
        $specification->human_race = $request->human_race;
        $specification->weight = $request->weight;
        $specification->beauty = $request->beauty;
        $specification->body_mass = $request->body_mass;
        $specification->smoke = $request->smoke;
        $specification->surgery = $request->surgery;
        $specification->Health_status = $request->Health_status;
        $specification->about_your_self = $request->about_your_self;
        $specification->exterior = $request->exterior;
        $specification->mention_something = $request->mention_something;
        $specification->user_id = Auth::user()->id;
        $specification->save();

       return  redirect(url('/dashboard2'))->with("success_specification_add", " تم تعديل المواصفات بنجاح");
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
