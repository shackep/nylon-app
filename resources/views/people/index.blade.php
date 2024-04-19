@extends('layouts.app')
@section('content')

<table>
    <thead>
        <tr>
          <th><a href=/admin/people?orderBy=first_name>First Name</a></th>
          <th><a href=/admin/people?orderBy=last_name>Last Name</a></th>
          <th><a href=/admin/people?orderBy=email>Email</a></th>
          <th><a href=/admin/people?orderBy=last_four>SSN</a></th>
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
    <button type="submit" onclick="return confirm('Are you sure you want to deactivate this person?')">Deactivate</button>
</form></td>
        @else    
            <td><form action="/people/{{ $person->id }}/activate" method="POST">
    @csrf
    <button type="submit" onclick="return confirm('Are you sure you want to activate this person?')">Activate</button>
</form></td>
        @endif
    </tr>
@endforeach
</tbody> 
</table>
@endsection