@extends('layouts.app')

@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">Leo User</h5>
                  </a>
                  
                </div>
                
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                   
                    
                    <div class="col-lg-12 mr-auto">
                      <h5>24,6$
                        <br>
                        <small>Monto Financiado</small>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Editar Perfil</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">

                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" placeholder="Usuario" value="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" value="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" placeholder="Dirección" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control" placeholder="Ciudad" value="">
                      </div>
                    </div>
                    
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Código Postal</label>
                        <input type="number" class="form-control" placeholder="Código Postal">
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">
                      <div class="col-md-6 pr-1">
                        <div class="form-group">
                          <label>Clave Actual</label>
                          <input type="password" class="form-control"  value="">
                        </div>
                      </div>
                      <div class="col-md-6 pl-1">
                        <div class="form-group">
                          <label>Nueva Clave</label>
                          <input type="password" class="form-control" value="">
                        </div>
                      </div>
                    </div>
 
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Actualizar datos</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  

@endsection
