@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/profil.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil">
    <div class="icone">
        <span><i class="fa fa-user-circle"></i></span>
    </div>
    <div class="formulaire">
        <h2>Information personnel</h2>
        <form action="">
            <div class="form-group">
                <label for="matricule">Matricule</label>
                <span class="prefix"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="matricule" value="{{auth()->user()->matricule}}">
            </div>
            <div class="form-group">
                <label for="username">Nom utilisateur</label>
                <span class="prefix"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="username" value="{{auth()->user()->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <span class="prefix"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" id="email" value=" {{auth()->user()->email}} ">
            </div>
        </form>
        <div class="button">
            <a href="" type="button" class="edit"><i class="fa fa-user">&nbsp;modifier</i></a>
            <a href="" type="button" class="reset"><i class="fa fa-refresh">&nbsp;changer mots de passe</i></a>
        </div>
    </div>
</div>
@endsection('adminBody')