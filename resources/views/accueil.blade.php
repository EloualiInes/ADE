@extends('base')

@section('titre')
    Accueil
@endsection

@section('content')
{{-- Div contenant le choix entre professeur et élèves --}}
<div class="content flex center_row_column">
    <div class="container_content">
        <h1>Je sélectionne mon profil : </h1>
        <form action="./etablissement" method="post" class="form_profil">
            @csrf
            <div class="div_btns flex space_around_row">
                <button type="submit" class="btn_chx flex center_column_row">
                    <img src="{{url('pictures/eleve.png')}}" alt="img eleve">
                    <br>
                    <small>Étudiant</small>
                    {{-- <input type="submit" value = "Étudiants" name = "etudiant" class="btn_students"> --}}
                </button>
                <button type="submit" class="btn_chx flex center_column_row red">
                    <img src="{{url('pictures/prof.png')}}" alt="img prof">
                    <br>
                    <small>Professeur</small>
                    {{-- <input type="submit" value = "Professeur" name = "professeur" class="btn_teacher"> --}}
                
                </button>
            </div>
            
        </form>
    </div>
</div>

    
@endsection