@extends("layout.appAdmin")
@section("style")
    <link rel="stylesheet" href="{{ asset('assets/css/formateur.css') }}">
@endsection("style")
@section("adminBody")
    <div class="profil">
        <div class="contenu card">
            <div class="card-header bg-white d-flex flex-row justify-content-between align-items-center">
                <h5 class="text-capitalize"><i class="fa fa-user-cog"></i>&nbsp;Utilisateus</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom du group</th>
                            <th scope="col">Nombre d'utilisateur</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($usrgrp as $index=>$user)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$user->group_name}}</td>
                        <td>{{$user->users->count()}}</td>
                        <td>
                            <a href="{{ route('edit.usr_grp', ['id'=>$user->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection("adminBody")