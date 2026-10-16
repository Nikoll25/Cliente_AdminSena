@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- ENCABEZADO -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4 pb-2 border-bottom">

            <div>
                <h1 class="fw-bold h2 text-dark m-0">Lista de Aprendices</h1>
                <p class="text-muted small m-0">
                    Administración y consulta de los aprendices registrados
                </p>
            </div>

            <a href="/apprentice/create"
                class="btn btn-success rounded-pill px-4 py-2 shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                <i class="bi bi-plus-circle fs-5"></i>
                <span class="fw-bold">Agregar Aprendiz</span>
            </a>
        </div>

        <!-- TABLA DE APRENDICES -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="table-responsive">

                <table id="idApprentices" class="table table-hover align-middle mb-0">

                    <thead class="bg-success text-white">
                        <tr>
                            <th class="ps-4 py-3">Id</th>
                            <th class="py-3">Nombre</th>
                            <th class="py-3">Correo</th>
                            <th class="py-3 text-nowrap">Número de teléfono</th>
                            <th class="py-3">Curso</th>
                            <th class="py-3">Computador</th>
                            <th class="py-3 text-center pe-4 text-nowrap">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($apprentices as $apprentice)
                            <tr>

                                <!-- ID -->
                                <td class="ps-4 fw-bold text-secondary">
                                    #{{ $apprentice['id'] }}
                                </td>

                                <!-- NOMBRE -->
                                <td class="fw-bold text-dark">
                                    <i class="bi bi-person text-secondary me-2"></i>
                                    {{ $apprentice['name'] }}
                                </td>

                                <!-- CORREO -->
                                <td class="text-dark">
                                    <i class="bi bi-envelope text-secondary me-2"></i>
                                    {{ $apprentice['email'] }}
                                </td>

                                <!-- TELÉFONO -->
                                <td class="text-dark text-nowrap">
                                    <i class="bi bi-telephone text-secondary me-2"></i>
                                    {{ $apprentice['cell_number'] }}
                                </td>

                                <!-- CURSO -->
                                <td class="text-dark">
                                    {{ $apprentice['course_id'] }}
                                </td>

                                <!-- COMPUTADOR -->
                                <td class="text-dark">
                                    {{ $apprentice['computer_id'] }}
                                </td>

                                <!-- ACCIONES -->
                                <td class="text-center pe-4 text-nowrap">
                                    <div class="d-inline-flex align-items-center justify-content-center gap-2">

                                        <!-- VER -->
                                        <a href="{{ route('apprentice.show', $apprentice['id']) }}"
                                            class="btn btn-sm btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                            style="width: 34px; height: 34px;"
                                            title="Ver aprendiz">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <!-- EDITAR -->
                                        <a href="{{ route('apprentice.edit', $apprentice['id']) }}"
                                            class="btn btn-sm btn-outline-info rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                            style="width: 34px; height: 34px;"
                                            title="Editar aprendiz">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <!-- ELIMINAR -->
                                        <form action="{{ route('apprentice.destroy', $apprentice['id']) }}"
                                            method="POST"
                                            class="d-inline m-0 p-0"
                                            onsubmit="return confirm('¿Estás segura de que deseas eliminar este aprendiz?');">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm"
                                                style="width: 34px; height: 34px;"
                                                title="Eliminar aprendiz">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="bi bi-people text-secondary fs-1"></i>

                                    <h5 class="fw-bold text-dark mt-3">
                                        No hay aprendices registrados
                                    </h5>

                                    <p class="text-muted mb-3">
                                        Todavía no hay aprendices disponibles para mostrar.
                                    </p>

                                    <a href="/apprentice/create" class="btn btn-success rounded-pill px-4">
                                        <i class="bi bi-plus-circle me-2"></i>
                                        Agregar Aprendiz
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
