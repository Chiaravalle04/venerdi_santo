@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">
                  {{-- @include('partials.success') --}}

                  <h2>{{ $host->name }} {{ $host->surname }}</h2>

                  <p>Voto: {{ $host->vote }}</p>

                  <p>Private: {{ $host->private }}</p>
                  
                  @if ($host->image)
                  <div>
                        <img class="mb-3 w-50" src="{{ $host->image }}" alt="">
                  </div>                      
                  @else
                        Nessuna immagine
                  @endif
                  
                  <a href="{{ route('admin.hosts.index') }}" class="btn btn-info">
                        Torna indietro
                  </a>

                  <p>{{ $host->description }}</p>

            </div>
      </div>
</div>
@endsection