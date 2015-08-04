@extends('master.index')
@section('page')
    <div class="col-md-12">
        <input type="text" placeholder="Full Name" name="f_name">
    </div>
    <div class="col-md-12">
        <input type="radio" name="sex">Male
        <input type="radio" name="sex">Female
    </div>
    <div class="col-md-12">
        <input type="text" placeholder="dob">
    </div>
    <div class="col-md-12">
        <input type="text" placeholder="contact_number">
    </div>
    <div class="col-md-12">
        <select class="form-control">
            @foreach($roles as $role)
                <option>{{$role->name}}</option>
            @endforeach
        </select>
        <button>Add New Role</button>
    </div>
@stop
