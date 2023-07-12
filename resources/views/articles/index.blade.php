<!-- Vue d'affichage de la liste des articles -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

<h1>Liste des articles</h1>

@if ($articles->isEmpty())
    <p>Aucun article trouvé.</p>
@else
    <ul>
        @foreach ($articles as $article)
            <li>
                <h2>{{ $article->titre }}</h2>
                <p>{{ $article->contenu }}</p>
            </li>
        @endforeach
    </ul>
@endif
</div>
@endsection