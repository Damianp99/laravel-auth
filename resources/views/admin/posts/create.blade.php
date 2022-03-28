@extends('layouts.app')
@section('content')
<section class="container">
    <h1 class="text-center">Carica il tuo post</h1>
<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="title" class="form-control" id="title" name="title" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="url" class="form-control" id="image" name="image" placeholder="Immagine">
    </div>
    <div class="form-group">
        <label for="description">Example textarea</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="d-flex justify-content-end align-items-center">
        <button type="submit" class="btn btn-sm btn-success">Pubblica</button>
    </div>
</form>
</section>
@endsection