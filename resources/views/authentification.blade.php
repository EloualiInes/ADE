@extends('base')
@section('titre')
    Connexion
@endsection

@section('content')
    <div class="content flex center_column_row relative">
        <div class="containerRetour absolute">
            <a href="./..">	&#x2190 Changer de profil</a>
        </div>
        <div class="div_connexion flex center_column_row">
            <h1>Connexion</h1>
            <form action="../" method="post" class="formAuthentification flex center_column_row">
                @csrf
                <table>
                    <tr>
                        <td><label for="email"> E-mail</label></td>
                        <td><input type="email" name="email" id="input_email" required></td>
                    </tr>
                    <tr>
                        <td><label for="password"> Mot de passe</label></td>
                        <td> <input type="password" name="password" id="input_password" required></td>
                    </tr>
                    
                </table>
                <br>
                <input type="submit" value="Connexion" id="btn_validation">
            </form>
        </div>
    </div>
@endsection