@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/ajout.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/video.css') }}">
<style>
  .hide{
    display: none
  }
</style>
@endsection('style')
@section('adminBody')
<div class="contenu carousel slide" data-ride="carousel" id="Ajout" data-interval="1000000" data-pause="hover">
    <form class="carousel-inner" method="POST" action="{{ route('store.video.attribution') }}">
      @csrf
      <div class="carousel-item active">
        <div class="formulaire">
          <div class="icone bg-danger">
              <figure>
                 <span><i class="fa fa-video-camera" style="font-size: 40px !important;"></i></span>
                 <figcaption>
                    <h4>Description du video</h4>
                 </figcaption>
              </figure>
          </div>
          <div class="form">
            <input type="hidden" name="auteur" id="auteur" value="{{auth()->user()->matricule}}">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" class="form-control" required>
                <strong class="invalid-feedback" id="alert-title"></strong>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="11"></textarea>
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
                <span><i class="fa fa-video-camera"></i></span>
                <figcaption>
                   <h4>Entrer vider</h4>
                </figcaption>
              </figure>
              <div class="button pl-5 py-2">
                <button type="button" id="prev" class="btn btn-sm btn-outline-info prev"><i class="fa fa-angle-left"></i>&nbsp;Precedant</button>
              </div>
            </div>
            <div class="form justify-content-start">
                <div class="forms mt-2">
                    <input type="file" name="link" class="file-input" id="link" hidden>
                    <input type="hidden" name='route' id="route" value="{{ route('store.video') }}">
                    <i class="fa fa-cloud-upload"></i>
                    <p>Importer video</p>
                </div>
                <div class="progress-area"></div>
                <div class="uploaded-area">

                </div>
                <div class="button py-2 mt-auto">
                    <button type="button" id="next1" class="btn btn-sm btn-info hide">suivant&nbsp;<i class="fa fa-angle-right"></i></button>
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
                   <h4>video Attribution</h4>
                </figcaption>
              </figure>
              <div class="button pl-5 py-2">
                <button type="button" id="" class="btn btn-sm btn-outline-info"><i class="fa fa-angle-left"></i>&nbsp;Precedant</button>
              </div>
            </div>
            <div class="form">
                <div class="top">
                    <h5>Selectionner le vague</h5>
                    <div class="card">
                      <input type="text" name="return_link" id="return_link">
                        @foreach ($cours as $cour)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="{{$cour->cours_vague_niveau_etude->id}}" name="checkbox[]" value="{{$cour->cours_vague_niveau_etude->id}}">
                                <label class="custom-control-label" for="{{$cour->cours_vague_niveau_etude->id}}">
                                    {{$cour->cours_vague_niveau_etude->cour->designation}}
                                    &nbsp;|&nbsp;
                                    {{$cour->cours_vague_niveau_etude->vague_filiere_niveau_etude->vague->designation}}
                                    &nbsp;|&nbsp;
                                    {{$cour->cours_vague_niveau_etude->vague_filiere_niveau_etude->filiere_niveau_etude->filiere->designation}}
                                    &nbsp;|&nbsp;
                                    {{$cour->cours_vague_niveau_etude->vague_filiere_niveau_etude->filiere_niveau_etude->niveau_etude->designation}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="button py-2 mt-auto">
                  <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-database"></i>&nbsp;valider</button>
                </div>
            </div>
        </div>
      </div>
    </form>
  </div>
@endsection('adminBody')
@section('script')
    <script src="{{ asset('assets/js/video.js') }}"></script>
@endsection('script')
