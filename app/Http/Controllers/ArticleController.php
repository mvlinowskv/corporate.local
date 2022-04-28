<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\File;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
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
         
        if(Auth::check()){
            return view('articles.create');
        } else {
            return view('articles.error');
        }
            
        
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
        

        if(Article::where('title', '=', $request->input('title'))->first() == null && Article::where('url', '=', $request->input('url'))->first() == null){

                $this->validate(request(), [
                    'title'                  => 'required',
                    'description'            => 'required',
                    'url'                    => 'required',
                    'content'                => 'required',
                    'thumbnail'              => 'required'
                ]);

                $article = new Article;

                $article->title;
                $article->description;
                $article->url;
                $article->content;

                $fileName = $request->var_dump(file('thumbnail'))->getClientOriginalName();
                $filePath = $request->file('thumbnail')->storeAs('images', $fileName);

                $article->thumbnail = $request->file->getClientOriginalName();
                $article->thumbnailPath = $filePath;
                $article->save();

            
                
                
                // $article = Article::create(request(['title', 'description', 'url', 'content', 'thumbnail']));


                

                
                // request()->thumbnail->move('public/img', thumbnail->getClientOriginalName());

                return redirect()->to('/articles');
                
        } else {
            return view('articles.error');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $articles)
    {
        return view('articles.show', ['articles' => $articles]);
    }

    public function showSingle($url) {
        
        $article = Article::where('url', $url)
            ->firstOrFail();
        
        return view('articles.single', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    
}
