@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Department</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="Department_id">Department Id:</label>
              <input type="text" class="form-control" name="dept_id"/>
          </div>

          
          <div class="form-group">
            <label for="Department_email">Department Email:</label>
            <input type="email" class="form-control" name="dept_email"/>
        </div>

          <div class="form-group">
              <label for="Department_name">Department Name:</label>
              <input type="text" class="form-control" name="dept_name"/>
          </div>

          <div class="form-group">
              <label for="Department_level">Level:</label>
              <input type="text" class="form-control" name="dept_level"/>
          </div>
          <div class="form-group">
              <label for="Due date">Date:</label>
              <input type="date" class="form-control" name="d_date"/>
          </div>
                               
          <button type="submit" class="btn btn-primary-outline">Add Department</button>
      </form>
  </div>
</div>
</div>
@endsection