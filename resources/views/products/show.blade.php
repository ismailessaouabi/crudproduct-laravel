@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Détails du Produit</h1>
        <div>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Modifier</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr?')">Supprimer</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Prix:</strong> {{ number_format($product->price, 2) }} €</li>
                <li class="list-group-item"><strong>Quantité:</strong> {{ $product->quantity }}</li>
                <li class="list-group-item"><strong>Catégorie:</strong> {{ $product->category->name }}</li>
            </ul>
            <p class="card-text"><small class="text-muted">Créé le: {{ $product->created_at->format('d/m/Y H:i') }}</small></p>
            <p class="card-text"><small class="text-muted">Modifié le: {{ $product->updated_at->format('d/m/Y H:i') }}</small></p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
@endsection