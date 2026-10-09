@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="m-0">Lista de Instructores</h1>

            <a href="/teacher/create" class="btn btn-success rounded-pill px-3 py-2 shadow-sm">
                <i class="bi bi-plus-circle"></i>
                Agregar Instructor
            </a>
        </div>

        <table id="idTeacher" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Área</th>
                    <th>Centro de Formación</th>
                    <th class="text-nowrap text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher['id'] }}</td>
                        <td>{{ $teacher['name'] }}</td>
                        <td>{{ $teacher['email'] }}</td>
                        <td>{{ $teacher['area']['name'] }}</td>
                        <td>{{ $teacher['trainingCenter']['name'] }}</td>

                        <td class="text-nowrap text-center">

                            <!-- Ver -->
                            <a href="{{ route('teacher.show', $teacher['id']) }}" class="btn btn-outline-success"
                                title="Ver">
                                <i class="bi bi-eye"></i>
                            </a>

                            <!-- Editar -->
                            <a href="" class="btn btn-outline-info" title="Editar">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <!-- Eliminar -->
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-outline-danger" title="Eliminar">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
