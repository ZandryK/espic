@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/edit_pers.css') }}">
@endsection('style')
@section('adminBody')
<div class="tabContent px-5">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#information">Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#vague">Vague</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#cours">Cours</a>
        </li>
      </ul>

       <!-- Tab panes -->
  <div class="tab-content border">
    <div class="tab-pane active container" id="information">
        <div class="container">
            <div class="card d-flex justify-content-center align-items-center" style="border: none;">
            <article class="card-body w-50" >
                <h4 class="card-title mt-3 text-center">Informations</h4>
                <p class="text-center">Modifier les informations </p>
                <form method="POST" action="{{ route('update.formateur') }}">
                  @csrf
                  <input type="hidden" name="id" value="{{$formateur->id}}">
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-user-plus"></i> </span>
                     </div>
                    <input name="matricule" value="{{$formateur->matricule}}" class="form-control" placeholder="Matricule" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-user"></i></span>
                     </div>
                    <input name="nom" value="{{$formateur->nom}}" class="form-control" placeholder="Nom" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="prenom" value="{{$formateur->prenom}}" class="form-control" placeholder="Prenom" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                    <input name="email" value="{{$formateur->email}}" class="form-control" placeholder="Email" type="email">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend" style="width: 38px !important;">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                     </div>
                    <input name="contact" value="{{$formateur->contact}}" class="form-control" placeholder="Telephone" type="text">
                </div>                                                       
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-database"></i>&nbsp;Modifier</button>
                </div>
            </form>
            </article>
            </div>
            
            </div> 
    </div>
    <div class="tab-pane container" id="vague">
        <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vague</th>
                        <th scope="col">Filiere & Niveau d'etude</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($formateur->vague_filiere_niveau_etudes as $index=>$vague )
                      <tr>
                        <th scope="row">{{$index + 1 }}</th>
                        <td>{{$vague->vague->designation}}</td>
                        <td>{{ $vague->filiere_niveau_etude->filiere->designation }}&nbsp;|&nbsp;{{$vague->filiere_niveau_etude->niveau_etude->designation}}</td>
                        <td>
                            <a href="{{ route('delete.formateur.vague',['formateur_id'=>$formateur->id,'vgflnv_id'=>$vague->id]) }}" class="btn btn-outline-danger btn-sm" title="supprimer"><i class="fa fa-trash"></i>&nbsp;Supprimer</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
          </div> 
    </div>
    <div class="tab-pane container" id="cours">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Cours</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($formateur->cours_vg_niveau_etudes as $cours )
                 <tr>
                  <th scope="row">{{$cours->cour->designation}}</th>
                  <td>
                      <a href="{{ route('delete.formateur.cours', ['formateur_id'=>$formateur->id,'cvgnv_id'=>$cours->id]) }}" class="btn btn-outline-danger btn-sm" title="supprimer"><i class="fa fa-trash"></i>&nbsp;Supprimer</a>
                  </td>
                </tr>
                 @endforeach
                </tbody>
              </table>
      </div> 
    </div>
  </div>
</div>

  
 
@endsection('adminBody')  
