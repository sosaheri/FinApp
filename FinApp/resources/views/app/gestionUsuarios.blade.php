@extends('layouts.app')

@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Usuarios Registrados</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nombre
                  </th>
                  <th>
                    Correo
                  </th>
                  <th>
                    
                  </th>
                  <th class="text-right">
                    
                  </th>
                </thead>
                <tbody>

                  @foreach($users as $user)
                        <tr>
                          <td>
                              {{ $user->name }}
                          </td>
                          <td>
                              {{ $user->email }}
                          </td>
                          <td class="">
                              <a href="{{ route('verUsuario', $user->id)}}"> <i class="nc-icon nc-zoom-split"></i> </a>
                          </td>
                          <td class="">
                              <a href="#"> <i class="nc-icon nc-ruler-pencil"></i> </a>
                          </td>
                        </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  

@endsection
