@extends('layout')
@section('content')
    <main class="d-flex justify-content-center align-items-center mt-5">
        <div class="card p-3 w-25 h-25">
            <form action="{{ url('/kategori/create') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="id_user">Id User</label>
                    <input type="text" value="{{ old('id_user') }}" name="id_user"
                        class="form-control  @error('id_user') is-invalid @enderror" id="id_user" placeholder="id user">
                    @error('id_user')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input value="{{ old('nama_kategori') }}" type="text" name="nama_kategori"
                        class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori"
                        placeholder="nama kategori">
                    @error('nama_kategori')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn-primary form-control">Submit</button>
            </form>
        </div>
    </main>
@endsection
