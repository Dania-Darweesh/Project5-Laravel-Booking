@extends('admin/includes/master')

@section('content')


<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can update meals here </h4>
                    <!-- <div class="add-product">
                        <a href="/admin/meals/create">add Meal</a>
                    </div> -->
                    <div class="asset-inner">
                        <form action="{{route('meals.update',$mealEdit->id)}}" method="Post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Meal Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{$mealEdit->name}}">

                            </div>
                            <div class=" mb-3">
                                <label for="exampleInputPassword1" class="form-label">Meal Description</label>
                                <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{$mealEdit->description}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Meal Price</label>
                                <input type="number" class="form-control" name="price" id="exampleInputPassword1" value="{{$mealEdit->price}}">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Movie Image</label>
                                <input class="form-control" type="file" name="meal_img" id="formFile" value="{{$mealEdit->meal_img}}">
                            </div>
                            <br> <br>
                            <button type="submit" class="btn btn-primary btnSubmit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection