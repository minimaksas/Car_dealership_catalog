@extends('admin.layout.master')
@section('content')

<div> <!-- class="row" -->
  <div class="col-md-12">

<div class="card">
    <div class="card-header">
        <strong class="card-title">{{ $page_name }}</strong>
    </div>
    <div class="card-body">
      <div>
          <div class="card-body">
            @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
              <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
              <hr>
              {{ Form::open(array('url' => 'back/user/store', 'method' => 'post')) }}

          <div class="form-group">
              {{ Form::label('name', 'Name', array('class' => 'control-label mb-1')) }}
              {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
          </div>
          <div class="form-group">
              {{ Form::label('surname', 'Surname', array('class' => 'control-label mb-1')) }}
              {{ Form::text('surname', null, ['class' => 'form-control', 'id' => 'surname']) }}
          </div>
          <div class="form-group">
              {{ Form::label('email', 'Email address', array('class' => 'control-label mb-1')) }}
              {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
          </div>
          <div class="form-group">
              {{ Form::label('password', 'Password', array('class' => 'control-label mb-1')) }}
              {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
          </div>

          <div>
              <button type="submit" class="btn btn-lg btn-info btn-block">
                  <i class="fa fa-lock fa-lg"></i>&nbsp;
                  <span>Create</span>
              </button>
          </div>
              {{ Form::close() }}
          </div>
      </div>

    </div>
</div> <!-- .card -->

@endsection
