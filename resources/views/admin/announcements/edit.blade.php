@extends('layouts.admin')

@section('content')

<div class="my-5">
    <form action="{{ route('admin.announcements.update', $announcements->id) }}" method="post" enctype="multipart/form-data">

    @csrf

    @method('put')
    {{-- CITTÀ --}}
    <div class="mb-3">
        <label for="city" class="form-label">Città</label>
        <input
        required
        type="text"
        class="form-control"
        name="city"
        id="city"
        value="{{ old('city', $announcements->city) }}"
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
        value="{{ old('country', $announcements->country) }}"
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
        value="{{ old('price', $announcements->price) }}"
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
        value="{{ old('vote', $announcements->vote) }}"
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
        {{-- value="{{ old('description', $host->description) }}" --}}
        placeholder="Inserisci immagine">
    </div>

    {{-- INPUT DESCRIZIONE --}}
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea
        class="form-control"
        required
        name="description"
        id="description"
        rows="6"
        placeholder="Inserisci descrizione">{{ old('description', $host->description) }}</textarea>
        <div id="description" class="form-text">Il campo è obbligatorio</div>
    </div>

    {{-- PRENOTATO --}}
    <select name="booked" class="form-select" aria-label="Prenotato">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>

    <button type="submit" class="mb-5 btn btn-warning">Aggiorna</button>
    </form>
</div>
@endsection