@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/formateur.css') }}">
@endsection('style')
@section('adminBody')
<div class=" profil">
    <div class="contenu card">
        <div class="card-header bg-white d-flex flex-row justify-content-between align-items-center">
            <h5 class="text-capitalize"><i class="fa fa-cogs"></i>&nbsp;{{$key}}</h5>
            <a href="{{ route('ajout.personnels', ['key'=>$key]) }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Ajouter</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
            <tbody>
                @forelse ($data as $item => $value )
                    <tr>
                        <th scope="row">{{$item + 1}}</th>
                        <td>{{$value->matricule}}</td>
                        <td>{{$value->nom}}</td>
                        <td>{{$value->prenom}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->contact}}</td>
                        <td>
                            <a href="{{ route('attribution', ['key'=>$key,'key2'=>$value->id]) }}" class="btn btn-info btn-sm" title="vagues"><i class="fa fa-edit"></i></a>
                            @if ($key == 'formateur')
                            <a href="{{ route('edit.formateur', ['id'=>$value->id]) }}" class="btn btn-outline-success btn-sm" title="Voir" ><i class="fa fa-pencil"></i></a>
                            @elseif ($key == "etudiant")
                            <a href="{{ route('edit.etudiants', ['id'=>$value->id]) }}" class="btn btn-outline-success btn-sm" title="Voir" ><i class="fa fa-pencil"></i></a>
                            @endif
                            <a href="{{ route('add.pers.user', ['key'=>$key,'id'=>$value->id]) }}" class="btn btn-outline-primary btn-sm" title="Ajouter comme utilisateur"><i class="fa fa-user-plus"></i></a>
                            <a href="{{ route('delete.personnel', ['key'=>$key,'id'=>$value->id]) }}" class="btn btn-outline-danger btn-sm" title="supprimer"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
        </div>
    </div>
</div>
@include("modals.users")
@endsection('adminBody')