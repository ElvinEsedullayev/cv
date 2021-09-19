@extends('back\layouts\master')
@section('content')

                <h1 class="sub-header">Form</h1>
                <form action="{{route('update',$social->id)}}" method="POST">
                    @include('back\layouts\partials\alert')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ad" name="name" value="{{old('name',$social->name)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Link" name="link" value="{{old('link',$social->link)}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
@endsection