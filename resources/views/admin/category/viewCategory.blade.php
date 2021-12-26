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
                                            <a href="{{route('category.edit', $item->id)}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {{-- <a href="{{route('category.destroy', $item->id)}}"> <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a> --}}
                                            
                                            <form method="post" action="{{route('category.destroy', $item->id)}}">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">

                                                <input type="submit" value="DELETE" class="btn follow-btn">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                           
                                    
                                    
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

   

    @endsection