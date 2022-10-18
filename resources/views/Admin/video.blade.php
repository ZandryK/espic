@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/commun.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil">
    <nav class="navbar navbar-expand-sm navbar-light d-flex flex-row">
        <a href="" class="navbar-brand text-capitalize"><i class="fa fa-cogs"></i>&nbsp;Video</a>
      </nav> 
    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr class="justify-content-center">
                    <th scope="col" class="text-start w-25">#</th>
                    <th scope="col" class="text-start w-25">Titre</th>
                    <th scope="col" class="text-start w-25">Auteur</th>
                    <th scope="col" class="text-start w-25">Action</th>
                    
                </tr>
            </thead>
        <tbody>
            @foreach ($data as $index=>$data)
                <tr class="justify-content-center">
                    <th scope="row" class="">{{$index + 1}}</th>
                    <td>
                        {{$data->title}}
                    </td>
                    <td>
                        {{$data->auteur}}
                    </td>
                    <td>
                        <a href="{{ route('delete.video', ['id'=>$data->id]) }}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection('adminBody')