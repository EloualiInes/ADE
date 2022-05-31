<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function index(){
        return view('accueil');
    }

    public function etablissement(){
        return view('etablissement');
    }

   

    public function liste(){
        if(request()->isMethod("POST")){
            if(isset($_POST["searchEmploi"])){
                $listeFiliere = Classe::where("filiere",$_POST["searchEmploi"])->get();
                if(isset($listeFiliere)){
                    return view('listeEmploiDuTemps');
                    // view('listeEmploiDuTemps', [
                    //     "listeFiliere" => $listeFiliere
                    // ]);
               }
            }
            return view('listeEmploiDuTemps');
        }
        return view('listeEmploiDuTemps');
    }

   
    
    public function chxPages(){
        
        if(request()->isMethod("POST")){
            if(isset($_POST["student"])){
                return redirect("./etablissement");
                // return Redirect::route("etablissement")->withInput();
            }
            else if(isset($_POST["teacher"])){
                return redirect("./liste");
            }
        }
        else{
            return "olala où es-tu petit malin ? :o";
        }
    }
}
