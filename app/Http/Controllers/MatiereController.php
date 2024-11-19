<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;
use Illuminate\Support\Facades\Validator;


class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $matieres = Matiere::paginate(5);

    return view('affMat', compact('matieres'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view(view: 'formMat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cdm' => 'bail|required|max:5|alpha',
            'lb' => 'bail|required|max:20',
            'cf' => 'bail|required|between:1,5'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $mat = new Matiere();
        $mat->Codemat = $request->cdm;
        $mat->Libelle = $request->lb;
        $mat->Coef = $request->cf;
        $mat->save();
        return redirect('../matieres');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matiere $matiere)
    {
        return view('EditFormMat', compact('matiere'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mat=Matiere::find($id);
        $mat->Codemat = $request->input('cdm');
        $mat->Libelle = $request->input('lb');
        $mat->Coef = $request->input("cf");
        $mat->save();
        return redirect('../matieres')->with('success', 'Matiere Modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mat=Matiere::find($id);
        $mat->delete();
        return redirect(route('matieres.index'));
    }
}
