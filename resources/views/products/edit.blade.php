@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier un produit</h1>
    
    <a href="{{ route('products.index') }}" class="btn btn-primary mb-3">Retour</a>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label for="name">Nom:</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nom du produit">
        </div>
        
        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Description">{{ $product->description }}</textarea>
        </div>
        
        <div class="form-group mb-3">
            <label for="price">Prix:</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="Prix" step="0.01">
        </div>
        
        <div class="form-group mb-3">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" value="{{ $product->stock }}" class="form-control" placeholder="Quantité en stock">
        </div>
        
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
</div>
@endsection