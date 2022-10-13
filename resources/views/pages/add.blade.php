@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/ajout.css') }}">
@endsection('style')
@section('adminBody')
<div class="contenu carousel slide" data-ride="carousel" id="Ajout" data-interval="1000000" data-pause="hover">
  <form class="carousel-inner" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="carousel-item active">
      <div class="formulaire">
        <div class="icone bg-danger">
            <figure>
               <span><i class="fa fa-user-circle"></i></span>
               <figcaption>
                  <h4>Information de l'utilisateur</h4>
               </figcaption>
            </figure>
        </div>
        <div class="form">
          <div class="form-group">
              <label for="matricule">Matricule</label>
              <span><i class="fa fa-user-times"></i></span>
              <input type="text" name="matricule" id="matricule" class="form-control" value="{{$matricule}}">
              <strong class="invalid-feedback" id="alert-matricule"></strong>
          </div>
          <div class="form-group">
              <label for="nom">Nom d'utilisateur</label>
              <span><i class="fa fa-user"></i></span>
              <input type="text" name="nom" id="nom" class="form-control" value="{{$name}}">
              <strong class="invalid-feedback" id="alert-nom"></strong>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <span><i class="fa fa-envelope"></i></span>
            <input type="email" name="email" id="email" class="form-control" value="{{$email}}">
            <strong class="invalid-feedback" id="alert-email"></strong>
          </div>
            <div class="form-group">
                <label for="nom">mots de passe</label>
                <span><i class="fa fa-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control">
                <strong class="invalid-feedback" id="alert-password"></strong>
            </div>
          <div class="button">
            <button type="button" id="next" class="btn btn-sm btn-info">suivant&nbsp;<i class="fa fa-angle-right"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="formulaire">
          <div class="icone">
            <figure>
              <span><i class="fa fa-cog"></i></span>
              <figcaption>
                 <h4>Groupe d'utilisateur</h4>
              </figcaption>
            </figure>
            <div class="button pl-5 py-2">
              <button type="button" id="prev" class="btn btn-sm btn-outline-info"><i class="fa fa-angle-left"></i>&nbsp;Precedant</button>
            </div>
          </div>
          <div class="form">
              <div class="top">
                  <h5>Selectionner le vague</h5>
                  <div class="card">
                    @foreach ($users_group as $index => $group )
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="{{$index}}" name="checkbox[]" value="{{$group->id}}">
                            <label class="custom-control-label" for="{{$index}}">{{$group->group_name}}</label>
                        </div>
                    @endforeach
                  </div>
              </div>
              <div class="button">
                <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-database"></i>&nbsp;valider</button>
              </div>
          </div>
      </div>
    </div>
  </form>
</div>
@endsection('adminBody')
@section("script")
  <script src="{{ asset('assets/js/admin/register.js') }}"></script>
@endsection("script")