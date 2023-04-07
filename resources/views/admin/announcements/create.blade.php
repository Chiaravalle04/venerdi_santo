@extends('layouts.admin')

@section('content')

<div class="my-5">
    <form action="{{ route('admin.announcements.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- CITTÀ --}}
    <div class="mb-3">
        <label for="city" class="form-label">Città</label>
        <input
        required
        type="text"
        class="form-control"
        name="city"
        id="city"
        aria-describedby="name"
        placeholder="Inserisci nome host">
        <div id="city" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    {{-- PAESE --}}
    <div class="mb-3">
        <label for="country" class="form-label">Paese</label>
        <input
        required
        type="text"
        class="form-control"
        name="country"
        id="country"
        aria-describedby="country"
        placeholder="Inserisci nome host">
        <div id="country" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    {{-- PREZZO --}}
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input
        class="form-control"
        required
        type="number" 
        name="price" 
        id="price"
        placeholder="Inserisci voto">
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

    {{-- PRENOTATO --}}
    <select name="booked" class="form-select" aria-label="Prenotato">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>

    {{-- BOTTONE --}}
    <button type="submit" class="mb-5 btn btn-success">Crea</button>
    </form>
</div>
@endsection