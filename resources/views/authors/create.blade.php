@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4 text-primary"><i class="bi bi-person-fill"></i> Tambahkan Author</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="form-group mb-3">
            <label for="bio">Bio</label>
            <textarea name="bio" class="form-control" id="bio" rows="4" placeholder="Tuliskan bio"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary ms-2">Kembali</a>
    </form>
</div>
@endsection
