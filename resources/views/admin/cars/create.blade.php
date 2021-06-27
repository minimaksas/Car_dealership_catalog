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
              {{ Form::open(array('url' => 'back/cars/store', 'method' => 'cars', 'enctype'=>'multipart/form-data')) }}

          <div class="form-group">
              {{ Form::label('Brand', 'Brand', array('class' => 'control-label mb-1')) }}
              {{ Form::text('Brand', null, ['class' => 'form-control', 'id' => 'Brand']) }}
          </div>
          <div class="form-group">
              {{ Form::label('Model', 'Model', array('class' => 'control-label mb-1')) }}
              {{ Form::text('Model', null, ['class' => 'form-control', 'id' => 'Model']) }}
          </div>
          <div class="form-group">
              {{ Form::label('category', 'Category', array('class' => 'control-label mb-1')) }}
              {{ Form::select('category_id',$categories,null,['class'=>'form-control myselect','data-placeholder'=>'Select category'] )  }}
          </div>
          <div class="form-group">
              {{ Form::label('Price', 'Price (€)', array('class' => 'control-label mb-1')) }}
              {{ Form::number('Price', null, ['class' => 'form-control', 'id' => 'Price']) }}
          </div>
          <div class="form-group">
              {{ Form::label('Description', 'Description', array('class' => 'control-label mb-1')) }}
              {{ Form::textarea('Description', null, ['class' => 'form-control', 'id' => 'body-editor']) }}
          </div>

          <div class="form-group">
              {{ Form::label('Fuel_type', 'Fuel type', array('class' => 'control-label mb-1')) }}
              {{ Form::text('Fuel_type', null, ['class' => 'form-control', 'id' => 'Fuel_type']) }}
          </div>
          <div class="form-group">
              {{ Form::label('Fuel_tank_capacity', 'Fuel tank capacity (l)', array('class' => 'control-label mb-1')) }}
              {{ Form::number('Fuel_tank_capacity', null, ['class' => 'form-control', 'id' => 'Fuel_tank_capacity']) }}
          </div>
          <div class="form-group">
              {{ Form::label('Max_speed', 'Max speed (km/h)', array('class' => 'control-label mb-1')) }}
              {{ Form::number('Max_speed', null, ['class' => 'form-control', 'id' => 'Max_speed']) }}
          </div>
          <div class="form-group">
              {{ Form::label('Color', 'Color', array('class' => 'control-label mb-1')) }}
              {{ Form::text('Color', null, ['class' => 'form-control', 'id' => 'Color']) }}
          </div>
          <div class="form-group">
              {{ Form::label('image', 'Image', array('class' => 'control-label mb-1')) }}
              {{ Form::file('img',['class'=>'form-control']) }}
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
</div>

@endsection
