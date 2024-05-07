@extends('layouts.app')

@section('content')
<section class="comics">
    <div class="container">
        
        <div class="row row-cols-6">
            @foreach ($comics as $comic) 
                <div class="col">
                    <div class="card d-flex flex-column">
                        <img  src="{{$comic['thumb']}}" alt="image describing the following comic {{$comic['title']}}">
                        <div class="title d-flex align-items-center">{{$comic['title']}}</div>
    
                    </div>
                </div>
            @endforeach
    
        </div>
    </div>

</section>
@endsection