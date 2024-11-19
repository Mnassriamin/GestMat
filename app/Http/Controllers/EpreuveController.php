<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Epreuve;
use Illuminate\Support\Facades\Validator;
use App\Models\Matiere;



class EpreuveController extends Controller
{

    public function index()
{
    $eps = Epreuve::paginate(5);
    return view('affEpreuve', compact('eps'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matieres = Matiere::get();

        return view('formEp', compact('matieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nb' => 'bail|required|numeric',
            'li' => 'bail|required|max:20|alpha',
            'dt' => 'bail|required',
            'mt' => 'bail|required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $ep =new  Epreuve;
        $ep->Numero = $request->input('nb');
        $ep->Date = $request->input('dt');
        $ep->Lieu = $request->input('li');
        $ep->matiere_id = $request->input('mt');
        $ep->save();
        return redirect('../epreuves');
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
    public function edit(string $id)
    {
        $matieres = Matiere::get();
        $epreuve = Epreuve::find($id);
        return view('EditFormEp', compact('epreuve', 'matieres'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ep=Epreuve::find($id);
        $ep->Numero = $request->input('nb');
        $ep->Date = $request->input('dt');
        $ep->Lieu = $request->input('li');
        $ep->matiere_id = $request->input('mt');
        $ep->save();
        return redirect('../epreuves');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ep=Epreuve::find($id);
        $ep->delete();
        return redirect(route('epreuves.index'));
    }
}
