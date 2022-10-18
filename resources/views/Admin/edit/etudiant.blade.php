@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/edit_pers.css') }}">
@endsection('style')
@section('adminBody')
<div class="tabContent px-5 h-100">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#information">Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#vague">Classification</a>
        </li>
      </ul>

       <!-- Tab panes -->
  <div class="tab-content border h-100">
    <div class="tab-pane active container" id="information">
        <div class="container">
            <div class="card d-flex justify-content-center align-items-center" style="border: none;">
            <article class="card-body w-50" >
                <h4 class="card-title mt-3 text-center">Informations</h4>
                <p class="text-center">Modifier les informations </p>
                <form method="POST" action="{{ route('update.etudiant') }}">
                  @csrf
                  <input type="hidden" name="id" value="{{$etudiant->id}}">
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="matricule" value="{{$etudiant->matricule}}" class="form-control" placeholder="Matricule" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-user"></i></span>
                     </div>
                    <input name="nom" value="{{$etudiant->nom}}" class="form-control" placeholder="Nom" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="prenom" value="{{$etudiant->prenom}}" class="form-control" placeholder="Prenom" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                    <input name="email" value="{{$etudiant->email}}" class="form-control" placeholder="Email" type="email">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                     </div>
                    <input name="contact" value="{{$etudiant->contact}}" class="form-control" placeholder="Telephone" type="text">
                </div>                                                       
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-database"></i>&nbsp;Modifier</button>
                </div>
            </form>
            </article>
            </div>
            
            </div> 
    </div>
    <div class="tab-pane container p-0 h-100" id="vague">
        <div class="table-responsive p-0">
                <table class="table " style="border: none !important; width:100%;" sortable>
                    <thead style="border: none !important;">
                      <tr style="border-top: none !important;">
                        <th scope="col">#</th>
                        <th scope="col">Filiere</th>
                        <th scope="col">Niveau d'etude</th>
                        <th scope="col">vague</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($etudiant->vague_filiere_niveau_etudes as $niveau_etude )
                        <th scope="row">#</th>
                        <td>{{$niveau_etude->filiere_niveau_etude->filiere->designation}}</td>
                        <td>{{$niveau_etude->filiere_niveau_etude->niveau_etude->designation}}</td>
                        <td>{{$niveau_etude->vague->designation}}</td>
                        <td>
                            <a href="{{ route('delete.etudiant.vague', ['etudiant_id'=>$etudiant->id,'vgflnv_id'=>$niveau_etude->id]) }}" class="btn btn-outline-danger btn-sm" title="supprimer"><i class="fa fa-trash"></i></a>
                        </td>
                        @endforeach
                      </tr>
                    </tbody>
                  </table>
          </div> 
    </div>
  </div>
</div>

  
 
@endsection('adminBody')  
