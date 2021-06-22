<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Theme;
use App\Models\Target;
use App\Models\Support;
use App\Models\Association;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $param = $request->all();
        if($param){
            if(isset($param['theme']))
                $articles = Article::where('theme',$param['theme'])->with(['theme','target:id,name'])->get();
            else if (isset($param['target']))
                $articles = Article::where('target',$param['target'])->with(['theme','target:id,name'])->get();
        } else {
            $articles = Article::with(['theme:id,name','target:id,name','association:id,name'])->get();
        }
        $themes = Theme::all();
        $target = Target::all();
        $support = Support::all();
        $assoc = Association::all();

        return \view(
            'search',
            [
                'articles' => $articles,
                'filters' => [
                    'themes' => $themes,
                    'target' => $target,
                    'support' => $support,
                    'assoc' => $assoc,
                ]
            ]
            );
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
