<?php

namespace App\Http\Controllers;

use App\Models\CourFormateur;
use App\Models\CoursVgNiveauEtude;
use App\Models\Formateur;
use App\Models\VagueFiliereNiveauEtude;
use App\Models\VagueFormateur;
use App\Models\Video;
use App\Models\VideoAcces;
use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function formateur_redirection($id)
    {
        $cours = VagueFiliereNiveauEtude::find($id)->cours()->get();
        return view("home.cours_formateur",compact("cours","id"));
    }

    public function view_video()
    {
        $cours = CourFormateur::where('formateur_id',Formateur::where('matricule',auth()->user()->matricule)->first()->id)->get();
        return view("home.video",compact('cours'));
    }

    public function store_video(Request $request)
    {
        $request->validate([
            'link'=>'required|mimes:mp4,MP4,mkv,avi,webm,flv'
        ]);

        $file = $request->file('link');
        $file->move('upload',$file->getClientOriginalName());
        $file_name = $file->getClientOriginalName();
        
        $media = new Video();
        $media->title = $request->title;
        $media->description = $request ->description;
        $media->link = $file_name;
        $media->auteur = auth()->user()->matricule;
        $media->save();
        
        $video = Video::where('link',$file_name)->first()->id;
        foreach ($request->checkbox as $key => $value) {
            $attribution = new VideoAcces();
            $attribution->video_id = $video;
            $attribution->cour_vgnve_id = $request->checkbox[$key];
            $attribution->save();
        }
        return redirect()->back();
    }


    public function etudiant_playlist($cour_id, $vague_id)
    {
        $videos =CoursVgNiveauEtude::where("cour_id",$cour_id)->where("vg_niveau_etude_id",$vague_id)->first()->videos()->get();
        return view('home.videos',compact('videos'));
    }
}
