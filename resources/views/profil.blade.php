@extends('layouts.app')

@section('content')
    <h1>PROFIL ADMIN</h1>

    <div class="card">
        <div class="card-header">
            <h3>Informasi Pribadi</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>NIK</th>
                    <td>{{ $admin->nik }}</td>
                </tr>
                <!-- Sisipkan atribut-atribut lain dari admin sesuai kebutuhan -->
            </table>
        </div>
    </div>

    <a href="{{ route('admin.edit') }}" class="btn btn-primary">Edit Profil</a>
@endsection
