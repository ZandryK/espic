@extends("layout.appAdmin")
@section("style")
    <link rel="stylesheet" href="{{ asset('assets/css/attribution.css') }}">
@endsection("'style")

@section("adminBody")
    <div class="profil">
        <h3 style="font-size:12px ;"><i class="fa fa-cog"></i>&nbsp;
            @isset($key)
                @switch($key)
                    @case("filiere")
                        {{"Merci de choisir les les niveau d'etude pour cette filiere"}}
                        @break
                    @case("niveau d'etude")
                        {{"Merci de choisir le(s) filiere(s) pour cette niveau d'etude"}}
                        @break
                    @case("formateur")
                        {{"Merci de choisir les cours pour ce formateur"}}
                        @break
                    @case("etudiant")
                        {{"Merci de choisir le(les) vague(s) pour cette etudiant"}}
                        @break
                    @case("cours")
                        {{"Merci de choisir les vagues qui peut acceder à ce cours"}}
                        @break
                    @case('vague')
                        {{"Merci de choisir les filière et niveau d'etude pour cette vague"}}
                        @break
                    @case('users')
                        {{"Merci de choisir les groupe pour cette utilisateur"}}
                        @break
                    @default
                        @break
                @endswitch
            @endisset
        </h3>
        <div class="card">
            <form action="{{ route('attribution.store') }}" method="POST">
                @csrf
                <div class="input">
                    @if ($key == "vague")
                        @foreach ($data as $data)
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="hidden" name="key2" value="{{$key2}}">
                            <input type="hidden" name="key" value="{{$key}}">
                            <input type="checkbox" class="custom-control-input" id="{{$data->id}}" {{DB::table('vague_filiere_niveau_etudes')->where('filiere_niveau_etude_id',$data->id)->where('vague_id',$key2)->exists()? "name=check  checked readonly":"name=checkbox[] value=$data->id"}} >
                            <label class="custom-control-label" for="{{$data->id}}">{{$data->filiere->designation}}|{{$data->niveau_etude->designation}}</label>
                        </div>
                        @endforeach
                    @elseif ($key == "cours")
                        @foreach ($data as $item => $value)
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="{{$key2}}">
                                <input type="hidden" name="key" value="{{$key}}">
                                <input type="checkbox" class="custom-control-input" id="{{$value->id}}" {{DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$value->id)->where('cour_id',$key2)->exists() ? "name=check checked readonly":"name=checkbox[] value=$value->id"}}>
                                <label class="custom-control-label" for="{{$value->id}}">{{$value->vague->designation}}|{{$value->filiere_niveau_etude->niveau_etude->designation}}|{{$value->filiere_niveau_etude->filiere->designation}}</label>
                            </div>
                        @endforeach
                    @elseif ($key == 'formateur')
                            @foreach ($data as $data )
                                @foreach ($data->cours as $cours)
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="hidden" name="key2" value="{{$key2}}">
                                    <input type="hidden" name="key" value="{{$key}}">
                                    <input type="checkbox" class="custom-control-input" id="{{$ids = DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id}}" {{DB::table('cour_formateurs')->where('cvgnv_id',DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id)->where('formateur_id',$key2)->exists() ? "name=check checked readonly":"name=checkbox[] value= $ids"}}>
                                    <label class="custom-control-label" for="{{DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id}}">{{$cours->designation}} | {{$data->vague->designation}} | {{$data->filiere_niveau_etude->filiere->designation}} | {{$data->filiere_niveau_etude->niveau_etude->designation}}</label>
                                </div>
                                @endforeach
                            @endforeach
                    @elseif ($key == 'etudiant')
                                @foreach ( $data as $data)
                                    @foreach ($data->vagues as $vague )
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="hidden" name="key2" value="{{$key2}}">
                                            <input type="hidden" name="key" value="{{$key}}">
                                            <input type="checkbox" class="custom-control-input" id="{{$ids = DB::table('vague_filiere_niveau_etudes')->where('vague_id', $vague->id)->where('filiere_niveau_etude_id',$data->id)->first()->id}}" {{DB::table('etudiant_vagues')->where('vgflnv_id',DB::table('vague_filiere_niveau_etudes')->where('vague_id', $vague->id)->first()->id)->where('etudiant_id',$key2)->exists() ? "name=ckeck checked readonly":"name=checkbox[] value=$ids"}}>
                                            <label class="custom-control-label" for="{{$ids}}">{{$vague->designation}} | {{$data->filiere->designation}} | {{$data->niveau_etude->designation}}</label>
                                        </div>
                                    @endforeach
                                @endforeach
                    @elseif($key == 'filiere')
                        @foreach ($data as $data)
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="{{$key2}}">
                                <input type="hidden" name="key" value="{{$key}}">
                                <input type="checkbox" class="custom-control-input" id="{{$data->id}}" {{DB::table("filiere_niveau_etudes")->where('filiere_id',$key2)->where('niveau_etude_id',$data->id)->exists() ? "name=check checked readonly":"name=checkbox[] value=$data->id"}}>
                                <label class="custom-control-label" for="{{$data->id}}">{{$data->designation}}</label>
                            </div>
                        @endforeach
                    @elseif($key == "niveau d'etude")
                        @foreach ($data as $data)
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="{{$key2}}">
                                <input type="hidden" name="key" value="{{$key}}">
                                <input type="checkbox" class="custom-control-input" id="{{$data->id}}" {{DB::table("filiere_niveau_etudes")->where('filiere_id',$data->id)->where('niveau_etude_id',$key2)->exists() ? "name=check checked readonly":"name=checkbox[] value=$data->id"}}>
                                <label class="custom-control-label" for="{{$data->id}}">{{$data->designation}}</label>
                            </div>
                        @endforeach
                    @elseif ($key == 'users')
                            @foreach ($data as $data )
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="{{$key2}}">
                                <input type="hidden" name="key" value="{{$key}}">
                                <input type="checkbox" class="custom-control-input" id="{{$data->id}}" {{DB::table("user__usergroup")->where('user_id',$key2)->where('usergroup_id',$data->id)->exists() ? "name=check checked readonly":"name=checkbox[] value=$data->id"}}>
                                <label class="custom-control-label" for="{{$data->id}}">{{$data->group_name}}</label>
                            </div>
                            @endforeach
                    @endif

                </div>
                <div class="button">
                    <button class="btn btn-sm btn-danger"><i class="fa fa-backward"></i>&nbsp;Annuler</button>
                    <button class="btn btn-sm btn-info" type="submit"><i class="fa fa-database"></i>&nbsp;valider</button>

                </div>
            </form>
        </div>
    </div>
@endsection("adminBody")
