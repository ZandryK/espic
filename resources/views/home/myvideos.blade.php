@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/myvideos.css') }}">
@endsection('style')

@section('adminBody')
<h1>
   {{DB::table('cours')->where('id',$cour_id)->first()->designation}}
</h1>
<div class="contenu">
    <div class="myvideos-content">
        @foreach ($videos as $video)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{ route('similaire', ['cour_id'=>$cour_id,'vague_id'=>$vague_id,'video_id'=>$video->id]) }}">
                    <video src="{{ asset('upload').'/'.$video->link }}" class="card-img-top" muted></video>
                    <div class="card-body">
                        <h3 class="text-center">{{$video->title}}</h3>
                        <p>{{$video->description}}</p>
                    </div>
                    </a>
                </div>
            </div>
        @endforeach 
    </div>
    
</div>
@endsection('adminBody')