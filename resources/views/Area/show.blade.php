@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- ENCABEZADO -->
        <div class="mb-3 pb-3 border-bottom">
            <h1 class="fw-bold h4 text-dark mb-1">
                Información del Área
            </h1>
            <p class="text-muted small mb-0">
                Consulta los detalles del área registrada en el sistema.
            </p>
        </div>

        <!-- TARJETA PRINCIPAL -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

            <!-- CABECERA -->
            <div class="card-header bg-success text-white p-3 border-0">
                <div class="d-flex align-items-center gap-3">

                    <div class="bg-white bg-opacity-25 rounded-3 p-2">
                        <i class="bi bi-diagram-3 fs-4"></i>
                    </div>

                    <div>
                        <h5 class="fw-bold mb-1">
                            {{ $area['name'] }}
                        </h5>

                        <p class="small mb-0">
                            Área registrada en el sistema
                        </p>
                    </div>

                </div>
            </div>

            <!-- CONTENIDO -->
            <div class="card-body p-3">

                <h6 class="fw-bold text-dark mb-3">
                    <i class="bi bi-card-list text-success me-2"></i>
                    Datos del área
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
                                        #{{ $area['id'] }}
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- NOMBRE -->
                    <div class="col-12 col-md-8">
                        <div class="card h-100 border-0 rounded-3 bg-light">
                            <div class="card-body p-3 d-flex align-items-center gap-3">

                                <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                                    <i class="bi bi-folder2-open fs-5"></i>
                                </div>

                                <div>
                                    <p class="text-muted small mb-1">
                                        Nombre del área
                                    </p>
                                    <h6 class="fw-semibold text-dark mb-0">
                                        {{ $area['name'] }}
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- BOTÓN VOLVER -->
                <div class="d-flex justify-content-end mt-3 pt-3 border-top">

                    <a href="{{ route('area.index') }}"
                        class="btn btn-outline-secondary btn-sm rounded-pill px-3 py-2">
                        <i class="bi bi-arrow-left me-1"></i>
                        Volver
                    </a>

                </div>

            </div>
        </div>

    </div>
@endsection
