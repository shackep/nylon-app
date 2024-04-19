@extends('layouts.app')
@section('content')

<table>
    <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>SSN</th>
          <th>Active</th>
          <th>Toggle State</th>
        </tr>
    </thead>
    <tbody id='task-list'> 
@foreach ($people as $person)
    <tr>
        <td>{{ $person->first_name }}</td>
        <td>{{ $person->last_name }}</td>
        <td>{{ $person->email }}</td>
        <td>XXX-XX-{{ $person->last_four }}</td>   
        <td>{{ $person->active ? 'true' : 'false' }}</td>
        @if ($person->active)
            <td><form action="/people/{{ $person->id }}/deactivate" method="POST">
    @csrf
    <button type="submit">Deactivate</button>
</form></td>
        @else    
            <td><form action="/people/{{ $person->id }}/activate" method="POST">
    @csrf
    <button type="submit">Activate</button>
</form></td>
        @endif
    </tr>
@endforeach
</tbody> 
</table>
@endsection