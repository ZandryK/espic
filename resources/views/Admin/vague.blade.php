@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/commun.css') }}">
@endsection('style')
@section('adminBody')
<div class="profil">
    <nav class="navbar navbar-expand-sm bg-light navbar-light d-flex flex-row">
        <a href="" class="navbar-brand">Ajouter</a>
        <form class="form-inline ml-auto " action="/action_page.php">
          <input type="text" placeholder="Vague">
          <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i></button>
        </form>
      </nav> 
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Designation vague</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>
                    <a href="" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                    <a href="" class="btn btn-outline-success"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection('adminBody')