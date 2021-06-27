@extends('admin.layout.master')
@section('content')

<div> <!-- class="row" -->
  <div class="col-md-12">
  <div class="card">
    @if($message = Session::get('success'))
    <div class="alert alert-success">
      {{ $message }}
    </div>
    @endif
    <div class="card-header">
        <strong class="card-title"> {{ $page_name }} </strong>
    </div>
    <div class="card-body">
      <!-- Credit Card -->
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
              {{ Form::open(['url' => '/back/settings/update', 'method' => 'put', 'enctype'=>'multipart/form-data']) }}

          <div class="form-group">
              {{ Form::label('name', 'System\'s name', array('class' => 'control-label mb-1')) }}
              {{ Form::text('name', $system_name, ['class' => 'form-control', 'id' => 'name']) }}
          </div>
          <div class="form-group">
              {{ Form::label('favicon', 'System page\'s browser tab logo', array('class' => 'control-label mb-1')) }}
              {{ Form::file('favicon',['class'=>'form-control']) }}
          </div>
          <div class="form-group">
              {{ Form::label('front_logo', 'Main page\'s logo', array('class' => 'control-label mb-1')) }}
              {{ Form::file('front_logo',['class'=>'form-control']) }}
          </div>
          <div class="form-group">
              {{ Form::label('admin_logo', 'Administrator panel\'s and login/register page\'s logo', array('class' => 'control-label mb-1')) }}
              {{ Form::file('admin_logo',['class'=>'form-control']) }}
          </div>
          <div>
              <button type="submit" class="btn btn-lg btn-info btn-block">
                  <i class="fa fa-lock fa-lg"></i>&nbsp;
                  <span>Update</span>
              </button>
          </div>
              {{ Form::close() }}
          </div>
      </div>
    </div>
</div> <!-- .card -->

@endsection
