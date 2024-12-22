@extends('layouts.sidebar')

@section('title', 'Manage Posts - Blog MSIB')

@section('content')
    <div class="container">
        <h1 class="mb-4 text-primary">
            <i class="bi bi-file-earmark-post" style="font-size: 1.5rem;"></i> Atur Postingan
        </h1>
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">
            <i class="bi bi-plus-circle"></i> Buat Postingan Baru
        </a>

        @if ($posts->isEmpty())
            <div class="alert alert-info" role="alert">
                Tidak ada postingan terbaru
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle shadow-sm">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ Str::limit($post->title, 30) }}</td>
                                <td class="text-center">
                                    <span class="badge bg-secondary">{{ $post->category->name }}</span>
                                </td>
                                <td>{{ optional($post->author)->name ?? 'Author Tak Diketahui' }}</td>
                                <td class="text-center">
                                    @if ($post->is_published)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm me-1">
                                        <i class="bi bi-eye"></i> Lihat
                                    </a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                                          onsubmit="return confirm('Apakah anda yakin ingin menghapusnya?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
@endsection
