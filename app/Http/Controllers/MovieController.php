<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $url = 'https://api.themoviedb.org/3/movie/';
    protected $key = '8b21943343cbcfe5772e75c04c6b3c22';
    public function index()
    {
        $movies = Http::get($this->url . 'popular?api_key=' . $this->key)->json()['results'];
        return view('index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Http::get($this->url . $id . "?api_key=" . $this->key . "&append_to_response=videos,credits")->json();
        $casts = $movie['credits']['cast'];
        return view('show', ['movie' => $movie, 'casts' => $casts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
