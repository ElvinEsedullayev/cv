@extends('back\layouts\master')
@section('content')

                <h1 class="sub-header">Form</h1>
                <form action="{{route('update',$maraq->id)}}" method="POST">
                    @include('back\layouts\partials\alert')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Aciqlama</label>
                                <textarea type="text" class="form-control" id="address" placeholder="Aciqlama" name="description">{{old('description',$maraq->description)}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ad</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ad" name="name" value="{{old('name',$maraq->name)}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
@endsection