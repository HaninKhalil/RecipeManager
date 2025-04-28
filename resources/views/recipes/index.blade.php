@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1>Recipe List</h1>
            </div>
            <div class="col text-end">
                <a href="{{ route('recipes.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Recipe
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            @forelse($recipes as $recipe)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->name }}</h5>
                            <p class="card-text">{{ Str::limit($recipe->description, 100) }}</p>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this recipe?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-info">
                        No recipes found. <a href="{{ route('recipes.create') }}">Add your first recipe!</a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection 