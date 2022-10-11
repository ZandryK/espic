@extends("layout.appAdmin")
@section("style")
    <link rel="stylesheet" href="{{ asset('assets/css/formateur.css') }}">
@endsection("style")
@section("adminBody")
    <div class="profil">
        <div class="contenu card">
            <div class="card-header d-flex flex-row justify-content-between align-items-center">
                <h5 class="text-capitalize"><i class="fa fa-user-cog"></i>&nbsp;Utilisateus</h5>
                <a href="{{ route('register_view') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Ajouter</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nom_du_group</th>
                            <th scope="col">Nombre d'utilisater</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($usrgrp as $index=>$user)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$user->group_name}}</td>
                        <td>{{$user->user->count()}}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                            <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection("adminBody")