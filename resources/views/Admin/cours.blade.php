@extends('layout.appAdmin')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/cours.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil h-100">
    <div class="contenu card h-100 d-flex flex-column">
            <div class="card-header bg-white d-flex flex-row justify-content-between align-items-center">
                <h5 class="text-capitalize"><i class="fa fa-user-cog"></i>&nbsp;Cours</h5>
                <button class="btn btn-sm btn-primary" data-target="#myModal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Ajouter</button>
            </div>
            <div class="table-responsive" style="height: inherit">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col" style="width:10%">#</th>
                            <th scope="col" style="width:25%">designation</th>
                            <th scope="col" style="width:25%">durée</th>
                            <th scope="col" style="width:30%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $index=>$item)
                        <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$item->designation}}</td>
                            <td>{{$item->duree}}</td>
                            <td>
                                <a href="{{route('attribution',['key'=>'cours','key2'=>$item->id])}}" class="btn btn-info btn-sm"><i class="fa fa-edit">&nbsp;Attribution</i></a>
                                <a href="{{ route('delete.cours', ['id'=>$item->id]) }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;<span>supprimer</span></a>
                                <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i>&nbsp;<span>edit</span></a>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
    </div>
</div>
@include("modals.cours")
@endsection('adminBody')
@section('script')
    <script src="{{ asset('assets/js/cours.js') }}"></script>
@endsection('script')