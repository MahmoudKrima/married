<?php

namespace App\Http\Controllers;

use App\Models\Personalinfo;
use App\Models\specification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(){

        $specification = specification::where('user_id', Auth::user()->id)->first();
        $search ="";
         if( $specification){

            $search = specification::query()
            ->where('user_id','!=', Auth::user()->id)
            ->where('height', 'LIKE', "%{$specification->height}%")
            ->where('skin_colour', 'LIKE', "%{$specification->skin_colour}%")
            ->where('human_race', 'LIKE', "%{$specification->human_race}%")
            ->where('weight', 'LIKE', "%{$specification->weight}%")
            ->where('body_mass', 'LIKE', "%{$specification->body_mass}%")
            ->where('surgery', 'LIKE', "%{$specification->surgery}%")
            ->where('smoke', 'LIKE', "%{$specification->smoke}%")
            ->get();
            return view('account.page.search.index',compact('search'));
        }else{
            return view('account.page.search.index',compact('search'));
        }

    }
    public function filter(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        $specification = specification::where('user_id', $user->id)->first();
        $specification_height = specification::where('height', $specification->height)->get();
        $specification_surgery = specification::where('surgery', $specification->surgery)->get();
        $specification_smoke = specification::where('smoke', $specification->smoke)->get();
        $personal_info = Personalinfo::where('userID', $user->id)->first();
        $personal_age = Personalinfo::where('age', $personal_info->age)->get();
        return view('account.page.search.index',compact(['specification_height','specification_surgery','specification_smoke','personal_age']));

    }
}
