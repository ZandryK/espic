@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/formateur.css') }}">
@endsection('style')
@section('adminBody')
<div class=" profil">
    <div class="contenu card">
        <div class="card-header d-flex flex-row justify-content-between align-items-center">
            <h5 class="text-capitalize"><i class="fa fa-cogs"></i>&nbsp;</h5>
            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Ajouter</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <th scope="row">001</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>JohnDoe@gmail.com</td>
                    <td>01114433</td>
                    <td>
                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                        <a href="" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection('adminBody')