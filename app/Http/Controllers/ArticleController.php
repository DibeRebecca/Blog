<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        $article = new Article();
        $article->titre = $request->input('titre');
        $article->auteur = $request->input('auteur');
        $article->contenu = $request->input('contenu');
        $article->description = $request->input('description');
        $article->details = $request->input('details');
        $article->featured_image = $request->input('featured_image');
        $article->content_images = $request->input('content_images');



        // Traitement de l'image principale
        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image');
            $featuredImageName = time() . '_' . $featuredImage->getClientOriginalName();
            $featuredImage->storeAs('/public', $featuredImageName);
            $article->featured_image = $featuredImageName;
        }

        // Traitement des images de contenu
        if ($request->hasFile('content_images')) {
            $contentImages = $request->file('content_images');
            $contentImageNames = [];

            foreach ($contentImages as $contentImage) {
                $contentImageName = time() . '_' . $contentImage->getClientOriginalName();
                //$contentImage->storeAs('/storage', $contentImageName);
                $contentImageNames[] = $contentImageName;
            }

            $article->content_images = json_encode($contentImageNames);
        }
        dd($article);
        $article->save();

        // Redirection ou affichage de la vue
        return redirect('articles.show',$id)->with('success','Article crée avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
    return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
    return view('articles.edit', compact('article'));
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
        $article = Article::find($id);
    $article->title = $request->input('titre');
    $article->content = $request->input('contenu');

    // Traitement de l'image principale
    if ($request->hasFile('featured_image')) {
        $featuredImage = $request->file('featured_image');
        $featuredImageName = time() . '_' . $featuredImage->getClientOriginalName();
        $featuredImage->storeAs('public/storage/featured_images', $featuredImageName);
        $article->featured_image = $featuredImageName;
    }

    // Traitement des images de contenu
    if ($request->hasFile('content_images')) {
        $contentImages = $request->file('content_images');
        $contentImageNames = [];

        foreach ($contentImages as $contentImage) {
            $contentImageName = time() . '_' . $contentImage->getClientOriginalName();
            $contentImage->storeAs('public/content_images', $contentImageName);
            $contentImageNames[] = $contentImageName;
        }

        $article->content_images = json_encode($contentImageNames);
    }

    $article->save();

    // Redirection ou affichage de la vue
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

    // Supprimer les images associées
    if ($article->featured_image) {
        Storage::delete('public/featured_images/' . $article->featured_image);
    }

    if ($article->content_images) {
        $contentImages = json_decode($article->content_images);
        foreach ($contentImages as $contentImage) {
            Storage::delete('public/content_images/' . $contentImage);
        }
    }

    // Supprimer l'article
    $article->delete();

    // Redirection ou affichage de la vue
    }
}
