@extends('adminlte::page')

@section('title', 'Home')


@section('content')
    <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Nuevo usuario</h3>
                <!-- imprimir los errores -->
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('users.store')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre completo">
                  </div>
                 <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Ingrese el apellido">
                  </div>
                  <div class="form-group">
                    <label>Documento</label>
                    <input type="number" class="form-control" name="documento" placeholder="Ingrese el documento de indentidad">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo electronico</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Ingrese una contraseña de mínimo 8 caracteres">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Repetir contraseña</label>
                    <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="Reingrese la contraseña">
                  </div>
                  <!-- select -->
                  <div class="form-group">
                    <label>Rol</label>
                    <select class="form-control">
                          <option value="1">Alumno</option>
                          <option value="2">Moderador</option>
                          <option value="3">Administrador</option>
                    </select>
                 </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Crear</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop