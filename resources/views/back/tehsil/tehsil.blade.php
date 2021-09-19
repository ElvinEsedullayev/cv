@extends('back\layouts\master')
@section('content')
                <h1 class="sub-header">
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <a type="submit" class="btn btn-primary" href="{{route('create.tehsil')}}">Create</a>
                    </div>
                    Table
                </h1>
                <div class="table-responsive">
                    @include('back\layouts\partials\alert')
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Mekteb</th>
                                <th>Universitet</th>
                                <th>Ixtisas</th>
                                <th>Girme Tarix</th>
                                <th>Bitme Tarix</th>
                                <th>Islem</th>
                            </tr>
                        </thead>
                        <tbody>

                          @foreach($tehsiller as $tehsil)
                            <tr>
                                <td>{{$tehsil->id}}</td>
                                <td>{{$tehsil->mekteb}}</td>
                                <td>{{$tehsil->uni}}</td>
                                <td>{{$tehsil->ixtisas}}</td>
                                <td>{{$tehsil->girme_tarix}}</td>
                                <td>{{$tehsil->bitme}}</td>
                                <td style="width: 100px">
                                    <a href="{{route('update.tehsil',$tehsil->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    <a href="{{route('delete',$tehsil->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" onclick="return confirm('Are you sure?')">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$tehsiller->links()}}
                </div>
@endsection