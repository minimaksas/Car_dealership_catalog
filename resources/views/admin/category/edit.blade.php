@extends('admin.layout.master')
@section('content')

<div> <!-- class="row" -->
  <div class="col-md-12">

<div class="card">
    <div class="card-header">
        <strong class="card-title"> {{ $page_name }}</strong>
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

              {{ Form::model($category, ['route' => ['category-update', $category->id], 'method' => 'put']) }}
            <!--  <form action="" method="post" novalidate="novalidate"> -->

          <div class="form-group">
              {{ Form::label('name', 'Name', array('class' => 'control-label mb-1')) }}
              {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
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
</div>

@endsection
