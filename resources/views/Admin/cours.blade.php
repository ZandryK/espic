@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/cours.css') }}">
@endsection('style')

@section('adminBody')
<div class="profil h-100 w-100">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end mb-3">
            <a href="" class="btn btn-primary" title="Nouveau cours" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></a>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Cours</th>
                            <th scope="col">duree</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cours as $cours )
                        <tr>
                            <td>{{$cours->nom}}</td>
                            <td>{{$cours->duree}}</td>
                            <td>
                                <a href="{{ route('delCours',$cours->nom) }}" class="btn btn-danger" id="deleteCours" data-toggle="tooltip" title="Supprimer"><i class="fa fa-trash"></i></a>
                                <a href="" class="btn btn-success" data-toggle="tooltip" title="voir"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content card">
            <!-- Modal Header -->
            <div class="entete card-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="text-center" style="color:white";>Nouveau cours</h4>
            </div>

            <!-- Modal body -->
            <div class="card-body">
                <form method="post" action="{{ route('addCours') }}">
                    @csrf
                    <div class="form-group">
                        <label for="cours">Nom du cours:</label>
                        <input type="text" class="form-control validate" required id="cours" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="duree">duree:</label>
                        <input type="text" class="form-control validate" required id="duree" name="duree">
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>

                </form>

            </div>
  </div>
</div>
</div>

@endsection('adminBody')
@section('script')
<script src="{{ asset('assets/js/cours.js') }}"></script>
@endsection('script')
