@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Información del Instructor</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th width="30%">ID</th>
                        <td>{{ $teacher['id'] }}</td>
                    </tr>
                    <tr>
                        <th>nombre</th>
                        <td>{{ $teacher['name'] }}</td>
                    </tr>
                    <tr>
                        <th>correo electrónico</th>
                        <td>{{ $teacher['email'] }}</td>
                    </tr>
                    <tr>
                        <th>Area</th>
                        <td>{{ $teacher['area']['name'] }}</td>
                    </tr>
                    <tr>
                        <th>Centro de formación</th>
                        <td>{{ $teacher['trainingCenter']['name'] }}</td>
                    </tr>

                </tbody>
            </table>
            <div class="text-end">
                <a href="{{ route('teacher.index') }}" class="btn btn-secondary">
                    ← Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
