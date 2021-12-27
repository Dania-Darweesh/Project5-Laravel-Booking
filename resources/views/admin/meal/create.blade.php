@extends('admin/includes/master')

@section('content')

<div class="product-status mg-b-15">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can add meal here</h4>
                    <div class="add-product">
                        <a href="/admin/meals">Show Meals</a>
                    </div>


                    <form method="post" action="{{route('meals.store')}}" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="name" class="form-label">Meal name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="-description" class="form-label">Meal Description</label>
                                    <input name="description" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="price" class="form-label">Price</label>
                                    <input name="price" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Meal Image</label>
                                    <input class="form-control" type="file" name="meal_img" id="formFile">
                                </div>

                            </div>
                        </div>
                        <br> <br>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection