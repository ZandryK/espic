@extends("layout.appAdmin")
@section("style")
    <link rel="stylesheet" href="{{ asset('assets/css/attribution.css') }}">
@endsection("'style")

@section("adminBody")
    <div class="profil">
        <h3><i class="fa fa-cog"></i>&nbsp;Attribuer filiere avec les niveaux d' etude existants</h3>
        <div class="card">
            <form action="" method="POST">
                @csrf
                {{-- <div class="input">
                    @if ($key == "vagues")
                        @foreach ($data as $data)
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="hidden" name="filiere_designation" value="{{$key2}}">
                            <input type="hidden" name="key" value="{{$key}}">
                            <input type="checkbox" class="custom-control-input" id="{{$data->id}}" name="checkbox[]" value="{{$data->id}}">
                            <label class="custom-control-label" for="{{$data->id}}">{{$data->filieres_designation}}|{{$data->niveau_etudes_designation}}</label>
                        </div>
                        @endforeach
                    @else
                        @foreach ($data as $data)
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="hidden" name="filiere_designation" value="{{$key2}}">
                                <input type="hidden" name="key" value="{{$key}}">
                                <input type="checkbox" class="custom-control-input" id="{{$data->designation}}" name="checkbox[]" value="{{$data->designation}}">
                                <label class="custom-control-label" for="{{$data->designation}}">{{$data->designation}}</label>
                            </div>
                        @endforeach
                    @endif --}}
                    
                </div>
                <div class="button">
                    <button class="btn btn-sm btn-danger"><i class="fa fa-backward"></i>&nbsp;Annuler</button>
                    <button class="btn btn-sm btn-info" type="submit"><i class="fa fa-database"></i>&nbsp;valider</button>

                </div>
            </form>
        </div>
    </div>
@endsection("adminBody")