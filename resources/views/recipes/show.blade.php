@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">{{ $recipe->name }}</h2>
                    <div>
                        <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-warning btn-sm">Edit Recipe</a>
                        <a href="{{ route('recipes.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="mb-4">
                        <h4>Description</h4>
                        <p class="text-muted">{{ $recipe->description }}</p>
                    </div>

                    <div class="mb-4">
                        <h4>Ingredients</h4>
                        <div class="bg-light p-3 rounded">
                            {!! nl2br(e($recipe->ingredients)) !!}
                        </div>
                    </div>

                    <div class="mb-4">
                        <h4>Cooking Instructions</h4>
                        <div class="bg-light p-3 rounded">
                            {!! nl2br(e($recipe->instructions)) !!}
                        </div>
                    </div>

                    <div class="text-muted mt-3">
                        <small>Created: {{ $recipe->created_at->format('F j, Y, g:i a') }}</small>
                        <br>
                        <small>Last Updated: {{ $recipe->updated_at->format('F j, Y, g:i a') }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 