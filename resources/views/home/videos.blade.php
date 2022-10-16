@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection('style')
@section('adminBody')
<h3 class="heding"><i class="fa fa-book"></i>&nbsp;{{DB::table('cours')->where('id',$cour_id)->first()->designation}}</h3>
    <div class="contents">
        <div class="main-video">
            <div class="video active">
                <video src="{{ asset('upload').'/'.DB::table('videos')->where('id',$video_id)->first()->link}}" controls muted></video>
                <h3 class="title">{{DB::table('videos')->where('id',$video_id)->first()->title}}</h3>
                <p class="description">{{DB::table('videos')->where('id',$video_id)->first()->description}}</p>
            </div>
        </div>
        <div class="video-list">
            @foreach ($videos as $video)
                <div class="vid">
                    <video src="{{ asset('upload').'/'.$video->link }}" muted></video>
                    <h3 class="title"> {{$video->title}} </h3>
                    <p class="description" hidden>{{$video->description}}</p>
                </div>
           @endforeach
        </div>
    </div>
@endsection('adminBody')
@section('script')
<script src="{{ asset('assets/js/admin/main.js') }}"></script>
@endsection('script')