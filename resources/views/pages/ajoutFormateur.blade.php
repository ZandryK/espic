@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/ajout.css') }}">
@endsection('style')
@section('adminBody')
<div class="contenu carousel slide" data-ride="carousel" id="Ajout" data-interval="1000000" data-pause="hover">
  <form class="carousel-inner" method="POST" action="{{ route('store.personnel') }}">
    @csrf
    <input type="hidden" name="key" value="{{$key}}">
    <div class="carousel-item active">
      <div class="formulaire">
        <div class="icone bg-danger">
            <figure>
               <span><i class="fa fa-user-circle"></i></span>
               <figcaption>
                  <h4>Information du personnels</h4>
               </figcaption>
            </figure>
        </div>
        <div class="form">
          <div class="form-group">
              <label for="matricule">Matricule</label>
              <span><i class="fa fa-user-times"></i></span>
              <input type="text" name="matricule" id="matricule" class="form-control">
              <strong class="invalid-feedback" id="alert-matricule"></strong>
          </div>
          <div class="form-group">
              <label for="nom">Nom</label>
              <span><i class="fa fa-user"></i></span>
              <input type="text" name="nom" id="nom" class="form-control">
              <strong class="invalid-feedback" id="alert-nom"></strong>
          </div>
          <div class="form-group">
            <label for="prenom">Prenom</label>
            <span><i class="fa fa-user"></i></span>
            <input type="text" name="prenom" id="prenom" class="form-control">
            <strong class="invalid-feedback" id="alert-prenom"></strong>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <span><i class="fa fa-envelope"></i></span>
            <input type="email" name="email" id="email" class="form-control">
            <strong class="invalid-feedback" id="alert-email"></strong>
          </div>
          <div class="form-group">
            <label for="phone">contact</label>
            <span><i class="fa fa-phone"></i></span>
            <input type="tel" name="phone" id="phone" class="form-control">
            <strong class="invalid-feedback" id="alert-phone"></strong>
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
                 <h4>Personnels access</h4>
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
                    @if ($key == 'formateur')
                      @foreach ($data as $data)
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="{{$data->id}}" name="checkbox[]" value="{{$data->id}}">
                          <label class="custom-control-label" for="{{$data->id}}">{{$data->vague->designation}}&nbsp;|&nbsp;{{$data->filiere_niveau_etude->niveau_etude->designation}}&nbsp;|&nbsp;{{$data->filiere_niveau_etude->filiere->designation}}</label>
                        </div>
                      @endforeach
                    @elseif ($key == 'etudiant')
                      @foreach ($data as $data)
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="{{$data->id}}" name="checkbox[]" value="{{$data->id}}">
                          <label class="custom-control-label" for="{{$data->id}}">{{$data->filiere->designation}}&nbsp;|&nbsp;{{$data->niveau_etude->designation}}</label>
                        </div>
                      @endforeach
                    @endif
                  </div>
              </div>
              <div class="button py-2">
                <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-database"></i>&nbsp;valider</button>
              </div>
          </div>
      </div>
    </div>
  </form>
</div>
@endsection('adminBody')
@section("script")
  <script src="{{ asset('assets/js/admin/formateurs&etudiants_validation.js') }}"></script>
@endsection("script")