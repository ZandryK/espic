@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/video.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil">
    <form action="{{ route('store.video') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form input-file">
            <h3>Entrer video</h3>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="7"></textarea>
            </div>
           <div class="d-flex flex-row align-items-center">
                <button type="button" class="btnwarning ml-auto">
                    <span class="d-flex flex-column justify-content-center"><i class="fa fa-video-camera fa-2x"></i><span>cliquer ici pour ajouter une video</span></span>
                    <input type="file" name="link" id="">
                </button>
           </div>
        </div>
        <div class="form input-check">
            <h3>Choisisez les cours et le vague qui peut voir cette video</h3>
            <hr>
            <div class="check">
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
            <button type="submit" class="btn btn-sm btn-info ml-auto mr-2 mb-2" style="width: 100px;"><i class="fa fa-database"></i>valider</button>
        </div>
    </form>
</div>
@endsection('adminBody')