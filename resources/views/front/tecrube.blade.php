@extends('front\layouts\master')
@section('content')
   <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
            <div class="my-auto">
                <h2 class="mb-5">Is Tecrube</h2>
              @foreach($experiences as $experience)
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">{{$experience->is_adi}}</h3>
                        <div class="subheading mb-3">{{$experience->is_yeri}}</div>
                        <p>{{$experience->is_aciqlama}}</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">{{$experience->is_girme_tarix}} - {{$experience->is_cixma_tarix}}  {{$experience->is_davam}}</span>
                    </div>
                </div>
                @endforeach
            </div>

        </section>
@endsection