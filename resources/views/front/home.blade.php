
@extends('front.layout.master')
@section('content')

<section id="category_section" class="category_section" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="category_section mobile">
    @foreach($sharedData['categories'] as $category)
     @foreach($category->cars as $key=>$item)
        @if($key === 0)
    <div class="header_orange">
        <h2><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></h2>
    </div>

    <div class="category_article_wrapper">
        <div class="row">
            <div class="col-md-4">
                <div class="top_article_img">
                    <a href="{{ url('/details') }}/{{ $item->slug }}"><img class="img-responsive" src="{{ asset('public/cars') }}/{{ $item->list_image }}" alt="{{ $item->Brand }}  {{ $item->Model }}"></a>
                </div>
            </div>
            <div class="col-md-6">
                <span class="tag purple">{{ $category->name }}</span>

                <div class="category_article_title">
                    <h2><a href="{{ url('/details') }}/{{ $item->slug }}" target="_self">{{ $item->Brand }} {{ $item->Model }} </a></h2>
                </div>
                <div class="category_article_content">
                    <p>{!! str_limit($item->Description, 300, '...') !!}</p>
                    <br>Price: <b>{{ number_format($item->Price, 2) }} €</b>
                </div>
            </div>
        </div>
    </div>
    @else
    @if($key === 1)
    <div class="category_article_wrapper">
        <div class="row">
            @endif
            <div class="col-md-6" style="margin-bottom: 2%">
                <div class="media">
                    <div class="media-left">
                        <a href="{{ url('/details') }}/{{ $item->slug }}"><img class="media-object" src="{{ asset('public/cars') }}/{{ $item->thumb_image }}" alt="{{ $item->Brand }} {{ $item->Model }}"></a>
                    </div>
                    <div class="media-body">
                        <span class="tag purple">{{ $category->name }} </span>

                        <h3 class="media-heading" style="font-size:18px;"><a href="{{ url('/details') }}/{{ $item->slug }}" >{{ $item->Brand }} {{ $item->Model }}</a></h3>

                        <div class="category_article_content">

                            <p>{!! str_limit($item->Description, 175, '...') !!}</p>
                            <br>Price: <b>{{ number_format($item->Price, 2) }} € </b>
                        </div>
                    </div>
                </div>

            </div>
           @if($loop->last)
        </div>

    </div>
     @endif
     @endif

    @endforeach
     <p class="divider"><a href="{{ url('/category') }}/{{ $category->id }}">More&nbsp;&raquo;</a></p>
    @endforeach
</div>

</div>


</section>

</body>
@endsection
