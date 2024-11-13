@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('principal') }}">Biblioteca / Library</a>
            <!-- Navegación aquí -->
        </nav>

        <h2>{{ __('Registro de Libro / Book register') }}</h2>

        @if (session('success'))
            <!-- Modal de éxito -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="successModalLabel">{{ __('Éxito') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            <!-- ISBN -->
            <div class="form-group">
                <label for="isbn">{{ __('ISBN') }}</label>
                <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ old('isbn') }}" required>
                @error('isbn')
                    <div class="invalid-feedback">
                        {{ __('ISBN') }}: {{ __('validation.required', [], 'es') }} / {{ __('validation.required', [], 'en') }}
                    </div>
                @enderror
            </div>

            <!-- Título -->
            <div class="form-group">
                <label for="titulo">{{ __('Título / Title') }}</label>
                <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" value="{{ old('titulo') }}" required>
                @error('titulo')
                    <div class="invalid-feedback">
                        {{ __('Título') }}: {{ __('validation.required', [], 'es') }} / {{ __('validation.required', [], 'en') }}
                    </div>
                @enderror
            </div>

            <!-- Autor -->
            <div class="form-group">
                <label for="autor">{{ __('Autor / Author') }}</label>
                <input type="text" class="form-control @error('autor') is-invalid @enderror" id="autor" name="autor" value="{{ old('autor') }}" required>
                @error('autor')
                    <div class="invalid-feedback">
                        {{ __('Autor') }}: {{ __('validation.required', [], 'es') }} / {{ __('validation.required', [], 'en') }}
                    </div>
                @enderror
            </div>

            <!-- Páginas -->
            <div class="form-group">
                <label for="paginas">{{ __('Páginas / Pages') }}</label>
                <input type="number" class="form-control @error('paginas') is-invalid @enderror" id="paginas" name="paginas" value="{{ old('paginas') }}" required>
                @error('paginas')
                    <div class="invalid-feedback">
                        {{ __('Páginas') }}: {{ __('validation.required', [], 'es') }} / {{ __('validation.required', [], 'en') }}
                    </div>
                @enderror
            </div>

            <!-- Año -->
            <div class="form-group">
                <label for="año">{{ __('Año / Year') }}</label>
                <input type="number" class="form-control @error('anio') is-invalid @enderror" id="anio" name="anio" value="{{ old('anio') }}" required>
                @error('año')
                    <div class="invalid-feedback">
                        {{ __('Año') }}: {{ __('validation.required', [], 'es') }} / {{ __('validation.required', [], 'en') }}
                    </div>
                @enderror
            </div>

            <!-- Editorial -->
            <div class="form-group">
                <label for="editorial">{{ __('Editorial') }}</label>
                <input type="text" class="form-control @error('editorial') is-invalid @enderror" id="editorial" name="editorial" value="{{ old('editorial') }}" required>
                @error('editorial')
                    <div class="invalid-feedback">
                        {{ __('Editorial') }}: {{ __('validation.required', [], 'es') }} / {{ __('validation.required', [], 'en') }}
                    </div>
                @enderror
            </div>

            <!-- Email de Editorial -->
            <div class="form-group">
                <label for="email_editorial">{{ __('Email Editorial') }}</label>
                <input type="email" class="form-control @error('email_editorial') is-invalid @enderror" id="email_editorial" name="email_editorial" value="{{ old('email_editorial') }}" required>
                @error('email_editorial')
                    <div class="invalid-feedback">
                        {{ __('Email de Editorial') }}: {{ __('validation.email', [], 'es') }} / {{ __('validation.email', [], 'en') }}
                    </div>
                @enderror
            </div>
            <br>
            <button type="submit" class="btn btn-primary">{{ __('Guardar / Save') }}</button>
        </form>



    </div>

    <script>
        // Mostrar el modal de éxito si hay un mensaje de éxito
        @if (session('success'))
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        @endif
    </script>
@endsection
