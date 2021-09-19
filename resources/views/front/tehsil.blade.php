@extends('front\layouts\master')
@section('content')
    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
            <div class="my-auto">
                <h2 class="mb-5">Tehsil</h2>

         
                @foreach($educations as $edu)
                <div class="resume-item d-flex flex-column flex-md-row">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">{{$edu->uni ? $edu->uni : $edu->mekteb}}</h3>
                        <div class="subheading mb-3">{{$edu->ixtisas}}</div>
                       
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">{{$edu->girme_tarix}} - {{$edu->bitme}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
@endsection