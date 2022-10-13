@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection('style')
@section('adminBody')
<h3 class="heding"><i class="fa fa-book"></i>&nbsp;JAVA</h3>
    <div class="container">
        <div class="main-video">
            <div class="video active">
                <video src="" controls muted poster="{{ asset('assets/images/Banners/fond-1.jpg') }}"></video>
                <h3 class="title">Videos avec ajax</h3>
            </div>
        </div>
        <div class="video-list">
            @foreach ($videos as $video)
                <div class="vid">
                    <video src="{{ asset('upload').'/'.$video->link }}" muted></video>
                    <h3 class="title">playliste 1</h3>
                </div>
           @endforeach
        </div>
    </div>
@endsection('adminBody')
@section('script')
<script src="{{ asset('assets/js/admin/main.js') }}"></script>
@endsection('script')