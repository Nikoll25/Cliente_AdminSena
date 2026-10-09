@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="bi bi-building-add"></i>
                            Registrar Centro de Formación
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('trainingcenter.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    Nombre del Centro
                                </label>

                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    placeholder="Ingrese el nombre del centro" required>
                            </div>

                            <div class="mb-4">
                                <label for="location" class="form-label fw-bold">
                                    Ubicación
                                </label>

                                <input type="text" class="form-control form-control-lg" id="location" name="location"
                                    placeholder="Ingrese la ubicación del centro" required>
                            </div>

                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('trainingcenter.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left"></i>
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success px-4">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Guardar
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
