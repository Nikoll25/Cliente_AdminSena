@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card border-0 shadow-lg rounded-4">

                    <!-- ENCABEZADO -->
                    <div class="card-header bg-success text-white text-center py-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="bi bi-building-add"></i>
                            Registrar Área
                        </h3>
                    </div>

                    <!-- FORMULARIO -->
                    <div class="card-body p-4">

                        <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">
                                    Nombre del Área
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="name"
                                    name="name"
                                    placeholder="Ingrese el nombre del área"
                                    required
                                >
                            </div>

                            <!-- BOTONES -->
                            <div class="d-flex justify-content-end gap-2">

                                <a href="{{ route('area.index') }}" class="btn btn-outline-secondary">
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
