@extends('back\layouts\master')
@section('content')
                <h1 class="sub-header">
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <a type="submit" class="btn btn-primary" href="{{route('create.social')}}">Create</a>
                    </div>
                    Table
                </h1>
                <div class="table-responsive">
                    @include('back\layouts\partials\alert')
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Ad</th>
                                <th>Link</th>
                                <th>Islem</th>
                            </tr>
                        </thead>
                        <tbody>

                          @foreach($socials as $social)
                            <tr>
                                <td>{{$social->id}}</td>
                                <td>{{$social->name}}</td>
                                <td>{{$social->link}}</td>
                                <td style="width: 100px">
                                    <a href="{{route('update.social',$social->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    <a href="{{route('delete',$social->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" onclick="return confirm('Are you sure?')">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$socials->links()}}
                </div>
@endsection