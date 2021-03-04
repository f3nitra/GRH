@extends('layout')
@section('content')
<h2>Students list</h2>
<ul>
    @foreach($students as $student)
        <li>{{ $student->firstname }} {{ $student->lastname }} {{ $student->birthdate }} {{ $student->national_id_card }} {{ $student->adress }} {{ $student->contact }} {{ $student->email }} {{ $student->faculty }}</li>
    @endforeach
</ul>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Birthdate</th>
        <th scope="col">National ID Card</th>
        <th scope="col">Adress</th>
        <th scope="col">Contact</th>
        <th scope="col">Email</th>
        <th scope="col">Faculty</th>
        <th scope="col">Level</th>
        <th scope="col">Sex</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    @foreach($students as $student)
    <tbody>
        <tr class="table-active">
          <td>{{ $student->id }}</td>
          <td>{{ $student->firstname }}</td>
          <td>{{ $student->lastname }}</td>
          <td>{{ $student->birthdate }}</td>
          <td>{{ $student->national_id_card }}</td>
          <td>{{ $student->adress }}</td>
          <td>{{ $student->contact }}</td>
          <td>{{ $student->email }}</td>
          <td>{{ $student->faculty }}</td>          
          <td>{{ $student->level }}</td>          
          <td>{{ $student->sex }}</td>          
          <td>{{ $student->status }}</td>          
        </tr>       
    </tbody>
    @endforeach
</table>
@endsection