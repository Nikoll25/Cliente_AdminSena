@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Actualizar Instructor
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('teacher.update', $teacher['id']) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    <i class="bi bi-person-fill text-success me-1"></i>
                                    Nombre del Instructor
                                </label>

                                <input type="text" id="name" name="name" class="form-control form-control-lg"
                                    value="{{ old('name', $teacher['name']) }}" placeholder="Ingrese el nombre del instructor"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-success me-1"></i>
                                    Correo electrónico
                                </label>

                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    value="{{ old('email', $teacher['email']) }}" placeholder="Ingrese el correo electrónico"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="area_id" class="form-label fw-bold">
                                    <i class="bi bi-diagram-3-fill text-success me-1"></i>
                                    Área
                                </label>

                               <select name="area_id" class="form-select">
                                    @foreach ($areas as $area)
                                        <option value="{{ $area['id'] }}"
                                            {{ $teacher['area_id'] == $area['id'] ? 'selected' : '' }}>
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
                                <select name="training_center_id" class="form-select">
                                    @foreach ($trainingcenters as $trainingcenter)
                                        <option value="{{ $trainingcenter['id'] }}"
                                            {{ $teacher['training_center_id'] == $trainingcenter['id'] ? 'selected' : '' }}>
                                            {{ $trainingcenter['id'] }} - {{ $trainingcenter['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('teacher.index') }}" class="btn btn-outline-secondary">
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
