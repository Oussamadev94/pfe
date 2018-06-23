@extends('front.layouts.master')


@section('content')
@php
    $img=$post->images->first()['image'];
@endphp  

<div class="container text-left" style="margin-bottom: 20px">
    <h3 class="card-title">{{$post->title}}</h3><hr>
    <div class="card mt-4">
        <img class="card-img-top" height="150px" src="{{ asset('storage/img/'.$img ) }}" onerror="this.onerror=null;this.src='storage/img/default.jpg';" alt="image" >
        <div class="card-body">
            <h4>Information Principale</h4>  
            <p class="card-text">Nom de l'utilisateur : {{ $post->user->name }}</p>
            <p class="card-text">Le Pays: {{ $post->country->name }}</p>
            <p class="card-text">Le prix : {{ $post->price }}</p>
            <h4>Details de l'annonce :</h4>
            <p class="card-text">{{ $post->text }}</p>
        </div>
    </div>
</div>
@endsection