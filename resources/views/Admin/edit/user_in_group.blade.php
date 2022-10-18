@extends("layout.appAdmin")
@section("style")
    <link rel="stylesheet" href="{{ asset('assets/css/formateur.css') }}">
@endsection("style")
@section("adminBody")
    <div class="profil">
        <div class="contenu card">
            <div class="card-header bg-white d-flex flex-row justify-content-between align-items-center">
                <h5 class="text-capitalize"><i class="fa fa-user-cog"></i>&nbsp;Utilisateur dans le groupe {{$data->group_name}}</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($data->users as $index=>$user)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$user->matricule}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            <a href="{{ route('desactivation', ['user_id'=>$user->id,'usergroup_id'=>$data->id]) }}" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection("adminBody")