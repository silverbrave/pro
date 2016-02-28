<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProjetsController extends Controller
{
   /* public function __construct(){
        $this->middleware('auth');
    }*/

    public function index()
    {
        $projets = Projet::select(DB::raw('projets.*'))
            ->orderBy('created_at', 'desc')->get();
        return view('projets.index',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        /*$poles= Pole::lists('nomPole', 'id');
        $localisations = Localisation::lists('nomLoc','idLoc');*/
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
//dd($request->all());
        $this->validate($request, [
            'nomModele' => 'required|max:255',
            'nomActivite' => 'required|max:255'
        ]);


        $nomModele=$request->get('nomModele');
        $nomActivite=$request->get('nomActivite');
        $nomModele =ucwords($nomModele);
        $nomActivite =ucwords($nomActivite);

        $nomPrenomPrive = $request->get('nomPrenomPrive');
        $nomAnimPrive = $request->get('nomAnimPrive');
        $agePrive = $request->get('agePrive');
        if($nomPrenomPrive=="1"){
            $nomPrenomPrive=1;
        }
        else{
            $nomPrenomPrive=0;
        }
        if($nomAnimPrive=="1"){
            $nomAnimPrive=1;
        }
        else{
            $nomAnimPrive=0;
        }
        if($agePrive=="1"){
            $agePrive=1;
        }
        else{
            $agePrive=0;
        }

        if (Input::hasFile('image')) {
            $imgName = Input::file('image')->getClientOriginalName();
        }
        else{
            $imgName = 'troll.png';
        }
        if($model= DB::table('modeles')->where('nomModele',$nomModele)->get()){
            return redirect(route('modeles.modele.create'))->withInput()->withErrors(['modeleExistant' =>'Modele deja existant']);
        }
        else{
            if(Modeles::create(['nomModele'=>$nomModele,'nomActivite'=>$nomActivite,'nomAnim'=>$request->get('nomAnim'),'nbDePlaces'=>$request->get('nbDePlaces'),'localisation'=>$request->get('localisation'),'descript'=>$request->get('descript'),'urlImage'=>$imgName,'pole' =>$request->get('pole'),'nomPrenomPrive' =>$nomPrenomPrive,'nomAnimPrive'=>$nomAnimPrive,'agePrive'=>$agePrive])){
                return redirect(route('modeles.modele.index'));
            }
            else{
                return redirect(route('modeles.modele.create'))->withInput();

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $model = Modeles::findOrFail($id);
        return $model;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $model = Modeles::findOrFail($id);
        $localisations = Localisation::lists('nomLoc','idLoc');
        return view('modeles.edit',compact('model','localisations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $model = Modeles::findOrFail($id);
        $model->update($request->all());
        return redirect(route('modeles.modele.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Modeles $modele
     * @internal param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $model = Modeles::findOrFail($id);

        //   dd($model);
        $model->delete();
        return redirect(route('modeles.modele.index'))->with("Modèle supprimé");

    }
}
