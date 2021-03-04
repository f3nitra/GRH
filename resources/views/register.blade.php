@extends('layout')
@section('content')
<h2>REGISTRATION PAGE</h2>
<hr>
<form action="/register" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Firstname">
    </div>
    <div class="form-group">
        <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Lastname">
    </div>
    <div class="form-group">
        <input type="date" value="1980-01-01" id="-date-input" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" placeholder="Birthdate">
    </div>
    <div class="form-group">
        <input type="text" class="form-control @error('national_id_card') is-invalid @enderror"  name="national_id_card" placeholder="National ID Card" maxlength="11">
    </div>
    <div class="form-group">
        <input type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" placeholder="Adress">
    </div>
    <div class="form-group">
        <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" placeholder="Contact" maxlength="10">
    </div>
    <div class="form-group">
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <select class="custom-select" name="faculty">
            <option value="Law">Law</option>
            <option value="Management">Management</option>
            <option value="Marketing">Marketing</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Industrial Engineering">Industrial Engineering</option>
            <option value="Communication">Communication</option>
            <option value="Telecommunication">Telecommunication</option>
        </select>
    </div>
    <div class="form-group" >
        <select class="custom-select" name="level">
            <option value="L1">Licence 1</option>
            <option value="L2">Licence 2</option>
            <option value="L3">Licence 3</option>
            <option value="M1">Master 1</option>
            <option value="M2">Master 2</option>
        </select>
    </div>
    <div class="form-group" >
        <select class="custom-select" name="sex">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div class="form-group" >
        <select class="custom-select" name="status">
            <option value="Passing">Passing</option>
            <option value="Redoubling">Redoubling</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection