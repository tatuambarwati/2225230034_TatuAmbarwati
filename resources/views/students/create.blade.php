@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>NIM</label></br>
        <input type="text" name="nim" id="nim" class="form-control"></br>
        <label>Jurusan</label></br>
        <input type="text" name="jurusan" id="jurusan" class="form-control"></br>
        <label>Hobi</label></br>
        <input type="text" name="hobi" id="hobi" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop