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
                    {{ Form::open(['method'=>'GET', 'url'=>['/back/category/create'], 'style'=>'display:inline' ]) }}
                    {{ Form::submit('Create new', ['class'=>'btn btn-primary pull-right']) }}
                    {{ Form::close() }}
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th style="text-align: center; vertical-align:middle">#</th>
                <th style="text-align: center; vertical-align:middle">Name</th>
                <th style="text-align: center; vertical-align:middle">Options</th>
              </tr>
            </thead>
            <tbody>

              @foreach($data as $i=>$row)
              <tr>
                <td style="width: 5%; text-align: center; vertical-align:middle">{{ ++$i }}</td>
                <td style="vertical-align:middle">{{ $row->name }}</td>
                <td style="text-align: center; vertical-align:middle">
                    {{ Form::open(['method'=>'GET', 'url'=>['/back/category/edit/' .$row->id], 'style'=>'display:inline' ]) }}
                    {{ Form::submit('Edit', ['class'=>'btn btn-primary']) }}
                    {{ Form::close() }}

                  {{ Form::open(['method'=>'DELETE', 'url'=>['/back/category/delete/' .$row->id], 'style'=>'display:inline' ]) }}
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
