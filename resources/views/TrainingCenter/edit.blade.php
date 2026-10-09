@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Actualizar Centro de formación
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('trainingcenter.update', $trainingcenter['id']) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    <i class="bi bi-tag-fill text-success me-1"></i>
                                    Nombre del centro de formación
                                </label>

                                <input type="text" id="name" name="name" class="form-control form-control-lg"
                                    value="{{ old('name', $trainingcenter['name']) }}"
                                    placeholder="Ingrese el nombre del centro de formación" required>
                            </div>
                            <div class="mb-4">
                                <label for="location" class="form-label fw-bold">
                                    <i class="bi bi-pc-display-horizontal text-success me-1"></i>
                                    Ubicación
                                </label>

                                <input type="text" id="location" name="location" class="form-control form-control-lg"
                                    value="{{ old('location', $trainingcenter['location']) }}"
                                    placeholder="Ingrese la ubicación del centro" required>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('trainingcenter.index') }}" class="btn btn-outline-secondary">
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
