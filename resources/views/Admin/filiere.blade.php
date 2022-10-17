@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/commun.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil">
    <nav class="navbar navbar-expand-sm navbar-light d-flex flex-row">
        <a href="" class="navbar-brand text-capitalize"><i class="fa fa-cogs"></i>&nbsp;{{$key}}</a>
        <form class="form-inline ml-auto " method="POST" action="{{ route('save.configuration') }}">
            @csrf
            <input type="hidden" name="key" value="{{$key}}">
          <input type="text" placeholder="entrer nouveau {{$key}}" name="designation">
          <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
        </form>
      </nav> 
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="justify-content-center">
                    <th scope="col" class="text-start " style="width: 30%;">#</th>
                    <th scope="col" class="text-start " style="width: 30%;">Designation</th>
                    <th scope="col" class="text-start " style="width: 40%;">Action</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($data as $index=>$data)
                <tr class="justify-content-center">
                    <th scope="row" class="">{{$index + 1}}</th>
                    <td>
                        @if ($key != "vagues")
                        {{$data->designation}}
                        @else
                        {{$data->designation_vague}}
                        @endif
                    </td>
                    <td class="">
                        
                        @if ($key != "vagues")
                        <a href="{{ route('attribution', ['key'=>$key,"key2"=>$data->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i><span>&nbsp;Attribution</span></a>
                        @else
                        <a href="{{ route('attribution', ['key'=>$key,"key2"=>$data->designation_vague]) }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i><span>&nbsp;Attribution</span></a>
                        @endif
                        <a href="{{ route('delete.configuration', ['key'=>$key,'id'=>$data->id]) }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i><span>&nbsp;Supprimer</span></a>
                        <a href="{{ route('edit.configuration', ['key'=>$key,'id'=>$data->id]) }}" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i><span>&nbsp;Edit</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection('adminBody')