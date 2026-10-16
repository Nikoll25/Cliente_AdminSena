@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- ENCABEZADO -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4 pb-2 border-bottom">

            <div>
                <h1 class="fw-bold h2 text-dark m-0">Lista de Instructores</h1>
                <p class="text-muted small m-0">
                    Administración y consulta de los instructores registrados
                </p>
            </div>

            <a href="/teacher/create"
                class="btn btn-success rounded-pill px-4 py-2 shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                <i class="bi bi-plus-circle fs-5"></i>
                <span class="fw-bold">Agregar Instructor</span>
            </a>
        </div>

        <!-- TABLA DE INSTRUCTORES -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="table-responsive">

                <table id="idTeacher" class="table table-hover align-middle mb-0">

                    <thead class="bg-success text-white">
                        <tr>
                            <th class="ps-4 py-3">Id</th>
                            <th class="py-3">Nombre</th>
                            <th class="py-3">Correo</th>
                            <th class="py-3">Área</th>
                            <th class="py-3">Centro de formación</th>
                            <th class="py-3 text-center pe-4 text-nowrap">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($teachers as $teacher)
                            <tr>

                                <!-- ID -->
                                <td class="ps-4 fw-bold text-secondary">
                                    #{{ $teacher['id'] }}
                                </td>

                                <!-- NOMBRE -->
                                <td class="fw-bold text-dark">
                                    <i class="bi bi-person-badge text-secondary me-2"></i>
                                    {{ $teacher['name'] }}
                                </td>

                                <!-- CORREO -->
                                <td class="text-dark">
                                    <i class="bi bi-envelope text-secondary me-2"></i>
                                    {{ $teacher['email'] }}
                                </td>

                                <!-- ÁREA -->
                                <td class="text-dark">
                                    {{ $teacher['area_id'] }}
                                </td>

                                <!-- CENTRO DE FORMACIÓN -->
                                <td class="text-dark">
                                    {{ $teacher['training_center_id'] }}
                                </td>

                                <!-- ACCIONES -->
                                <td class="text-center pe-4 text-nowrap">
                                    <div class="d-inline-flex align-items-center justify-content-center gap-2">

                                        <!-- VER -->
                                        <a href="{{ route('teacher.show', $teacher['id']) }}"
                                            class="btn btn-sm btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                            style="width: 34px; height: 34px;"
                                            title="Ver instructor">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <!-- EDITAR -->
                                        <a href="{{ route('teacher.edit', $teacher['id']) }}"
                                            class="btn btn-sm btn-outline-info rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                            style="width: 34px; height: 34px;"
                                            title="Editar instructor">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <!-- ELIMINAR -->
                                        <form action="{{ route('teacher.destroy', $teacher['id']) }}"
                                            method="POST"
                                            class="d-inline m-0 p-0"
                                            onsubmit="return confirm('¿Estás segura de que deseas eliminar este instructor?');">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                                style="width: 34px; height: 34px;"
                                                title="Eliminar instructor">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <i class="bi bi-people text-secondary fs-1"></i>

                                    <h5 class="fw-bold text-dark mt-3">
                                        No hay instructores registrados
                                    </h5>

                                    <p class="text-muted mb-3">
                                        Todavía no hay instructores disponibles para mostrar.
                                    </p>

                                    <a href="/teacher/create" class="btn btn-success rounded-pill px-4">
                                        <i class="bi bi-plus-circle me-2"></i>
                                        Agregar Instructor
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

    </div>
@endsection
