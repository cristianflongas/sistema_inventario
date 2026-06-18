@extends('layouts.sidebaradmin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm-6">
                <h1 class="m-0">Registrar usuario</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Formulario de registro</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('usuarios.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="role_id">Rol</label>
                            <select id="role_id" name="role_id" class="form-control" required>
                                <option value="">Seleccione un rol</option>
                                <option value="1" {{ old('role_id') == 1 ? 'selected' : '' }}>Administrador</option>
                                <option value="2" {{ old('role_id') == 2 ? 'selected' : '' }}>Vendedor</option>
                                <option value="3" {{ old('role_id') == 3 ? 'selected' : '' }}>Cliente</option>
                            </select>
                            <x-input-error :messages="$errors->get('role_id')" class="text-danger" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="name">Nombre</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                            <x-input-error :messages="$errors->get('name')" class="text-danger" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="email">Correo electrónico</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            <x-input-error :messages="$errors->get('email')" class="text-danger" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="telefono">Teléfono</label>
                            <input id="telefono" type="text" name="telefono" value="{{ old('telefono') }}" class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="direccion">Dirección</label>
                            <input id="direccion" type="text" name="direccion" value="{{ old('direccion') }}" class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" name="password" class="form-control" required>
                            <x-input-error :messages="$errors->get('password')" class="text-danger" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="password_confirmation">Confirmar contraseña</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Guardar usuario</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection