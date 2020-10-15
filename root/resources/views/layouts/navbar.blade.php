<div class="nav">
    <div class="nav_logo">
      <img src="img/esquilax_logo_small.svg">
    </div>
    <div class="nav_items">
    <ul>
      <a href="{{ route('guardias') }}"><li title="Guardias"><img class="nav-item" alt="Guardias" title="Guardias" src="./img/phone-line.svg"></li></a>
      <a href="{{ route('integraciones') }}"><li title="Integraciones"><img class="nav-item" alt="Integraciones" title="Integraciones" src="./img/cloud-line.svg"></li></a>
      <a href="{{ route('remediaciones') }}"><li title="Remediaciones"><img class="nav-item" alt="Remediaciones" title="Remediaciones" src="./img/medicine-bottle-line.svg"></li></a>
      <a href="{{ route('configuracion') }}"><li title="Configuracion"><img class="nav-item" alt="Configuracion" title="Configuracion" src="./img/settings-3-line.svg"></li></a>
      <li title="Salir de Esquilax" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><a  href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><img class="nav-vertical-link-icon" alt="Salir de Esquilax" title="Salir de Esquilax" src="./img/logout-box-line.svg"></a></li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </div>

  </div>
