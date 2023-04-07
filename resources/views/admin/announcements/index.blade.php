@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div>
            <div>
                <a href="{{ route('admin.announcements.create') }}" class="btn btn-success my-3 w-25">
                    Aggiungi Annuncio
                </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Host</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($announcements as $announcemet)
                    <tr>
                        <th scope="row">{{ $announcemet->id }}</th>
                            @if ( $announcemet->host_id)
                                <td>{{ $announcemet->host->name }} {{ $announcemet->host->surname }}</td>
                            @else
                                <td>NULL</td>
                            @endif
                        <td>{{ $announcemet->city }}</td>
                        <td>{{ $announcemet->country }}</td>
                        <td>€ {{ $announcemet->price }}</td>
                        <td>
                            <div>
                                <a href="{{ route('admin.announcements.show', $announcemet->id) }}" class="btn btn-primary">
                                    Vedi Dettagli
                                </a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href="{{ route('admin.announcements.edit', $announcemet->id) }}" class="btn btn-warning mx-2">
                                    Modifica
                                </a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <form action="{{ route('admin.announcements.destroy', $announcemet->id) }}" method="POST"
                                    onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Elimina
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
