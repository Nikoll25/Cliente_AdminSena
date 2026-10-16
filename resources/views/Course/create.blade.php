@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    <div class="card-header bg-success text-white text-center py-3 rounded-top-4">

                        <h3 class="mb-0">
                            <i class="bi bi-journal-plus"></i>
                            Registrar Curso
                        </h3>

                    </div>
                    <div class="card-body p-4">


                        <form action="{{ route('course.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">

                                <label for="number" class="form-label fw-bold">
                                    Número de ficha
                                </label>

                                <input type="text" class="form-control form-control-lg" id="number" name="number"
                                    placeholder="Ingrese el número de ficha" required>

                            </div>
                            <div class="mb-4">

                                <label for="day" class="form-label fw-bold">
                                    Día
                                </label>

                                <input type="text" class="form-control form-control-lg" id="day" name="day"
                                    placeholder="Ingrese el día de formación" required>

                            </div>
                            <div class="mb-4">

                                <label for="area_id" class="form-label fw-bold">
                                    Área
                                </label>
                                <select name="area_id" id="area_id" class="form-select form-select-lg" required>
                                    <option value="">
                                        Seleccione un área
                                    </option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['id'] }}">
                                            {{ $area['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">

                                <label for="training_center_id" class="form-label fw-bold">
                                    Centro de formación
                                </label>
                                <select name="training_center_id" id="training_center_id" class="form-select form-select-lg"
                                    required>
                                    <option value="">
                                        Seleccione un centro de formación
                                    </option>
                                    @foreach ($trainingcenters as $trainingcenter)
                                        <option value="{{ $trainingcenter['id'] }}">
                                            {{ $trainingcenter['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('course.index') }}" class="btn btn-outline-secondary">

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
