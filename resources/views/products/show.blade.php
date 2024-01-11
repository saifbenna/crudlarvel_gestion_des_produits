@extends('products.template')
@section('content')
<div class="row">
<div class="col-6 h2">
 Affichage des détails d'un produit
 </div>
<div class="col">
<a class="btn btn-primary" href="{{ route('products.index') }}"> Retour</a>
</div>
</div>
<div class="row">
<div class="col-1 h5">Nom:</div>
<div class="col">{{ $product->name }}</div>
</div>
<div class="row">
<div class="col-1 h5">Détails:</div>
<div class="col">{{ $product->detail }}</div>
</div>
@endsection