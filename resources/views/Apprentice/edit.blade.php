@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-lg border-0 rounded-4">

                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Actualizar Aprendiz
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('apprentice.update', $apprentice['id']) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    <i class="bi bi-person-fill text-success me-1"></i>
                                    Nombre del aprendiz
                                </label>

                                <input type="text" id="name" name="name" class="form-control form-control-lg"
                                    value="{{ old('name', $apprentice['name']) }}"
                                    placeholder="Ingrese el nombre del aprendiz" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-success me-1"></i>
                                    Correo electrónico
                                </label>

                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    value="{{ old('email', $apprentice['email']) }}"
                                    placeholder="Ingrese el correo electrónico" required>
                            </div>

                            <div class="mb-4">
                                <label for="cell_number" class="form-label fw-bold">
                                    <i class="bi bi-telephone-fill text-success me-1"></i>
                                    Número celular
                                </label>

                                <input type="text" id="cell_number" name="cell_number"
                                    class="form-control form-control-lg"
                                    value="{{ old('cell_number', $apprentice['cell_number']) }}"
                                    placeholder="Ingrese el número celular" required>
                            </div>

                            <div class="mb-4">
                                <label for="course_id" class="form-label fw-bold">
                                    <i class="bi bi-journal-text text-success me-1"></i>
                                    Curso
                                </label>

                                <select name="course_id" id="course_id" class="form-select form-select-lg" required>
                                    <option value="">Seleccione un curso</option>

                                    @foreach ($courses as $course)
                                        <option value="{{ $course['id'] }}"
                                            {{ $apprentice['course_id'] == $course['id'] ? 'selected' : '' }}>
                                            {{ $course['number'] }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="computer_id" class="form-label fw-bold">
                                    <i class="bi bi-pc-display text-success me-1"></i>
                                    Computador
                                </label>

                                <select name="computer_id" id="computer_id" class="form-select form-select-lg" required>
                                    <option value="">Seleccione un computador</option>

                                    @foreach ($computers as $computer)
                                        <option value="{{ $computer['id'] }}"
                                            {{ $apprentice['computer_id'] == $computer['id'] ? 'selected' : '' }}>
                                            {{ $computer['number'] }} - {{ $computer['brand'] }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('apprentice.index') }}" class="btn btn-outline-secondary">
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
