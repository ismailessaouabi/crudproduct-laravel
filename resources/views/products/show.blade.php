@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du produit</h1>
    
    <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Retour</a>
    
    <div class="card">
        <div class="card-header">
            <h5>{{ $product->name }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Prix:</strong> {{ $product->price }} €</p>
            <p><strong>Stock:</strong> {{ $product->stock }}</p>
            <p><strong>Date de création:</strong> {{ $product->created_at }}</p>
        </div>
    </div>
</div>
@endsection