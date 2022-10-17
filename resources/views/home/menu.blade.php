@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/etudiants.css') }}">
@endsection('style')

@section('adminBody')
<h1>
    @if (session()->get('usr_grp') == "Formateurs")
        {{" Mes vagues"}}
    @elseif (session()->get('usr_grp') == "Etudiants")
        {{"Mes cours"}}
    @endif
</h1>
<div class="content-center">
    <div class="etudiant-content">
        @if (session()->get('usr_grp') == "Formateurs")
            @forelse ($data as $data )
                <div class="card">
                    <figure>
                        <span class="icone"><i class="fa fa-book"></i></span>
                        <figcaption>
                            <h3>{{$data->vague_filiere_niveau_etude->filiere_niveau_etude->filiere->designation}}&nbsp;|
                                &nbsp;{{$data->vague_filiere_niveau_etude->filiere_niveau_etude->niveau_etude->designation}}
                            </h3>
                            <p><span><i class="fa fa-clock-o"></i></span>&nbsp;{{$data->vague_filiere_niveau_etude->vague->designation}}</p>
                            <a href="{{ route('formateur.cours', ['id'=>$data->vague_filiere_niveau_etude->id]) }}" class="btn btn-info btn-sm">Go</a>
                        </figcaption>
                    </figure>
                </div>
            @empty
            <h1 class="text-center">Aucun vague</h1>
            @endforelse
        @elseif (session()->get('usr_grp') == "Etudiants")
        
            @forelse ($data as $data )
                @foreach ($data->vague_filiere_niveau_etude->cours as $cour )
                    <div class="card">
                        <figure>
                            <span class="icone"><i class="fa fa-book"></i></span>
                            <figcaption>
                                <h3>
                                
                                    {{$cour->designation}}
                                </h3>
                                <p><span><i class="fa fa-clock-o"></i></span>&nbsp;{{$cour->duree}}</p>
                                <a href="{{ route('playlist', ['cour_id'=>$cour->id,'vague_id'=>$data->vague_filiere_niveau_etude->id]) }}" class="btn btn-info btn-sm">Voir plus</a>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            @empty
                    <h1 class="text-center">Aucun cours</h1>
            @endforelse
        
        @endif
    </div>
    
</div>
@endsection('adminBody')