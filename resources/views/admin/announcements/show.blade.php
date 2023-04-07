@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">

                  <h2>{{ $host->name }} {{ $host->surname }}</h2>

                  <p>Voto: {{ $host->vote }}</p>

                  <p>Private: 
                        @if ($host->vote == 0)
                              No
                        @else
                              Si
                        @endif
                  </p>
                  
                  @if ($host->image)
                  <div>
                        <img class="mb-3 w-50" src="{{ $host->image }}" alt="">
                  </div>                      
                  @else
                        Nessuna immagine
                  @endif

                  <p>{{ $host->description }}</p>
                  
                  <a href="{{ route('admin.hosts.index') }}" class="btn btn-info">
                        Torna indietro
                  </a>
                  
            </div>
      </div>
</div>
@endsection