<?php

namespace App\Http\Controllers;

use App\Parcour;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ParcoursController extends Controller
{
    public function index(){
        $parcours = Parcour::select(DB::raw('parcours.*'))
            ->orderBy('created_at', 'asc')->get();
        return view('parcours',compact('parcours'));
    }

    public function create(){
        return view('parcours.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'diplome' => 'required|max:255',
            'annee' => 'required'
        ]);

        if (Input::hasFile('image')) {
            $imgName = Input::file('image')->getClientOriginalName();
        }
        else{
            $imgName = 'troll.png';
        }

        if(Parcour::create(['annee'=>$request->get('annee'),'diplome'=> $request->get('diplome'),'description'=>$request->get('description'),'image'=>$imgName])){
            Input::file('image')->move('images', $imgName);
            return redirect(route('parcours.index'));
        }
        else{
            return redirect(route('parcours.create'))->withInput();

        }
    }

    public function destroy($id)
    {
        $parcours = Parcour::findOrFail($id);

        //   dd($model);
        $parcours->delete();
        return redirect(route('parcours.index'))->with("Parcours supprimé");

    }
}
