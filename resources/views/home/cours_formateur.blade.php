@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/etudiants.css') }}">
@endsection('style')

@section('adminBody')
<h1>
    Mes&nbsp;cours
</h1>
<div class="content-center">
    <div class="etudiant-content">
            @forelse ($cours as $data )
                <div class="card">
                    <figure>
                        <span class="icone"><i class="fa fa-book"></i></span>
                        <figcaption>
                            <h3>
                                {{$data->designation}}
                            </h3>
                            <p><span><i class="fa fa-clock-o"></i></span>&nbsp;{{$data->duree}}</p>
                            <a href="{{ route('playlist',['cour_id'=>$data->id,'vague_id'=>$id]) }}" class="btn btn-info btn-sm">Voir plus</a>
                        </figcaption>
                    </figure>
                </div>
            @empty
                <h1 class="text-center">Aucun cours</h1>
            @endforelse
    </div>
    
    
</div>
@endsection('adminBody')