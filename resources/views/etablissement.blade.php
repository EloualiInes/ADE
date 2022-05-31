@extends('base')
@section('titre')
    Établissement
@endsection

@section('content')
    <div class="content flex center_row_column relative">
        <div class="containerRetour absolute">
            <a href="./..">	&#x2190 Changer de profil</a>
        </div>
        <div class="container_content flex center_column">
            <h1>Je sélectionne mon établissement : </h1>
            <div class="soulignement"></div>
            <form action="/liste" method="post" class="formAuthentification">
                
                <div class="div_btns flex space_around_row">
                    @csrf
                    <button type="submit" class="btn_chx flex center_column_row">
                        <small class="nomEtablissement">Bourget</small>
                    </button>
                    <button type="submit" class="btn_chx flex center_column_row">
                        <small class="nomEtablissement">Annecy</small>
                    </button>
                    <button type="submit" class="btn_chx flex center_column_row">
                        <small class="nomEtablissement">Jacob-Bellecombette</small>
                    </button>
                    
                    
                </div>
            </form>
        </div>
    </div>
@endsection