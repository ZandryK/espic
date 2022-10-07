@extends('layout.appAdmin')
@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
@endsection('style')

@section('adminBody')
<div class="content-menu">
    <div class="center">
        <div class="card">
            <a href="{{ route('fne_liste',['key'=>"filiere"])}}">
                <figure>
                    <span><i class="fa fa-bookmark"></i></span>
                    <figcaption>
                        <h3>Filières</h3>
                        <p>Gerer vos filière, ajouter, supprimer, modifier</p>
                        <a href="{{ route('fne_liste',['key'=>"filiere"])}}">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-graduation-cap"></i></span>
                    <figcaption>
                        <h3>Niveau d'etude</h3>
                        <p>Gerer vos niveaux d'etudes, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
             <figure>
                 <span><i class="fa fa-user-plus"></i></span>
                 <figcaption>
                     <h3>Vagues</h3>
                     <p>Gerer vos vagues, ajouter, supprimer, modifier</p>
                     <a href="">voir plus</a>
                 </figcaption>
             </figure>
            </a>
         </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-book"></i></span>
                    <figcaption>
                        <h3>Cours</h3>
                        <p>Gerer vos cours, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div href="" class="card">
            <a href="{{ route('liste',['key'=>"formateur"]) }}">
                <figure>
                    <span><i class="fa fa-users"></i></span>
                    <figcaption>
                        <h3>Formateurs</h3>
                        <p>Gerer vos formateurs, ajouter, supprimer, modifier</p>
                        <a href="{{ route('liste',['key'=>"formateur"])}}">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-user"></i></span>
                    <figcaption>
                        <h3>Etudiants</h3>
                        <p>Gerer vos etudiants, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-video-camera"></i></span>
                    <figcaption>
                        <h3>Videos</h3>
                        <p>Gerer vos videos, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-users"></i></span>
                    <figcaption>
                        <h3>Utilisateurs</h3>
                        <p>Gerer vos utilisateurs, ajouter, supprimer, modifier</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="card">
            <a href="">
                <figure>
                    <span><i class="fa fa-users"></i></span>
                    <figcaption>
                        <h3>Groupes d'utilisateurs</h3>
                        <p>Gerer vos groupes d'utilisateurs</p>
                        <a href="">voir plus</a>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>
@endsection('adminBody')
@section("script")
    <script src="{{ asset('assets/js/admin/redirection.js') }}"></script>
@endsection("script")