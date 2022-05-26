{{-- Navbar contenant le logo + le nom de l'étudiant ou le professeur + le btn deco
A noter : 
Sans selection de profil + authentification : le nom de l'uti et le btn deco ne sont pas affiché
--}}
<nav class="navbar flex space_between_row">
    <img src="{{url('/pictures/usmb_logo.png')}}" alt="logo usmb">
    <div class="div_menu flex space_around_row">
        <p>Ouisticoco goutCaca</p>
        <img src="{{url('/pictures/deconnexion.png')}}" alt="img deconnexion">
    </div>
</nav>