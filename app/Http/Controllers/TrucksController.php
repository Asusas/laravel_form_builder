<?php

namespace App\Http\Controllers;

use App\Automarke;
use App\Automobilis;
use App\Forms\TrucksForm;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class TrucksController extends BaseController
{
    use FormBuilderTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $rusiuotiPagal = 'metai';
        $rikiuotiPagal = 'desc';

        if ($request->has('rusiuotiPagal')) {
            $rusiuotiPagal = $request->query('rusiuotiPagal');
        }
        if ($request->has('rikiuotiPagal')) {
            $rikiuotiPagal = $request->query('rikiuotiPagal');
        }
        $markes = Automobilis::join('automarkes', 'automobiliai.markes_id', '=', 'automarkes.id')
            ->orderBy($rusiuotiPagal, $rikiuotiPagal)->get();

        return view('trucks', compact('markes', 'rusiuotiPagal', 'rikiuotiPagal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->form(TrucksForm::class, [
            'method' => 'POST',
            'url' => route('trucks.store'),
        ]);

        return view('formView', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $this->form(TrucksForm::class);

        $form->validate(
            ['marke' => 'required|unique:App\Automarke,marke'],
            ['unique' => 'Toks įrašas jau egzistuoja.'],
        );

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        Automarke::create($form->getFieldValues());
        Session::flash('status', 'Sunkvežimis sukurtas sėkmingai');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vilkikas = Automarke::findOrFail($id);

        $markes = Automobilis::findOrFail($id);

        return view('truckInfo', compact(['vilkikas', 'markes']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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