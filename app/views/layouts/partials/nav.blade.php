<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ Auth::check() ? route('statuses_path') : route('home') }}">Mayordomo de cultivo</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!--<ul class="nav navbar-nav">
            @if($currentUser)
            <li class="dropdown">
            <li class="active">{{ link_to_route('seguimientos_path', 'Seguimientos') }}</li>
            <li class="active">{{ link_to_route('tiposcultivo_path', 'Tipos de Cultivo') }}</li>
            <li class="active">{{ link_to_route('tiposcultivoCreate_path', 'Crear Tipo de Cultivo') }}</li>
            </li>
            @endif
        </ul>-->

        <ul class="nav navbar-nav">
            @if($currentUser)

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Tipos de cultivo <span class="caret">
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>{{ link_to_route('seguimientos_path', 'Seguimientos') }}</li>
                    <li>{{ link_to_route('tiposcultivo_path', 'Tipos de Cultivo') }}</li>
                    <li>{{ link_to_route('tiposcultivoCreate_path', 'Crear Tipo de Cultivo') }}</li>
                </ul>
            </li>
            @endif
        </ul>


        <ul class="nav navbar-nav navbar-right">
        @if($currentUser)
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="nav-gravatar" src="{{ $currentUser->present()->gravatar() }}" alt="{{ $currentUser->username }}">
                    {{ $currentUser->username }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>{{ link_to_route('profile_path', 'Your Profile', $currentUser->username) }}</li>
                    <li><a href="#">Action</a></li>
                  <li class="divider"></li>
                  <li>{{ link_to_route('logout_path','Log Out') }}</li>
                </ul>
            </li>
        @else
         <li>{{ link_to_route('register_path', 'Registrate') }}</li>
         <li>{{ link_to_route('login_path', 'Ingresá') }}</li>
        @endif
      </ul>
    </div>
  </div>
</nav>