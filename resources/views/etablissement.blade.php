@extends('base')
@section('titre')
    Connexion
@endsection

@section('content')
    <div class="content flex center_row_column relative">
        <div class="containerRetour absolute">
            <a href="./..">	&#x2190 Changer de profil</a>
        </div>
        <div class="container_content">
            <h1>Je sélectionne mon établissement : </h1>
            <form action="./liste" method="post" class="formAuthentification">
                
                <div class="div_chx_category flex space_around_row">
                    @csrf
                    <button type="submit" class="btn_chx flex center_column_row">
                        <img src="{{url('pictures/eleve.png')}}" alt="img eleve">
                        <br>
                        <small>Bourget</small>
                    </button>
                    <button type="submit" class="btn_chx flex center_column_row">
                        <img src="{{url('pictures/prof.png')}}" alt="img prof">
                        <br>
                        <small>Annecy</small>
                    </button>
                    <button type="submit" class="btn_chx flex center_column_row">
                        <img src="{{url('pictures/eleve.png')}}" alt="img eleve">
                        <br>
                        <small>Jacob</small>
                    </button>
                    
                    
                </div>
            </form>
        </div>
    </div>
@endsection