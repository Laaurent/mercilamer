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
        $pattern = isset($param['pattern']) ? $param['pattern'] : '';
        $theme_select = isset($param['theme']) ? $param['theme'] : '';
        if($param){
            if(isset($param['theme']))
                $articles = Article::where('theme',$param['theme'])->with(['theme','target:id,name','association:id,name'])->orderBy('publication_date','DESC')->get();
            else if (isset($param['target']))
                $articles = Article::where('target',$param['target'])->with(['theme','target:id,name','association:id,name'])->orderBy('publication_date','DESC')->get();
            else if (isset($param['pattern']))
                $articles = Article::whereRaw("MATCH (title,content,key_words) AGAINST (? IN BOOLEAN MODE)", [$param['pattern']])->with(['theme','target:id,name','association:id,name'])->orderBy('publication_date','DESC')->get();     
            } else {
            $articles = Article::with(['theme:id,name','target:id,name','association:id,name'])->orderBy('publication_date','DESC')->get();
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
                ],
                'pattern' => $pattern,
                'theme' => $theme_select
            ]
            );
    }

    public function search(Request $request)
    {
        $param = $request->all();
        
       /*  dd($param); */
       /*  dd($param['theme']); */
        /* $articles = Article::all(); */

        $articles = Article::with(['theme','target:id,name','association:id,name']);

        //http://localhost:3000/recherche-filter?theme=1&target=4,5&association=5
        if(isset($param['theme']))
        {
            $theme = explode(',',$param['theme']);
            $articles = $articles->whereIn('theme',$theme);     
        }

        //http://localhost:3000/recherche-filter?theme=1&target=4,5&association=5
        if(isset($param['target']))
        {
            $target = explode(',',$param['target']);
            $articles = $articles->whereIn('target',$target);     
        }

        //http://localhost:3000/recherche-filter?theme=1&target=4,5&association=5
        if(isset($param['support']))
        {
            $support = explode(',',$param['support']);
            $articles = $articles->whereIn('support',$support);     
        }

        //http://localhost:3000/recherche-filter?theme=1&target=4,5&association=5
        if(isset($param['association']))
        {
            $association = explode(',',$param['association']);
            $articles = $articles->whereIn('association',$association);     
        }

        if(isset($param['pattern']))
        {
            $param['pattern'] = str_replace(",","* ",$param['pattern']) .'*';
            $articles = $articles->whereRaw("MATCH (title,content,key_words) AGAINST (? IN BOOLEAN MODE)", [$param['pattern']]);     
        }

        if(isset($param['sort']))
        {
            $sort = explode('-',$param['sort']);
            $articles = $articles->orderBy($sort[0],$sort[1]);     
        }
        
        return $articles->get();
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
        $article = Article::where('id',$id)->with(['theme','target:id,name','association:id,name','support:id,name'])->first();
        return \view('article',[
            'article' => $article
        ]);
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
