@extends('layouts.default')
@section('content')
<div class="section-title">
    <h1>Guardias</h1>
    <p>Configuración de atención telefónica 7x24</p>
    </div>

    <div class="dashboard">

    <div class="dashboard-item">
        <div class="dashboard-item-header">
            <div class="dashboard-item-title">Guardias</div>

        </div>
          <div class="dashboard-item-content">
              <div class="dashboard-item-currentvalue-info">En este momento esta de guardia..</div>
              <div class="dashboard-item-currentvalue">Cosme Fulanito</div>

        
          </div>
      </div>

<div class="dashboard-item">
<div class="dashboard-item-header">
    <div class="dashboard-item-title">Cambio de Guardia</div>
</div>
  <div class="dashboard-item-content">
      <div class="dashboard-item-currentvalue-info">Cambiá la atención telefónica de Guardia a otra persona</div>

      <br>

   
      <p>
         Elegí de la lista un nuevo analist@ para asignar la guardia:
     </p>
   <br>
   <br>


    <p>
        <form>
          <select class="class="dashboard-item-form-list" id="cars" name="cars">
             <option value="volvo">Cosme Fulanito</option>
             <option value="saab">Pepe Argento</option>
             <option value="fiat">Juan Carlos Batman</option>
          </select> 
          <input class="btn_std" type="submit" value="Asignar Guardia">

        </form>
    </p>


  </div>
</div>


</div>
    
@endsection

