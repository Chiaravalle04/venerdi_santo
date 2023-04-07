@extends('layouts.admin')

@section('content')

<div class="my-5">
    <form action="{{ route('admin.hosts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- NOME HOST --}}
    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input
        required
        type="text"
        class="form-control"
        name="name"
        id="name"
        aria-describedby="name"
        placeholder="Inserisci nome host">
        <div id="name" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    {{-- COGNOME HOST --}}
    <div class="mb-3">
        <label for="surname" class="form-label">Cognome:</label>
        <input
        required
        type="text"
        class="form-control"
        name="surname"
        id="surname"
        aria-describedby="surname"
        placeholder="Inserisci nome host">
        <div id="surname" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    {{-- VOTO --}}
    <div class="mb-3">
        <label for="vote" class="form-label">Voto:</label>
        <input
        class="form-control"
        required
        type="number" 
        name="vote" 
        id="vote"
        placeholder="Inserisci voto"
        min="0"
        max="5">
    </div>
    
    {{-- PRIVATO --}}
    <select class="form-select" aria-label="Host privato">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>

    {{-- IMMAGINE --}}
    <div class="mb-3">
        <label for="image" class="form-label">Immagine:</label>
        <input
        class="form-control"
        type="file" 
        name="image" 
        id="image"
        placeholder="Inserisci l'imaggine'">
    </div>
    
    {{-- DESCRIZIONE --}}
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea
        class="form-control"
        required
        name="description"
        id="description"
        rows="6"
        placeholder="Inserisci descrizione"></textarea>
        <div id="description" class="form-text">Il campo è obbligatorio</div>
    </div>

    {{-- BOTTONE --}}
    <button type="submit" class="mb-5 btn btn-success">Crea</button>
    </form>
</div>
@endsection