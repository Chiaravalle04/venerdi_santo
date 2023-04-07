@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Private</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hosts as $host)
                    <tr>
                        <th scope="row">{{ $host->id }}</th>
                        <td>{{ $host->name }}</td>
                        <td>{{ $host->surname }}</td>
                        <td>{{ $host->private }}</td>
                        <td>
                            <div>
                                <a href="{{ route('admin.hosts.show', $host->id) }}" class="btn btn-primary">
                                    Vedi Dettagli
                                </a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href="{{ route('admin.hosts.edit', $host->id) }}" class="btn btn-warning mx-2">
                                    Modifica
                                </a>
                            </div>
                        </td>
                        <td>
                            <div>
                                <form action="{{ route('admin.hosts.destroy', $host->id) }}" method="POST"
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
