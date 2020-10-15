@extends('layouts.app')
@section('content')
<body>
<div class="container">

  <div class="nav">
    <div class="nav_logo">
      <img src="img/esquilax_logo_small.svg">
    </div>
    <div class="nav_items">
    <ul>
      <li><img class="nav-item" alt="Guardias" title="Guardias" src="./img/phone-line.svg"></li>
      <li><img class="nav-item" alt="Integraciones" title="Integraciones" src="./img/cloud-line.svg"></li>
      <li><img class="nav-item" alt="Remediaciones" title="Remediaciones" src="./img/medicine-bottle-line.svg"></li>
      <li><img class="nav-item" alt="Ajustes" title="Ajustes" src="./img/settings-3-line.svg"></li>
      <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><img class="nav-vertical-link-icon" alt="Salir de Esquilax" title="Salir de Esquilax" src="./img/logout-box-line.svg"></a></li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </div>

  </div>
  <div class="content">


  </div>

</div>
</body>
@endsection
