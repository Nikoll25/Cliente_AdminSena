@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Actualizar Curso
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('course.update', $course['id']) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="number" class="form-label fw-bold">
                                    <i class="bi bi-hash text-success me-1"></i>
                                    Número del Curso
                                </label>

                                <input type="text" id="number" name="number" class="form-control form-control-lg"
                                    value="{{ old('number', $course['number']) }}" placeholder="Ingrese el número del curso"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="day" class="form-label fw-bold">
                                    <i class="bi bi-calendar-week text-success me-1"></i>
                                    Día
                                </label>
                                <input type="text" name="day" id="day" class="form-control form-control-lg"
                                    value="{{ old('day', $course['day']) }}" placeholder="Ejemplo: Lunes" required>
                            </div>

                            <div class="mb-4">
                                <label for="area_id" class="form-label fw-bold">
                                    <i class="bi bi-diagram-3-fill text-success me-1"></i>
                                    Área
                                </label>
                                <select name="area_id" id="area_id" class="form-select form-select-lg">
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['id'] }}"
                                            {{ old('area_id', $course['area_id']) == $area['id'] ? 'selected' : '' }}>
                                            {{ $area['id'] }} - {{ $area['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="training_center_id" class="form-label fw-bold">
                                    <i class="bi bi-building text-success me-1"></i>
                                    Centro de Formación
                                </label>

                                <select name="training_center_id" id="training_center_id"
                                    class="form-select form-select-lg">
                                    @foreach ($trainingcenters as $trainingcenter)
                                        <option value="{{ $trainingcenter['id'] }}"
                                            {{ old('training_center_id', $course['training_center_id']) == $trainingcenter['id'] ? 'selected' : '' }}>
                                            {{ $trainingcenter['id'] }} - {{ $trainingcenter['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('course.index') }}" class="btn btn-outline-secondary">
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
