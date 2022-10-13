@extends("layout.appAdmin")
@section("style")
    <link rel="stylesheet" href="{{ asset('assets/css/attribution.css') }}">
@endsection("'style")

@section("adminBody")
    <div class="profil">
        <h3 style="font-size:12px ;"><i class="fa fa-cog"></i>&nbsp;Merci de choisir les champs pour attribuer cette {{$key}} </h3>
        <div class="card">
            <form action="{{ route('attribution.store') }}" method="POST">
                @csrf
                <div class="input">
                    @if ($key == "vague")
                        @foreach ($data as $data)
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="hidden" name="key2" value="{{$key2}}">
                            <input type="hidden" name="key" value="{{$key}}">
                            <input type="checkbox" class="custom-control-input" id="{{$data->id}}" name="checkbox[]" value="{{$data->id}}">
                            <label class="custom-control-label" for="{{$data->id}}">{{$data->filiere->designation}}|{{$data->niveau_etude->designation}}</label>
                        </div>
                        @endforeach
                    @elseif ($key == "cours")
                        @foreach ($data as $item => $value)
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="{{$key2}}">
                                <input type="hidden" name="key" value="{{$key}}">
                                <input type="checkbox" class="custom-control-input" id="{{$value->id}}" name="checkbox[]" value="{{$value->id}}">
                                <label class="custom-control-label" for="{{$value->id}}">{{$value->vague->designation}}|{{$value->filiere_niveau_etude->niveau_etude->designation}}|{{$value->filiere_niveau_etude->filiere->designation}}</label>
                            </div>
                        @endforeach
                    @elseif ($key == 'formateur')
                            @foreach ($data as $data )
                                @foreach ($data->cours as $cours)
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="hidden" name="key2" value="{{$key2}}">
                                    <input type="hidden" name="key" value="{{$key}}">
                                    <input type="checkbox" class="custom-control-input" id="{{DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id}}" name="checkbox[]" value="{{DB::table('cours_vg_niveau_etudes')->where('vg_niveau_etude_id',$data->id)->where('cour_id',$cours->id)->first()->id}}">
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
                                            <input type="checkbox" class="custom-control-input" id="{{DB::table('vague_filiere_niveau_etudes')->where('vague_id', $vague->id)->first()->id}}" name="checkbox[]" value="{{DB::table('vague_filiere_niveau_etudes')->where('vague_id', $vague->id)->first()->id}}">
                                            <label class="custom-control-label" for="{{DB::table('vague_filiere_niveau_etudes')->where('vague_id', $vague->id)->first()->id}}">{{$vague->designation}} | {{$data->filiere->designation}} | {{$data->niveau_etude->designation}}</label>
                                        </div>
                                    @endforeach
                                @endforeach
                    @else
                        @foreach ($data as $data)
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="key2" value="{{$key2}}">
                                <input type="hidden" name="key" value="{{$key}}">
                                
                                <input type="checkbox" class="custom-control-input" id="{{$data->id}}" name="checkbox[]" value="{{$data->id}}">
                                <label class="custom-control-label" for="{{$data->id}}">{{$data->designation}}</label>
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
