@extends('layouts.app')
@section('content')

    <section class="comic">
        <div class="container d-flex">
            <div class="text">
                <h2>{{$comic['title']}}</h2>
                <div class="availability d-flex justify-content-between">
                    <div class="left d-flex justify-content-between">
                        <div>U.S. Price: {{$comic['price']}}</div>
                        <div>AVAILABLE</div>
                    </div>
                    <div>
                        <select class="border-0">
                            <option value="" selected disabled hidden>Check Availability</option>
                            <option value="">New</option>
                            <option value="">Used</option>
                        </select>
                    </div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="adv">
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">

            </div>
        </div>
    </section>
    
@endsection
