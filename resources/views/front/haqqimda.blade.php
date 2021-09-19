@extends('front\layouts\master')
@section('content')
<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">{{$users->name}}
            <span class="text-primary">{{$users->surname}}</span>
          </h1>
          <div class="subheading mb-5">{{$users->detay->adres}} · {{$users->detay->phone}} ·
            <a href="mailto:name@email.com">{{$users->email}}</a>
          </div>
          <p class="mb-5">{{$users->detay->about}}</p>
          <ul class="list-inline list-social-icons mb-0">
            @foreach($socials as $social)
            <li class="list-inline-item">
              <a href="{{$social->link}}">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-{{$social->name}} fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            @endforeach
    
      
          </ul>
        </div>
      </section>
@endsection