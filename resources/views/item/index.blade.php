@extends('layout')
@section('content')
    <main class="p-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </main>
@endsection
