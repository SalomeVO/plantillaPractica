@extends('layouts.plantillaGraficos')

@section('content')

  <div class="card mt-5">
      <div class="p-3 mb-2 bg-info text-white">
          <form>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Nombre</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Escriba su nombre">
                         <br>
                      <label for="inputEmail4">Correo Electronico</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="ejemplo.@edu.gt">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellido</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Escriba su apellido">
                         <br>
                      <label for="inputEmail4">Numero celular</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="0000-0000">
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputAddress">Nombre de la Instucion</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Universidad Mariano Galvez">
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">Edad</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="19">
                      <br>
                      <label for="inputEmail4">Grado Academico</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="univeritario/a">
                  </div>
                  <div class="form-group col-md-6">
                      <div class="form-check">
                          <label for="inputEmail4">Genero</label>
                          <br>
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                              Mujer
                          </label>
                          <br>
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                              Hombre
                          </label>
                          <br>
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                              No binario
                          </label>
                          <br>
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                              Otro
                          </label>
                      </div>
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputCity">Direccion</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Ejemplo: 22 calle ente 6 y 7 avenida">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputState">Municipio</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Ejemplo: Puerto Barrios">
                  </div>
                  <div class="form-group col-md-2">
                      <label for="inputZip">Departamento</label>
                      <input type="text" class="form-control" id="inputZip" placeholder="Izabal">
                  </div>
              </div>
              <div class="form-group">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                          La informacion proporcionada es veredicta
                      </label>
                  </div>
              </div>
              <button type="submit" class="btn btn-primary">Enviar formulario</button>
          </form>
      </div>
@endsection
