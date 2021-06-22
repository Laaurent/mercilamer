<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Article;
use App\Models\Theme;

class WelcomeController extends Controller
{
    public function index()
    {
        $climatNews = Article::where('theme',1)->orderBy('publication_date','DESC')->with(['theme:id,name','target:id,name'])->limit(3)->get();
        $bioNews = Article::where('theme',2)->orderBy('publication_date','DESC')->with(['theme:id,name','target:id,name'])->limit(3)->get();
        $pecheNews = Article::where('theme',3)->orderBy('publication_date','DESC')->with(['theme:id,name','target:id,name'])->limit(3)->get();
        $pollutionNews = Article::where('theme',4)->orderBy('publication_date','DESC')->with(['theme:id,name','target:id,name'])->limit(3)->get();
        $ecoNews = Article::where('theme',5)->orderBy('publication_date','DESC')->with(['theme:id,name','target:id,name'])->limit(3)->get();
        
        /* $themes = Theme::with('articles')->get(); */
        $themes_target = [];

        $articles = Article::with(['theme:id,name','target:id,name','support:id,name'])->get();

        for ($i=1; $i <= Theme::count() ; $i++) { 
            $theme_name = Theme::where('id',$i)->select('name')->first()->name;
            
            $themes1 = DB::table('articles')
            ->where('theme',$i)
            ->join('targets', 'targets.id', '=', 'articles.target')
            ->select('targets.name','target', DB::raw('COUNT(*) AS cnt'))
            ->groupBy('target')
            ->orderByRaw('COUNT(*) DESC')
            ->take(1)
            ->first();

            $themetmp = array($theme_name => ['id' => $themes1->target ,'name' => $themes1->name]);
            $themes_target = array_merge($themes_target, $themetmp);
        }

        $themes = Theme::all();

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
                'themes' => [
                    'themes' => $themes,
                    'themes_target' => $themes_target
                ],
                'articles' => $articles
            ]
        );
    }
}
