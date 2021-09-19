@extends('back\layouts\master')
@section('content')

                <h1 class="sub-header">Form</h1>
                <form action="{{route('update',$tehsil->id)}}" method="POST">
                    @include('back\layouts\partials\alert')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mekteb</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mekteb" name="mekteb" value="{{old('mekteb',$tehsil->mekteb)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Universitet</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Universitet" name="uni" value="{{old('uni',$tehsil->uni)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ixtisas</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ixtisas" name="ixtisas" value="{{old('ixtisas',$tehsil->ixtisas)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Girme Tarix</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Girme Tarix" name="girme_tarix" value="{{old('girme_tarix',$tehsil->girme_tarix)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bitme Tarix</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bitme Tarix" name="bitme" value="{{old('bitme',$tehsil->bitme)}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                         
                </form>
@endsection