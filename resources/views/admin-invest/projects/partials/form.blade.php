<section class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 border shadow pt-4">
      <div class="panel panel default">
        <div class="panel-body">

          <form>
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Grupo de Investigación</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Seleccionar...</option>
                  <option value="1"></option>
                  <option value="2"></option>
                  <option value="3"></option>
                  <option value="3"></option>
                </select>
              </div>
            </div>
          </form>

          <div class="form-group">
            {{ Form::label('name', 'Codigo') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
          </div>

          <div class="form-group">
            {{ Form::label('name', 'Nombre del Proyecto (*)') }}
            {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
          </div>

          <form>
            <div class="form-row align-items-center">
              <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Estado</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                  <option selected>Seleccionar...</option>
                  <option value="1">Postulado</option>
                  <option value="2">En Ejecucion</option>
                  <option value="3">Finalizado</option>
                  <option value="4">Cancelado</option>
                </select>
              </div>
            </div>
          </form>

          <div class="form-group">
            <label for="researchers">Investigador(es) asociado(s)</label>
            <select id="researchers" name="researchers[]" class="selectpicker" multiple data-live-search="true"
              title="Seleccione investigador(es) asociado(s)">
              @foreach ($researchers as $researcher)
              <option value="{{ $researcher->id }}"> {{ $researcher->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            {{ Form::label('date', 'Fecha de Creacion') }}
            <input type="date" name="date" disabled value="<?php echo date("Y-m-d");?>">
          </div>

          <div class="form-group">
            {{ Form::label('date', 'Fecha de Termino') }}
            <input type="date" name="date" value="<?php echo date("Y-m-d");?>">
          </div>

          <div class="form-row align-items-center">
            <div class="col-auto my-1">
              <button type="Guardar" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>