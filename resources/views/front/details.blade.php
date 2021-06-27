@extends('front.layout.master')
@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="entity_wrapper">

    @include('flash::message')

    <div class="entity_title">
        <h1><a href="{{ url('/details') }}/{{ $car->slug }}">{{ $car->Brand }} {{ $car->Model }}</a></h1>
    </div>
    Created: {{ date('Y-m-d',strtotime($car->created_at)) }}
    </div>

    <div>
        <img class="img-responsive" src="{{ asset('public/cars') }}/{{ $car->list_image }} " alt="feature-top">
    </div>

    <div class="entity_content">

        <span style="font-size:18px;">Brand:</span>
        <b> <span style="font-size:18px; color: black"> {{ $car->Brand }}</span></b><br>

        <span style="font-size:18px;">Model:</span>
        <b> <span style="font-size:18px; color: black"> {{ $car->Model }}</span></b><br>

        <span style="font-size:18px;">Category:</span>
        <b> <span style="font-size:18px; color: black"> {{ $category[0]->name }}</span></b><br>

        <span style="font-size:18px;">Description:</span>
        <b> <span style="font-size:16px; color: black"> {!! $car->Description !!}</span></b>

        <span style="font-size:18px;">Price:</span>
        <b> <span style="font-size:18px; color: black"> {!! number_format($car->Price , 2) !!} €</span></b><br>

        <span style="font-size:18px;">Fuel type:</span>
        <b> <span style="font-size:18px; color: black"> {{ $car->Fuel_type }}</span></b><br>

        <span style="font-size:18px;">Fuel tank capacity: </span>
        <b> <span style="font-size:18px; color: black"> {{ $car->Fuel_tank_capacity }} l</span></b><br>

        <span style="font-size:18px;">Max speed:</span>
        <b> <span style="font-size:18px; color: black"> {{ $car->Max_speed }} km/h</span></b><br>

        <span style="font-size:18px;">Color:</span>
        <b> <span style="font-size:18px; color: black"> {{ $car->Color }}</span></b><br>
    </div>
</div>

<div class="related_news">
    <div class="entity_inner__title">
        <h2><a>Cars in the same category</a></h2>
    </div>

    <div class="row">
   @foreach($same_category_cars as $same_category)

        <div class="col-md-6">
            <div class="media">
                <div class="media-left">
                    <a href="{{ url('/details') }}/{{ $same_category->slug }}"><img class="media-object" src="{{ asset('public/cars') }}/{{ $same_category->thumb_image }} "
                                     alt="{{ $same_category->Brand }} {{ $same_category->Model }}"></a>
                </div>
                <div class="media-body">
                  <span class="tag purple"><a href="{{ url('/category') }}/{{ $same_category->category_id }}">{{ $same_category->category['name'] }}</a></span>

                    <h3 class="media-heading"><a href="{{ url('/details') }}/{{ $same_category->slug }}">{{ $same_category->Brand }} {{ $same_category->Model }}</a></h3>
                    <span>{!! str_limit($same_category->Description, 175, '...') !!}</span>
                    <span>Price: <b>{{ number_format($same_category->Price, 2) }} € </b></span>

                    <h3 class="media-heading"><a href="{{ url('/details') }}/{{ $same_category->slug }}"></a></h3>
                </div>
            </div>

        </div>
       @endforeach
    </div>
</div>

</div>
<!--Left Section-->

</div>
<!-- Right Section -->

</div>
<!-- Row -->

</div>
<!-- Container -->

</section>

@endsection
