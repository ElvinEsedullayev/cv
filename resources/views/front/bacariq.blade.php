@extends('front\layouts\master')
@section('content')
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
            <div class="my-auto">
                <h2 class="mb-5">Bacariq</h2>

                <div class="subheading mb-3">Programlama Dili &amp; Koding</div>
                @foreach($skills as $skill)
                <ul class="list-inline list-icons">
                  
                    <li class="list-inline-{{$skill->name}}">
                        <i class="devicons devicons-{{$skill->name}}"></i>
                    </li>
                </ul>
               @endforeach
      
        </section>
@endsection