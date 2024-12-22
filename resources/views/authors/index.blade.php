@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4 text-primary"><i class="bi bi-person-lines-fill"></i> Author</h1>

    <a href="{{ route('authors.create') }}" class="btn btn-success mb-3">Tambahkan Author Baru</a>
    
    @if($authors->isEmpty())
        <div class="alert alert-warning" role="alert">
            Tidak ada author yang ditemukan
        </div>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td>
                            <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info btn-sm">Tampilkan</a>
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
