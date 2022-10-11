@extends('layout.appAdmin')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/cours.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil">
    <div class="contenu card">
            <div class="card-header d-flex flex-row justify-content-between align-items-center">
                <h5 class="text-capitalize"><i class="fa fa-user-cog"></i>&nbsp;Utilisateus</h5>
                <button class="btn btn-sm btn-primary" data-target="#myModal" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Ajouter</button>
            </div>
            <div class="card-body table-responsive w-100 h-100">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">designation</th>
                            <th scope="col">durée</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $index=>$item)
                        <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$item->designation}}</td>
                            <td>{{$item->duree}}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                                <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
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