@extends('front.layout.master')
@section('content')

<section class="breadcrumb_section"></section>

<div class="container">
<div class="row">
<div class="col-md-12">
 @foreach($cars as $key=>$car)
                @if($key === 0)
                <div class="header_orange">
                   <h2><a href="{{ url('/category') }}/{{ $car->category_id }}">{{ $car->category->name }}</a></h2>
                </div>
                      <div class="col-md-6" style="min-height: 555px;right: 15px">
                        <div class="top_article_img">
                          <!-- <img class="img-fluid" src="{{ asset('public/cars') }}/{{ $car->list_image }}" alt="{{ $car->Brand }}"> -->
                          <a href="{{ url('/details') }}/{{ $car->slug }}"><img class="img-responsive" src="{{ asset('public/cars') }}/{{ $car->list_image }}" alt="{{ $car->Brand }}"></a>
                        </div>
                        <!-- entity_thumb -->
                        <div class="category_article_title">
                           <h5>
                              <b><a href="{{ url('/details') }}/{{ $car->slug }}" target="_self"> {{ $car->Brand }} {{ $car->Model }}</a></b>
                           </h5>
                        </div>
                        <!-- entity_meta -->
                        <div class="category_article_content">
                            <p>{!! str_limit($car->Description, 300, '...') !!}</p>
                            <br>Price: <b>{{ number_format($car->Price, 2) }} €</b>
                        </div>
                        <!-- entity_content -->
                    </div>
                @else
                    <!-- entity_wrapper -->
                    @if($key === 1)
                        <div class="row">
                    @endif
                      <div class="col-md-6" style="min-height: 555px;margin-bottom:2%">
                              <div class="top_article_img">
                                <a href="{{ url('/details') }}/{{ $car->slug }}"><img class="img-responsive" src="{{ asset('public/cars') }}/{{ $car->list_image }}" alt="{{ $car->title }}"></a>
                              </div>

                              <div class="category_article_title">
                                 <h5>
                                    <b><a href="{{ url('/details') }}/{{ $car->slug }}" target="_self"> {{ $car->Brand }} {{ $car->Model }}</a></b>
                                 </h5>
                              </div>

                              <div class="category_article_content">
                              <p>{!! str_limit($car->Description, 300, '...') !!}</p>
                               <br> Price: <b>{{ number_format($car->Price, 2) }} €</b>
                              </div>
                      </div>
                        <!-- col-md-6 -->
                    @if($loop->last)
                        </div>
                    @endif
                @endif
            @endforeach
         <div style="margin-left: 40%">
             {{ $cars->links() }}
         </div>
         <!-- navigation -->
        </div>
      <!-- col-md-8 -->

</div>
<!-- Row -->

</div>
<!-- Container -->
@endsection
