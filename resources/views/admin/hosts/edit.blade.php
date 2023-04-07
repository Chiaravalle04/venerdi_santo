@extends('layouts.admin')

@section('content')

<div class="my-5">
    <form action="{{ route('admin.hosts.update', $host->id) }}" method="post">

      @csrf

      @method('put')
        {{-- INPUT NOME HOST --}}
      <div class="mb-3 d-inline-block">
        <label for="name" class="form-label">Nome Host:</label>
        <input
        required
        type="text"
        class="form-control"
        name="name"
        id="name"
        value="{{ old('name', $host->name) }}"
        aria-describedby="name"
        placeholder="Inserisci nome host">
        <div id="name" class="form-text">Il campo è obbligatorio</div>
      </div>
        
      {{-- INPUT COGNOME HOST --}}
      <div class="mb-3 d-inline-block">
        <label for="surname" class="form-label">Cognome Host:</label>
        <input
        required
        type="text"
        class="form-control"
        name="surname"
        id="surname"
        value="{{ old('surname', $host->surname) }}"
        aria-describedby="surname"
        placeholder="Inserisci nome host">
        <div id="surname" class="form-text">Il campo è obbligatorio</div>
      </div>
      
      {{-- INPUT VOTO --}}
      <div class="mb-3">
          <label for="vote" class="form-label">Voto:</label>
          <input
          class="form-control"
          required
          type="number" 
          name="vote" 
          id="vote"
          value="{{ old('vote', $host->vote) }}"
          placeholder="Inserisci voto"
          min="0"
          max="5">
      </div>

      {{-- INPUT PRIVATE SI/NO --}}
    <select class="form-select" aria-label="Host privato">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>

    {{-- INPUT IMMAGINE --}}
      <div class="mb-3">
        <label for="image" class="form-label">Immagine:</label>
        <input
        class="form-control"
        type="file" 
        name="image" 
        id="image"
        {{-- value="{{ old('description', $host->description) }}" --}}
        placeholder="Inserisci descrizione">
      </div>

      {{-- INPUT DESCRIPTION --}}
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

    <button type="submit" class="mb-5 btn btn-warning">Aggiorna</button>
    </form>
</div>
@endsection