@extends('layouts.app')
@section('content')
<body>
<nav>
  <img class="nav-logo" src="img/esquilax_logo_small.svg">
  <div class="nav-isotype">DennisApp</div>

      <div class="nav-user">

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Ir al panel ></a>
            @else
                <a href="{{ route('login') }}"><img title="Ingresar al Sistema" src="./img/login-box-line.svg"></a>
            @endauth

        @endif
    </div>


</div>
  </ul>
</nav>
<div class="showcase">

  <h1>
    Esquilax es
    <span
    class="txt-rotate"
    data-period="2000"
    data-rotate='[ "monitoreo", "auditoría", "KPIs", "configuración", "todo" ]'></span>
    <br>
    de Genesys PIC.

  </h1>
  <h3>
    Una herramienta de GdA Contact Center para la Plataforma Integral de Contactos.
  </h3>
</div>
<div class="calltoaction">
  Estas viendo la versión 0.1 de Esquilax <button> ver novedades</button>
</div>
</body>
@endsection
