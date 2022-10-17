@extends('layout.appAdmin')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/commun.css') }}">
@endsection("style")
@section('adminBody')
<div class="profil">
    <nav class="navbar navbar-expand-sm bg-white navbar-light d-flex flex-row">
        <a href="" class="navbar-brand text-capitalize"><i class="fa fa-cogs"></i>&nbsp;</a>
        <form class="form-inline ml-auto " method="POST" action="{{ route('update.config', ['key'=>$key]) }}">
            @csrf
            <input type="hidden" name="key" value="{{$key}}">
            <input type="hidden" name="id" value="{{$id}}">
          <input type="text" placeholder="entrer nouveau " value="{{$table->designation}}" name="designation">
          <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
        </form>
      </nav> 
    <div class="table-responsive">
        <table class="table ">
            <thead>
                <tr class="justify-content-center">
                    <th scope="col" class="text-start" style="width: calc(100%/3);">#</th>
                    <th scope="col" class="text-start" style="width: calc(100%/3);">Attribution</th>
                    <th scope="col" class="text-start" style="width: calc(100%/3);">Action</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($attribution as $index=> $attribution)
                <tr class="justify-content-center">
                    <th scope="row" class="">{{$index + 1}}</th>
                    <td>
                    {{$attribution->niveau_etude->designation}}
                    </td>
                    <td class="">
                        <a href="{{ route('delete.attr', ['key'=>$key,'id'=>$attribution->id]) }}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection("adminBody")