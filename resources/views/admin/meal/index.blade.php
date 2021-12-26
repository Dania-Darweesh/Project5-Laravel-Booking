 @extends('admin/includes/master')
 @section('content')

 <div class="product-status mg-b-15">
     <div class="container-fluid">

         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="product-status-wrap">
                     <h4>Meals List</h4>
                     <div class="add-product">
                         <a href="/admin/meals/create">Add Meal</a>
                     </div>
                     <div class="asset-inner">
                         <table class="table table-striped m-auto">
                             <thead>
                                 <tr>
                                     <th>Meal name</th>
                                     <th>Meal Description</th>
                                     <th>Meal Price</th>
                                     <th>Meal Image</th>
                                 </tr>
                             </thead>
                             @foreach($meals as $meal)
                             <tr>
                                 <td> {{$meal-> name}}</td>
                                 <td> {{$meal-> description}}</td>
                                 <td> {{$meal-> price}}</td>
                                 <td> <img style="width:80px; height:80px;" src='{{asset($meal-> meal_img)}}'></td>
                                 <td>
                                     <form action="{{route('meals.destroy',$meal->id)}}" method="post">
                                         <a href="{{route('meals.edit',$meal->id)}}" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

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

         @endsection