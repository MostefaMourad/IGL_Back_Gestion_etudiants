<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\Helpers\APIHelpers;
use App\Http\Requests\AjoutEtudiantRequest;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        $response = APIHelpers::createAPIResponse(false, 200, '', $etudiants);
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AjoutEtudiantRequest $request)
    {
        $new_etudiant = new Etudiant();
        $new_etudiant->nom = $request->nom;
        $new_etudiant->prenom = $request->prenom;
        $new_etudiant->niveau = $request->niveau;
        $new_etudiant->section = $request->section;
        $new_etudiant->groupe = $request->groupe;
        $new_etudiant->specialite = $request->specialite;
        $new_etudiant->date_naissance = $request->date_naissance;
        $new_etudiant->adresse = $request->adresse;
        $new_etudiant->indicateur_promo = $request->indicateur_promo;
        $etudiant_save = $new_etudiant->save();
        if ($etudiant_save) {
            $response = APIHelpers::createAPIResponse(false, 201, 'Ajout avec succés', null);
            return response()->json($response, 201);
        } else {
            $response = APIHelpers::createAPIResponse(true, 400, 'échec', null);
            return response()->json($response, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        $response = APIHelpers::createAPIResponse(false, 200, '', $etudiant);
        return response()->json($response, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AjoutEtudiantRequest $request, $id)
    {
        $etudiant = Etudiant::find($id);
        if ($etudiant == null) {
            $response = APIHelpers::createAPIResponse(true, 400, 'échec', null);
            return response()->json($response, 400);
        } else {
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->niveau = $request->niveau;
            $etudiant->section = $request->section;
            $etudiant->groupe = $request->groupe;
            $etudiant->specialite = $request->specialite;
            $etudiant->date_naissance = $request->date_naissance;
            $etudiant->adresse = $request->adresse;
            $etudiant->indicateur_promo = $request->indicateur_promo;
            $etudiant_save = $etudiant->save();
            if ($etudiant_save) {
                $response = APIHelpers::createAPIResponse(false, 200, 'Modification avec succés', null);
                return response()->json($response, 200);
            } else {
                $response = APIHelpers::createAPIResponse(true, 400, 'échec', null);
                return response()->json($response, 400);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);
        if ($etudiant == null) {
            $response = APIHelpers::createAPIResponse(true, 400, 'échec', null);
            return response()->json($response, 400);
        } else {

            $etudiant_delete = $etudiant->delete();
            if ($etudiant_delete) {
                $response = APIHelpers::createAPIResponse(false, 200, 'Suppression avec succés', null);
                return response()->json($response, 200);
            } else {
                $response = APIHelpers::createAPIResponse(true, 400, 'échec', null);
                return response()->json($response, 400);
            }
        }
    }
}
