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
              </tr>
            @endforeach
        </tbody>
      </table>
@endsection