@extends('admin.layout.master')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{ $page_name }}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
        <div class="col-md-12">
            <div class="card">
              @if($message = Session::get('success'))
              <div class="alert alert-success">
                {{ $message }}
              </div>
              @endif
                <div class="card-header">
                    <strong class="card-title">{{ $table_name }}</strong>
                    {{ Form::open(['method'=>'GET', 'url'=>['/back/cars/create'], 'style'=>'display:inline' ]) }}
                    {{ Form::submit('Create new', ['class'=>'btn btn-primary pull-right']) }}
                    {{ Form::close() }}
                </div>
                <div >
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th style="text-align: center; width: 4%; vertical-align:middle">#</th>
                <th style="text-align: center; width: 8%; vertical-align:middle">Picture</th>
                <th style="text-align: center; width: 7%; vertical-align:middle">Brand</th>
                <th style="text-align: center; width: 7%; vertical-align:middle">Model</th>
                <th style="text-align: center; width: 7%; vertical-align:middle">Price (€)</th>
                <th style="text-align: center; width: 17%; vertical-align:middle">Description</th>
                <th style="text-align: center; width: 5%; vertical-align:middle">Category</th>
                <th style="text-align: center; width: 7%; vertical-align:middle">Fuel type</th>
                <th style="text-align: center; width: 5%; vertical-align:middle">Fuel tank capacity (l)</th>
                <th style="text-align: center; width: 5%; vertical-align:middle">Max speed (km/h)</th>
                <th style="text-align: center; width: 7%; vertical-align:middle">Color</th>
                <th style="text-align: center; width: 15%; vertical-align:middle">Options</th>
              </tr>
            </thead>
            <tbody>

              @foreach($data as $i=>$row)
              <tr>
                <td style="width: 5%; text-align: center; vertical-align:middle">{{ ++$i }}</td>
                <td style="text-align: center; vertical-align:middle">
                @if(file_exists(public_path('cars/').$row->thumb_image))
                  <img src="{{ asset('public/cars') }}/{{ $row->thumb_image }} " class="img img-responsive">
                @endif
                </td>
                <td style="text-align: center; vertical-align:middle">{{ $row->Brand }}</td>
                <td style="text-align: center; vertical-align:middle">{{ $row->Model }}</td>
                <td style="text-align: center; vertical-align:middle">{{ number_format($row->Price, 2) }}</td>
                <td style="text-align: center; vertical-align:middle">{!! str_limit($row->Description, 250, '...')  !!}</td>
                  @foreach ($categories as $category)
                    @if ($row->category_id == $category->id)
                          <td style="text-align: center; vertical-align:middle">{{ $category->name }}</td>
                      @endif
                  @endforeach
                <td style="text-align: center; vertical-align:middle">{{ $row->Fuel_type }}</td>
                <td style="text-align: center; vertical-align:middle">{{ $row->Fuel_tank_capacity }}</td>
                <td style="text-align: center; vertical-align:middle">{{ $row->Max_speed }}</td>
                <td style="text-align: center; vertical-align:middle">{{ $row->Color }}</td>
                <td style="text-align: center; vertical-align:middle">
                    {{ Form::open(['method'=>'GET', 'url'=>['/back/cars/edit_price/' .$row->id], 'style'=>'display:inline' ]) }}
                    {{ Form::submit('Edit Price', ['class'=>'btn btn-info']) }}
                    {{ Form::close() }}

                    {{ Form::open(['method'=>'GET', 'url'=>['/back/cars/edit/' .$row->id], 'style'=>'display:inline' ]) }}
                    {{ Form::submit('Edit', ['class'=>'btn btn-primary']) }}
                    {{ Form::close() }}

                    {{ Form::open(['method'=>'DELETE', 'url'=>['/back/cars/delete/' .$row->id], 'style'=>'display:inline' ]) }}
                    {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script src=" {{ asset('public/admin/assets/js/lib/data-table/datatables.min.js') }} "></script>

@endsection
