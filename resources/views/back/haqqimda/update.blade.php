@extends('back\layouts\master')
@section('content')

                <h1 class="sub-header">Form</h1>
                <form action="{{route('update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('back\layouts\partials\alert')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ad</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{old('name',$user->name)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Soyad</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Soyad" name="surname" value="{{old('surname',$user->surname)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{old('email',$user->email)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sifre</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sifre" name="password" value="{{old('password',$user->password)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adres</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Adres" name="adres" value="{{old('adres',$user->detay->adres)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefon" name="phone" value="{{old('phone',$user->detay->phone)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Haqqimda</label>
                                <textarea type="text" class="form-control" id="address" placeholder="Address" name="about">{{old('about',$user->detay->about)}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                @if($user->detay->sekil !=null)
                                <img src="{{asset('uploads/users/'.$user->detay->sekil)}}" style="width: 100px; height: 120px;" alt="">
                                @endif
                                <label for="address">Sekil</label>
                                <input type="file" class="form-control" id="address" placeholder="Address" name="sekil" value="{{old('about',$user->detay->sekil)}}">
                            </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                   
                </form>
@endsection