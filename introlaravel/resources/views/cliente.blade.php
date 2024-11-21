

@extends('layouts.plantilla')
@section('titulo', 'Clientes')
@section('contenido')

@if (@session('exito'))
<script>
    Swal.fire({
        title: "Accion Realizada Correctamente",
        text: "{{session('exito') }}",
        icon: "success",
        confirmButtonText: "Aceptar"
    });

</script>


@endif

{{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">
    @foreach ($consultaclientes as $cliente)
        <div class="card text-justify font-monospace mt-4">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">
                    {{ $cliente->correo }}
                </h5>
                <h5 class="fw-medium">
                    {{ $cliente->telefono }}
                </h5>
                <p class="card-text fw-lighter"></p>
            </div>
            <div class="card-footer text-muted">
                {{-- <button type="submit" class="btn btn-warning btn-sm">{{ __('Actualizar') }}</button> --}}
        <a href="{{ route('rutaForm2',$cliente->id) }}" class="btn btn-primary"> {{ __('Actualizar')  }}</a>


        <form action="{{ route('rutaDelete', $cliente->id) }}" method="POST" class="d-inline" onsubmit="confirmarEliminacion()">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
        </form>

        {{-- <a href="{{ route('rutaDelete',$cliente->id) }}" class="btn btn-primary"> {{ __('Eliminar')  }}</a> --}}
                {{-- <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button> --}}
            </div>
        </div>
    @endforeach
</div>
<script>
    function confirmarEliminacion() {
        return confirm('¿Está seguro de que desea ELIMINAR los datos del cliente?');
    }
</script>

{{-- Finaliza tarjetaCliente --}}

@endsection
