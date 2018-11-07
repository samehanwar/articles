<?php

namespace Modules\Auth\Http\Controllers\Admin;

use Modules\Auth\Entities\Article;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{

    public function __construct()
    {
      $this->middleware(['auth','isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth::articles.index');
    }

    public function getArticlesData()
    {
        return datatables()->of(Article::all())->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth::articles.addNewArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          'name' => 'required',
          'body' => 'required|regex:/^[\pL\s]+$/|max:1000'
        ];

        $request['body'] = trim(strip_tags($request->body));
        unset($request['_token'], $request['_wysihtml5_mode']);

        $this->validate($request, $rules);
        $article = Article::create($request->all());
        if($article){
            \Session::flash('successMsg','your data inserted successfully ');
            return redirect('/auth/article');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        if($article){
            return view('auth::articles.addNewArticle', compact('article'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
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
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
