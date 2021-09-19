@extends('back\layouts\master')
@section('content')

                <h1 class="sub-header">Form</h1>
                <form action="{{route('create')}}" method="POST">
                    @include('back\layouts\partials\alert')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Is Ad</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Is Ad" name="is_adi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Is Yeri</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Is Yeri" name="is_yeri">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Is Girme</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Is Girme Tarix" name="is_girme_tarix">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Is Cixma</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Is Cixma Tarix" name="is_cixma_tarix">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Is Davam</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Is Davam" name="is_davam">
                            </div>
                        </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Is Haqqinda</label>
                                <textarea type="text" class="form-control" id="address" placeholder="Is Haqqimda" name="is_aciqlama"></textarea>
                            </div>
                        </div>
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
@endsection