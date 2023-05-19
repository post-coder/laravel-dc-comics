<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // visualizzerò la lista dei fumetti
        $comics = Comic::all();
        
        return view('comics/index', compact('comics'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $formData = $request->all();

        // $formData['price'] = '$' . number_format($formData['price'], 2);


        $newComic = new Comic();

        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];

        // comando più veloce per riempire una riga nel db
        // ha bisogno della proprietà protected $fillable nel suo model per funzionare
        // sarà un array contenente le colonne "riempibili" in automatico
        $newComic->fill($formData);

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $formData = $request->all();

        $comic->update($formData);
        // $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // eliminare il fumetto col suo metodo delete
        $comic->delete();

        // reindirizzare alla index
        return redirect()->route('comics.index');
    }


    // funzione della validazione
    private function validation($request) {

        $formData = $request->all();

        $validator = Validator::make($formData, [
            'title' => 'required|max:200',
            'description' => 'required',
            'thumb'=>'required',
            'price' => 'required|max:20',
            'series' => 'required|max:50',
            'sale_date' => 'nullable|date_format:Y-m-d',
            'type' => 'required|max:20'
        ], [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => 'Il titolo deve avere :max caratteri',
            'description.required' => 'La descrizione deve essere inserita',
            'thumb.required' => 'Questo campo non può rimanere vuoto',
            'price.required' => 'Questo campo non può rimanere vuoto',
            'price.max' => 'Il prezzo non può avere più di :max caratteri',
            'series.required' => 'Questo campo non può rimanere vuoto',
            'series.max' => 'La serie non può avere più di :max caratteri',
            'sale_date.date_format' => 'La data deve essere indicata col formato AAAA-MM-GG',
            'type.required' => 'Questo campo non può rimanere vuoto',
            'type.max' => 'La tipologia non può avere più di :max caratteri',
        ])->validate();

        return $validator;

    }
}
