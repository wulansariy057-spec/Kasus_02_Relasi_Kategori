@extends('layouts.app')

@section('title', 'Buku dan Kategori')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Daftar Buku</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">+ Tambah Buku</a>
    </div>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr><th>Judul</th><th>Penulis</th><th>Kategori</th></tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <!-- Diubah dari $book->category_id menjadi $book->category->name -->
                            <td><span class="badge bg-secondary">{{ $book->category?->name ?? 'Tanpa Kategori' }}</span></td>
                        </tr>
                    @empty
                        <tr><td colspan="3" class="text-center text-muted py-4">Belum ada buku.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection