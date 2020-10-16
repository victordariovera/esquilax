@extends('layouts.default')
@section('content')
    <div class="section-title">
    <h1>Panel de Control</h1>
    <p>Bienvenido, {{{ explode(' ',trim(Auth::user()->name ))[0]}}} 👋</p>
    </div>
    <div class="dashboard">

        <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Novedades</div>
            <div class="dashboard-item-more"><a href="{{ route('novedades') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magni doloremque dolore autem? Natus vitae qui, pariatur libero officiis quasi laborum dolorem in exercitationem ipsum aliquid ab quam? Libero, facere?
            </p>
          </div>
      </div>

      <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>
            <div class="dashboard-item-more"><a href="{{ route('guardias') }}">ver todo</a> </div>
        </div>
          <div class="dashboard-item-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magni doloremque dolore autem? Natus vitae qui, pariatur libero officiis quasi laborum dolorem in exercitationem ipsum aliquid ab quam? Libero, facere?
            </p>
          </div>
      </div>


    </div>

@endsection
