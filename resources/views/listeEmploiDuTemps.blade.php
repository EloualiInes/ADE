@extends('base')

@section('titre')
     Liste des filières au {{--nom Etablissement --}}
@endsection

@section('content')
    <div class="content flex center_row_column">
        barre de recherche a que coucou
        @dump($_POST);
        {{-- @php
            dump("oof");
            // dump($req);
            dump($listeFiliere);


            
            if(isset($listeFiliere)){
                dump("entre");
                for($i = 0; $i < count($listeFiliere); $i++){
                    echo $listeFiliere[$i];
                }
            }
        @endphp --}}
        
    </div>
@endsection