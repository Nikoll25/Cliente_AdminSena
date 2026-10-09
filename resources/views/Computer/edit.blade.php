@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Actualizar Computador
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('computer.update', $computer['id']) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="number" class="form-label fw-bold">
                                    <i class="bi bi-hash text-success me-1"></i>
                                    Número del Computador
                                </label>

                                <input type="text" id="number" name="number" class="form-control form-control-lg"
                                    value="{{ old('number', $computer['number']) }}"
                                    placeholder="Ingrese el número del computador" required>
                            </div>

                            <div class="mb-4">
                                <label for="brand" class="form-label fw-bold">
                                    <i class="bi bi-pc-display-horizontal text-success me-1"></i>
                                    Marca
                                </label>

                                <input type="text" id="brand" name="brand" class="form-control form-control-lg"
                                    value="{{ old('brand', $computer['brand']) }}"
                                    placeholder="Ingrese la marca del computador" required>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('computer.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left me-1"></i>
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success px-4">
                                    <i class="bi bi-check-circle-fill me-1"></i>
                                    Actualizar
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
