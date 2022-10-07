@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/commun.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil">
    <nav class="navbar navbar-expand-sm bg-light navbar-light d-flex flex-row">
        <a href="" class="navbar-brand text-capitalize"><i class="fa fa-cogs"></i>&nbsp;</a>
        <form class="form-inline ml-auto " method="POST" action="">
            @csrf
            {{-- <input type="hidden" name="key" value="{{$key}}">
          <input type="text" placeholder="entrer nouveau {{$key}}" name="designation"> --}}
          <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
        </form>
      </nav> 
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="justify-content-center">
                    <th scope="col" class="text-start w-25">#</th>
                    <th scope="col" class="text-start w-25">Designation</th>
                    <th scope="col" class="text-start w-50">Action</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($data as $data)
                <tr class="justify-content-center">
                    <th scope="row" class=""></th>
                    <td>
                        {{-- @if ($key != "vagues")
                        {{$data->designation}}
                        @else
                        {{$data->designation_vague}}
                        @endif --}}
                    </td>
                    <td class="">
                        
                        {{-- @if ($key != "vagues")
                        <a href="{{ route('attribution', ['key'=>$key,"key2"=>$data->designation]) }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i><span>&nbsp;Attribution</span></a>
                        @else
                        <a href="{{ route('attribution', ['key'=>$key,"key2"=>$data->designation_vague]) }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i><span>&nbsp;Attribution</span></a>
                        @endif --}}
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i><span>&nbsp;Supprimer</span></a>
                        <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-edit"></i><span>&nbsp;Edit</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection('adminBody')