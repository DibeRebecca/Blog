@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

<!-- Vue de création d'un article -->
<h1 class="text-primary">Ajouter un nouvel article </h1>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="titre" id="titre">
        </div>
        <div class="mb-3">
            <label for="auteur" class="form-label">Auteur</label>
            <input type="text" class="form-control" name="auteur" id="auteur">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea  class="form-control" name="contenu" id="contenu" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">description</label>
            <textarea  class="form-control" name="description" id="description" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">details</label>
            <textarea  class="form-control" name="details" id="description" rows="5"></textarea>
        </div>
        

        <div class="mb-3">
            <label for="featured_image" class="form-label">Image principale</label>
            <input type="file" class="form-control" name="featured_image" id="featured_image">
        </div>
        <div class="mb-3">
            <label for="content_images" class="form-label">Images de contenu</label>
            <input type="file" class="form-control"  name="content_images[]" id="content_images" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection

