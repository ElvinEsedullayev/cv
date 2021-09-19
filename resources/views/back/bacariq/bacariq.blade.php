@extends('back\layouts\master')
@section('content')
                <h1 class="sub-header">
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <a type="submit" class="btn btn-primary" href="{{route('create.bacariq')}}">Create</a>
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
                                <th>Created At</th>
                                <th>Islem</th>
                            </tr>
                        </thead>
                        <tbody>

                          @foreach($skills as $skill)
                            <tr>
                                <td>{{$skill->id}}</td>
                                <td>{{$skill->name}}</td>
                                <td>{{$skill->created_at}}</td>
                                <td style="width: 100px">
                                    <a href="{{route('update.bacariq',$skill->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    <a href="{{route('delete',$skill->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" onclick="return confirm('Are you sure?')">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$skills->links()}}
                </div>
@endsection