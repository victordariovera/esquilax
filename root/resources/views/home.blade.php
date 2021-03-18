@extends('layouts.default')
@section('content')
    <div class="section-title">
    <h1>Panel de Control</h1>
    <p>Bienvenido, {{{ explode(' ',trim(Auth::user()->name ))[0]}}} 👋</p>
    </div>
    <div class="dashboard">

        <div class="dashboard-showcase">
        <div class="dashboard-item-header">
            <div class="dashboard-showcase-title">Novedades</div>
            <div class="dashboard-item-more"><a href="{{ route('novedades') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
            <p>Estas usando la versión 0.1 Alpha de Esquilax</p>
            <ul>
                <li>Primera versión de Esquilax 👾 (Alpha)</li>
                <li>Se implementa la funcionalidad de Guardias</li>
            <ul>
          </div>
      </div>

      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">En este momento esta de guardia..</div>
              <div class="dashboard-item-currentvalue">Cosme Fulanito</div>

      
          </div>
      </div>


      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">En este momento esta de guardia..</div>
              <div class="dashboard-item-currentvalue">Cosme Fulanito</div>

      
          </div>
      </div>

      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">En este momento esta de guardia..</div>
              <div class="dashboard-item-currentvalue">Cosme Fulanito</div>

      
          </div>
      </div>

      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">En este momento esta de guardia..</div>
              <div class="dashboard-item-currentvalue">Cosme Fulanito</div>

      
          </div>
      </div>

      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">En este momento esta de guardia..</div>
              <div class="dashboard-item-currentvalue">Cosme Fulanito</div>

      
          </div>
      </div>

      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">En este momento esta de guardia..</div>
              <div class="dashboard-item-currentvalue">Cosme Fulanito</div>

      
          </div>
      </div>

      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Monitoreo Super Inteligente</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">Destruir Telecom ></a> </div>
        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">Estado de Inteligencia Artificial</div>
              <div class="dashboard-item-currentvalue">Skynet Activado</div>

      
          </div>
      </div>


    </div>

@endsection
