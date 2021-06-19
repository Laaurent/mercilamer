<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    //* HOME
    public function indexThemeNews()
    {
        $climatNews = Article::where('theme',1)->orderBy('publication_date','DESC')->with(['theme','target'])->limit(3)->get();
        $bioNews = Article::where('theme',2)->orderBy('publication_date','DESC')->with(['theme','target'])->limit(3)->get();
        $pecheNews = Article::where('theme',3)->orderBy('publication_date','DESC')->with(['theme','target'])->limit(3)->get();
        $pollutionNews = Article::where('theme',4)->orderBy('publication_date','DESC')->with(['theme','target'])->limit(3)->get();
        $ecoNews = Article::where('theme',5)->orderBy('publication_date','DESC')->with(['theme','target'])->limit(3)->get();
        
        return \view(
            'welcome',
            [
                'news' => [
                    'climatNews' => $climatNews,
                    'bioNews' => $bioNews,
                    'pecheNews' => $pecheNews,
                    'pollutionNews' => $pollutionNews,
                    'ecoNews' => $ecoNews
                ],
            ]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
