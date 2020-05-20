<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        // dd($articles);
        return view('articles.index', compact('articles'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPublished()
    {
        $articles = Article::where('published', true)->get();
        //  dd($articles);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title'] , '-') . rand(1,100);


        $validator = Validator::make($data, [
            'title' => 'required|string|max:150',
            'body' => 'required',
            'author' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('articles/create')
                ->withErrors($validator)
                ->withInput();
        }

        // $request->validate([
        //     'title' => 'required|string|max:150',
        //     'body' => 'required',
        //     'author' => 'required'
        // ]);
        
        // dd($request->all(););
        $article = new Article;
        // $article->title = $data['title'];
        $article->fill($data);
        $saved = $article->save();
        if(!$saved) {
            dd('errore di salvataggio');
        }
        
        return redirect()->route('articles.show', $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        //se uso $id
        //$article = Article::find($id);

        // se uso slug 
        $article = Article::where('slug', $slug)->first();
        // dd($article);

        //se non trovo articolo mando pagina 404
        if(empty($article)){
            abort('404');
        }
        
        return view('articles.show', compact('article'));
    }


    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Article $article)
    // {
    //     dd($article);
    //     //se non trovo articolo mando pagina 404
    //     if (empty($article)) {
    //         abort('404');
    //     }

    //     return view('articles.show', compact('article'));
    // }

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
