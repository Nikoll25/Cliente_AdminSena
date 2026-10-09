@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="bi bi-person-badge"></i>
                            Registrar Profesor
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('Teacher.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    Nombre del Profesor
                                </label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    placeholder="Ingrese el nombre del profesor" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">
                                    Email
                                </label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Ingrese el correo electrónico" required>
                            </div>

                            <div class="mb-4">
                                <label for="area_id" class="form-label fw-bold">
                                    Área
                                </label>

                                <select class="form-select form-select-lg" name="area_id" id="area_id" required>

                                    <option value="">
                                        Seleccione un área
                                    </option>

                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">
                                            {{ $area->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="training_center_id" class="form-label fw-bold">
                                    Centro de formación
                                </label>

                                <select class="form-select form-select-lg" name="training_center_id" id="training_center_id"
                                    required>

                                    <option value="">
                                        Seleccione un centro de formación
                                    </option>

                                    @foreach ($trainingCenters as $trainingCenter)
                                        <option value="{{ $trainingCenter->id }}">
                                            {{ $trainingCenter->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('teacher.index') }}" class="btn btn-outline-secondary">
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
