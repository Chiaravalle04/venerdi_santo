@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">

                <h2>{{ $announcement->city }} {{ $announcement->country }}</h2>

                <p>Voto: {{ $announcement->vote }}</p>

                <p>Private:
                    @if ($announcement->vote == 0)
                        No
                    @else
                        Si
                    @endif
                </p>

                @if ($announcement->image)
                    <div>
                        <img class="mb-3 w-50" src="{{ $announcement->image }}" alt="">
                    </div>
                @else
                    Nessuna immagine
                @endif

                <p>{{ $announcement->description }}</p>

                <div>
                  prezzo: {{ $announcement->price }}€
                </div>

                <a href="{{ route('admin.announcement.index') }}" class="btn btn-info">
                    Torna indietro
                </a>

            </div>
        </div>
    </div>
@endsection
