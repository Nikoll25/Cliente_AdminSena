<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm sticky-top">
    <div class="container">

        <!-- BRAND / LOGO -->
        <a class="navbar-brand d-flex align-items-center fw-bold text-white fs-4 me-auto me-lg-4" href="{{ url('/inicio') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo SENA" width="38" height="38">
            <span>Admin SENA</span>
        </a>

        <!-- BOTÓN TOGGLER (HAMBURGUESA) -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- CONTENIDO COLAPSABLE -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- BLOQUE DERECHO: SECCIONES + BUSCADOR + INICIAR SESIÓN -->
            <div class="d-flex flex-column flex-lg-row align-items-stretch align-items-lg-center ms-auto gap-2 gap-lg-3 w-100 justify-content-end">

                <!-- SECCIONES -->
                <ul class="navbar-nav align-items-lg-center gap-lg-1 mb-2 mb-lg-0">

                    <!-- INICIO -->
                    <li class="nav-item">
                        <a class="nav-link px-2 fw-medium {{ request()->is('inicio') ? 'active fw-bold' : '' }}"
                            href="{{ url('/inicio') }}">Inicio</a>
                    </li>

                    <!-- DROPDOWN ADMINISTRACIÓN -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 fw-medium {{ request()->is('area*', 'trainingcenter*', 'computer*') ? 'active fw-bold' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administración
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                            <li>
                                <a class="dropdown-item py-2 {{ request()->is('area*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ url('/area/list') }}">
                                    <i class="bi bi-geo-alt me-2 {{ request()->is('area*') ? 'text-white' : 'text-success' }}"></i>Áreas
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 {{ request()->is('trainingcenter*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ url('/trainingcenter/list') }}">
                                    <i class="bi bi-building me-2 {{ request()->is('trainingcenter*') ? 'text-white' : 'text-success' }}"></i>Centros de formación
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item py-2 {{ request()->is('computer*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ url('/computer/list') }}">
                                    <i class="bi bi-laptop me-2 {{ request()->is('computer*') ? 'text-white' : 'text-success' }}"></i>Computadores
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- DROPDOWN ACADÉMICO -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-2 fw-medium {{ request()->is('teacher*', 'course*', 'apprentice*', 'courseteacher*') ? 'active fw-bold' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Académico
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-sm">
                            <li>
                                <a class="dropdown-item py-2 {{ request()->is('teacher*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ url('/teacher/list') }}">
                                    <i class="bi bi-person-badge me-2 {{ request()->is('teacher*') ? 'text-white' : 'text-success' }}"></i>Instructores
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 {{ request()->is('course*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ url('/course/list') }}">
                                    <i class="bi bi-journal-bookmark me-2 {{ request()->is('course*') ? 'text-white' : 'text-success' }}"></i>Cursos
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 {{ request()->is('apprentice*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ url('/apprentice/list') }}">
                                    <i class="bi bi-people me-2 {{ request()->is('apprentice*') ? 'text-white' : 'text-success' }}"></i>Aprendices
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item py-2 {{ request()->is('courseteacher*') ? 'active bg-success text-white' : '' }}"
                                    href="{{ url('/courseteacher/create') }}">
                                    <i class="bi bi-diagram-3 me-2 {{ request()->is('courseteacher*') ? 'text-white' : 'text-success' }}"></i>Asignaciones
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- OFERTAS -->
                    <li class="nav-item">
                        <a class="nav-link px-2 fw-medium {{ request()->is('offer*') ? 'active fw-bold' : '' }}"
                            href="{{ url('/offer/list') }}">
                            <i class="bi bi-mortarboard-fill me-1"></i>Ofertas
                        </a>
                    </li>

                </ul>

                <!-- BUSCADOR (Pegado a las secciones) -->
                <form class="m-0" role="search" action="#" method="GET">
                    <div class="input-group">
                        <input class="form-control form-control-sm border-0 bg-light rounded-start-pill ps-3"
                            type="search" placeholder="Buscar..." aria-label="Buscar">
                        <button class="btn btn-light btn-sm rounded-end-pill pe-3 text-success" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <!-- INICIAR SESIÓN (Más a la derecha) -->
                <a href="{{ url('/login') }}"
                    class="btn btn-light btn-sm rounded-pill px-3 py-1 fw-bold text-success shadow-sm d-inline-flex align-items-center justify-content-center ms-lg-2">
                    <i class="bi bi-person-circle fs-6 me-1"></i>
                    <span>Iniciar sesión</span>
                </a>

            </div>

        </div>
    </div>
</nav>
