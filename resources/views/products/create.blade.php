@extends('products.template')
@section('content')
<div class="row">
    <div class="col-6 h2">cree un nouveau produit </div>
    <div class="col">
        <a class="btn btn-primary" href="{{ route('products.index')}}">Retour</a>
</div>
</div>
<form action="{{route('products.store')}}" method="POST">
@csrf
<div class="col-md-6">
<label for="name"> Nom: </label>
<input id="name" type="text" name="name" class="form-control" value="{{old('name')}}">
@error('name')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="col-md-6">
<label for="detail">Détail:</label>
<textarea id="detail" class="form-control" name="detail">{{ old('detail') }}</textarea>
 @error('detail')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="col-md-6">
<button type="submit" class="btn btn-primary">Valider</button>
</div>
</form>
@endsection