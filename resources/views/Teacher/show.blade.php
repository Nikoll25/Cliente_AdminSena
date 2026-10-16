@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- ENCABEZADO -->
        <div class="mb-3 pb-3 border-bottom">
            <h1 class="fw-bold h4 text-dark mb-1">
                Información del instructor
            </h1>
            <p class="text-muted small mb-0">
                Consulta los detalles del instructor registrado en el sistema.
            </p>
        </div>

        <!-- TARJETA PRINCIPAL -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            <!-- CABECERA -->
            <div class="card-header bg-success text-white p-3 border-0">
                <div class="d-flex align-items-center gap-3">

                    <div class="bg-white bg-opacity-25 rounded-3 p-2">
                        <i class="bi bi-person-badge fs-4"></i>
                    </div>

                    <div>
                        <h5 class="fw-bold mb-1">
                            {{ $teacher['name'] }}
                        </h5>

                        <p class="small mb-0">
                            <i class="bi bi-envelope me-1"></i>
                            {{ $teacher['email'] }}
                        </p>
                    </div>

                </div>
            </div>

            <!-- CONTENIDO -->
            <div class="card-body p-3">

                <h6 class="fw-bold text-dark mb-3">
                    <i class="bi bi-card-list text-success me-2"></i>
                    Datos del instructor
                </h6>

                <div class="row g-3">

                    <!-- ID -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 border-0 rounded-3 bg-light">
                            <div class="card-body p-3 d-flex align-items-center gap-3">

                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                                    <i class="bi bi-hash fs-5"></i>
                                </div>

                                <div>
                                    <p class="text-muted small mb-1">
                                        Identificador
                                    </p>
                                    <h6 class="fw-bold text-dark mb-0">
                                        #{{ $teacher['id'] }}
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- NOMBRE -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 border-0 rounded-3 bg-light">
                            <div class="card-body p-3 d-flex align-items-center gap-3">

                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                                    <i class="bi bi-person fs-5"></i>
                                </div>

                                <div>
                                    <p class="text-muted small mb-1">
                                        Nombre completo
                                    </p>
                                    <h6 class="fw-semibold text-dark mb-0">
                                        {{ $teacher['name'] }}
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- CORREO -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 border-0 rounded-3 bg-light">
                            <div class="card-body p-3 d-flex align-items-center gap-3">

                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                                    <i class="bi bi-envelope fs-5"></i>
                                </div>

                                <div>
                                    <p class="text-muted small mb-1">
                                        Correo electrónico
                                    </p>
                                    <h6 class="fw-semibold text-dark mb-0 text-break">
                                        {{ $teacher['email'] }}
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- ÁREA -->
                    <div class="col-12 col-md-6">
                        <div class="card h-100 border-0 rounded-3 bg-light">
                            <div class="card-body p-3 d-flex align-items-center gap-3">

                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                                    <i class="bi bi-diagram-3 fs-5"></i>
                                </div>

                                <div>
                                    <p class="text-muted small mb-1">
                                        Área
                                    </p>
                                    <h6 class="fw-semibold text-dark mb-0">
                                        {{ $teacher['area_id'] }}
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- CENTRO DE FORMACIÓN -->
                    <div class="col-12 col-md-6">
                        <div class="card h-100 border-0 rounded-3 bg-light">
                            <div class="card-body p-3 d-flex align-items-center gap-3">

                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                                    <i class="bi bi-building fs-5"></i>
                                </div>

                                <div>
                                    <p class="text-muted small mb-1">
                                        Centro de formación
                                    </p>
                                    <h6 class="fw-semibold text-dark mb-0">
                                        {{ $teacher['training_center_id'] }}
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- BOTÓN VOLVER -->
                <div class="d-flex flex-column flex-sm-row justify-content-end gap-2 mt-3 pt-3 border-top">

                    <a href="{{ route('teacher.index') }}"
                        class="btn btn-outline-secondary btn-sm rounded-pill px-3 py-2">
                        <i class="bi bi-arrow-left me-1"></i>
                        Volver
                    </a>

                </div>

            </div>
        </div>

    </div>
@endsection
