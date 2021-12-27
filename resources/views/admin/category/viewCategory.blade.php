@extends('admin/includes/master')
@section('content')



        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Category</h4>
                            <div class="add-product">
                                <a href="{{route('category.create')}}">Add</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>

                                        <th>Image</th>
                                        <th>Category Name</th>

                                        <th>Setting</th>
                                    </tr>

                                    @foreach ($category as $item)
                                    <tr>
                                        <td><img src="{{asset($item->category_img)}}" alt=""/></td>
                                        <td> {{$item->category_name}}</td>

                                        <td>
                                            <form action="{{route('categories.destroy',$item->id)}}" method="post">
                                                <a href="{{route('categories.edit',$item->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                                @csrf
                                                @method('Delete')
                                                <button data-toggle="tooltip" type="submit" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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

    </div>



    @endsection
