@extends('front\layouts\master')
@section('content')
   <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
            <div class="my-auto">
              @foreach($maraqlar as $maraq)
                <h2 class="mb-5">{{$maraq->name}}</h2>
                <p>{{$maraq->description}}
                </p>
                @endforeach
            </div>
        </section>
@endsection