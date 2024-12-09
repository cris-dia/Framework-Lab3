@extends('layouts.app')

@section('content')
    <h1>Lista de cărți</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Adaugă carte</a>

    <ul class="list-group">
        @foreach ($books as $book)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $book->title }} - {{ $book->author }} ({{ $book->category->name }})
                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Șterge</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
