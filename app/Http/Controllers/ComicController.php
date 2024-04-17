<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPSTORM_META\map;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        // dd($request->description);

        // creo un nuovo fumetto con i dati ricevuti attraverso la richiesta POST del form

        $request->validated();

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;
        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();

        // dd($newComic);

        return redirect()->route('comics.show', $newComic->id);


    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // preleviamo il fumetto in base all'id
        // $comic = Comic::find( $id);

        // dd($comic);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        // $comic = Comic::find($id);


        // dd($comic);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        
        // codice per modificare la riga del database

        $request->validated();

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }



    // private function validation($data) {

    //     $validator = Validator::make($data, [
    //         'title' => 'required|max:255',
    //         'description' => 'required|max:5000',
    //         'thumb' => 'required|max:5000',
    //         'price' => 'required|max:7',
    //         'series' => 'required|max:100',
    //         'sale_date' => 'required|date',
    //         'type' => 'required|max:100',
    //         'artists' => 'max:5000|nullable',
    //         'writers' => 'max:5000|nullable',
    //     ], [
    //         'title.required' => "Devi inserire un titolo",
    //         'title.max' => "Il titolo può avere massimo :max caratteri",
    //         'description.required' => 'Devi inserire una descrizione',

    //         'max' => 'Il campo :attribute deve avere massimo :max caratteri',
    //         'required' => ':attribute deve essere compilato'
    //     ], [
    //         'title' => 'titolo',
    //         'description' => 'descrizione',
    //         'thumb' => 'immagine',
    //         'price' => 'prezzo',
    //         'series' => 'serie',
    //         'sale_date' => 'data di pubblicazione',
    //         'type' => 'tipologia',
    //         'artists' => 'artisti',
    //         'writers' => 'scrittori',
    //     ])->validate();

    // }
}
