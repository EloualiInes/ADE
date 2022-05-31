@extends('base')

@section('titre')
    Accueil
@endsection

@section('content')
{{-- Div contenant le choix entre professeur et élèves --}}
<div class="content flex center_column_row">
    <div class="container_content flex center_column">
        {{-- Barre de recherche --}}
        <form action="/liste" method="post" class="formSearch">
            <div class="divSearch flex space_around_row">
                @csrf
                <input type="search" name="searchEmploi" id="searchEmploi" placeholder="Search your schedule...">
            </div>
        </form>
        {{-- Recherche de l'emploi du temps avec le profil --}}
        <h1>Je sélectionne mon profil : </h1>
        <div class="soulignement"></div>
        <form action="./traitement" method="post" class="form_profil">
            @csrf
            <div class="div_btns flex space_around_row">
                <button type="submit" class="btn_chx flex center_column_row " name="student">
                    <div class="img imgStudent"></div>
                    <br>
                    <small>Étudiant</small>
                </button>
                <button type="submit" class="btn_chx flex center_column_row red" name="teacher">
                    <div class="img imgProf"></div>
                    <br>
                    <small>Professeur</small>
                </button>
            </div>
            
        </form>
    </div>
</div>

    
@endsection