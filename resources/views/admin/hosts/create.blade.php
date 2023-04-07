@extends('layouts.admin')

@section('content')

<div class="my-5">
    <form action="{{ route('admin.host') }}" method="post">

    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input
        required
        type="text"
        class="form-control"
        name="name"
        id="name"
        aria-describedby="name"
        placeholder="Nome">
        <div id="name" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    <div class="mb-3">
        <label for="name" class="form-label">Cognome</label>
        <input
        required
        type="text"
        class="form-control"
        name="surname"
        id="surname"
        aria-describedby="surname"
        placeholder="Cognome">
        <div id="surname" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    <div class="mb-3">
        <label for="name" class="form-label">Voto</label>
        <input
        required
        type="number"
        class="form-control"
        name="vote"
        id="vote"
        aria-describedby="vote"
        placeholder="Voto">
        <div id="vote" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    <div class="mb-3">
        <label for="name" class="form-label">Privato</label>
        <input
        required
        type="number"
        class="form-control"
        name="private"
        id="private"
        aria-describedby="private"
        placeholder="Privato">
        <div id="private" class="form-text">Il campo è obbligatorio</div>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Immagine</label>
        <input
        required
        type="text"
        class="form-control"
        name="image"
        id="image"
        aria-describedby="image"
        placeholder="Immagine">
        <select required
        type="text"
        class="form-control"
        name="image"
        id="image"
        aria-describedby="image"
        placeholder="Immagine"
        >
            <option value="0">No</option>
            <option value="1">Si</option>
        </select>
        <div id="image" class="form-text">Il campo è obbligatorio</div>
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea
        class="form-control"
        required
        name="description"
        id="description"
        rows="6"
        placeholder="Inserisci descrizione"></textarea>
    </div>

    <button type="submit" class="mb-5 btn btn-success">Crea</button>
    </form>
</div>
@endsection