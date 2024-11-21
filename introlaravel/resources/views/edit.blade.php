
@extends('layouts.plantilla')
@section('titulo', 'Formulario')
@section('contenido')

    <div class="container mt-5 col-md-6">

        @if (@session('exito'))
        <script>
            Swal.fire({
                title: "Actualización Exitosa",
                text: "{{session('exito') }}",
                icon: "success",
                confirmButtonText: "Aceptar"
            });

        </script>


        @endif
        {{-- @if (session('exito'))


            <x-Alert tipo="success"> {{session('exito')}} </x-Alert>
        @endif --}}

        @session('exito')
        <x-Alert tipo="warning"> {{ $value }} </x-Alert>

        @endsession

        @session('exito')

        <script>
            Swal.fire({
        title: "Respuesta servidor",
        text: "{{$value}}",
        icon: "success"
        });
        </script>

        @endsession


        {{-- @if (session('exito'))


        <x-Alert tipo="success"> {{session('exito')}} </x-Alert>
    @endif --}}
        <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                {{ __('Actualizar Datos del Cliente') }}
            </div>
            <div class="card-body text-justify">
                <form action="{{ route('rutaUpdate', $cliente->id) }}" method="POST" onsubmit="confirmarActualizacion()">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('Nombre:') }}</label>
                        <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtnombre')}}</small>

                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{ __('Apellido:') }}</label>
                        <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtapellido')}}</small>

                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">{{ __('Correo:') }}</label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtcorreo')}}</small>

                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{ __('Teléfono:') }}</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono')}}</small>

                    </div>

                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 mt-2 mb-1">
                            <button type="submit" class="btn btn-success btn-sm">{{ __('Actualizar Datos') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        function confirmarActualizacion() {
            return confirm('¿Está seguro de que desea actualizar los datos del cliente?');
        }
    </script>
@endsection
