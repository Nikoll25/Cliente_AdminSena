@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="bi bi-person-plus me-2"></i>
                            Registrar Aprendiz
                        </h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('apprentice.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    <i class="bi bi-person-fill text-success me-1"></i>
                                    Nombre del aprendiz
                                </label>

                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    placeholder="Ingrese el nombre del aprendiz" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">
                                    <i class="bi bi-envelope-fill text-success me-1"></i>
                                    Correo electrónico
                                </label>

                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Ingrese el correo electrónico" required>
                            </div>

                            <div class="mb-4">
                                <label for="cell_number" class="form-label fw-bold">
                                    <i class="bi bi-telephone-fill text-success me-1"></i>
                                    Número de teléfono
                                </label>

                                <input type="text" class="form-control form-control-lg" id="cell_number"
                                    name="cell_number" placeholder="Ingrese el número de teléfono" required>
                            </div>

                            <div class="mb-4">
                                <label for="course_id" class="form-label fw-bold">
                                    <i class="bi bi-journal-text text-success me-1"></i>
                                    Curso
                                </label>

                                <select class="form-select form-select-lg" id="course_id" name="course_id" required>

                                    <option value="">
                                        Seleccione un curso
                                    </option>

                                    @foreach ($courses as $course)
                                        <option value="{{ $course['id'] }}">
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

                                <select class="form-select form-select-lg" id="computer_id" name="computer_id" required>

                                    <option value="">
                                        Seleccione un computador
                                    </option>

                                    @foreach ($computers as $computer)
                                        <option value="{{ $computer['id'] }}">
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
