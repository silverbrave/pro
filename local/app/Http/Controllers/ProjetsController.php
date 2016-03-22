<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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
            'nom' => 'required|max:255',
            'dateP' => 'required',
            'lien' => 'required|max:255'

        ]);
        $dateFr = $request->get('dateP');
    //    $tabdate=explode('-',$dateFr);
      //  $titi = implode('-',$tabdate);
       // dd($titi);
       // $dateAng=$tabdate[2].'-'.$tabdate[1].'-'.$tabdate[0];

       // $date = \DateTime::createFromFormat('j-m-Y',$dateFr);
       // $dateAng = $date->format('Y-m-d H:i:s');

      //  dd($dateAng);

        $date= new \DateTime($dateFr);
        $dateAng = $date->format('Y-m-d H:i:s');

       // dd($dateAng);

        $nom = $request->get('nom');
        $nom = ucwords($nom);

        if (Input::hasFile('image')) {
            $imgName = Input::file('image')->getClientOriginalName();

            if (Projet::create(['nom' => $nom, 'dateP' => $dateAng, 'description' => $request->get('description'), 'competences' => $request->get('competences'), 'image' => $imgName, 'lien' => $request->get('lien')])) {
                Input::file('image')->move('images', $imgName);
                return redirect(route('projets.index'));
            } else {
                return redirect(route('projets.create'))->withInput();

            }
        } else {
                $imgName = 'troll.png';
                if (Projet::create(['nom' => $nom, 'dateP' => $request->get('dateP'), 'description' => $request->get('description'), 'competences' => $request->get('competences'), 'image' => $imgName, 'lien' => $request->get('lien')])) {
                    //  Input::file('image')->move('images', $imgName);
                     return redirect(route('projets.index'));
                } else {
                    return redirect(route('projets.create'))->withInput();

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
        $projet = Projet::findOrFail($id);
        return view('projets.show',compact('projet'));
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
        $projet = Projet::findOrFail($id);

        //   dd($model);
        $projet->delete();
        return redirect(route('projets.index'))->with("Projet supprimé");

    }
}
