@extends('admin/includes/master')
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Users List</h4>

                        <div class="add-product">
                            <a href="{{route('users.create')}}">Add User</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>Id</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>role</th>
                                    <th>Date created</th>
                                    <th>Date updated</th>

                                </tr>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <a class="">{{$user->role->name}}</a>
                                    </td>

                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>

                                    <td>
                                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                                        <a href="{{route('users.edit',$user->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                            @csrf
                                            @method('Delete')
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
