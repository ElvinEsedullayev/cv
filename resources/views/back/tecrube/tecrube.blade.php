@extends('back\layouts\master')
@section('content')
                <h1 class="sub-header">
                    <div class="btn-group pull-right" role="group" aria-label="Basic example">
                        <a type="submit" class="btn btn-primary" href="{{route('create.tecrube')}}">Create</a>
                    </div>
                    Table
                </h1>
                <div class="table-responsive">
                    @include('back\layouts\partials\alert')
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Is Ad</th>
                                <th>Is Yeri</th>
                                <th>Is Girme</th>
                                <th>Is Cixma</th>
                                <th>Is Davam</th>
                                <th>Islem</th>
                            </tr>
                        </thead>
                        <tbody>

                          @foreach($experiences as $exp)
                            <tr>
                                <td>{{$exp->id}}</td>
                                <td>{{$exp->is_adi}}</td>
                                <td>{{$exp->is_yeri}}</td>
                                <td>{{$exp->is_girme_tarix}}</td>
                                <td>{{$exp->is_cixma_tarix}}</td>
                                <td>{{$exp->is_davam}}</td>
                                <td style="width: 100px">
                                    <a href="{{route('update.tecrube',$exp->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                        <span class="fa fa-pencil"></span>
                                    </a>
                                    <a href="{{route('delete',$exp->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top" onclick="return confirm('Are you sure?')">
                                        <span class="fa fa-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$experiences->links()}}
                </div>
@endsection