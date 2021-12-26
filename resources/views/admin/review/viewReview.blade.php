@extends('admin/includes/master')
@section('content')

        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">


                            <div class="asset-inner">
                                <table>
                                    <tr>

                                        <th>User name</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Setting</th>
                                    </tr>
									@foreach ($review as $item)
                                    <tr>
                                        <td>{{$item->user->name}}</td>
                                        <td> {{$item->review_title}}</td>
										<td> {{$item->review_body}}</td>

                                        <td>
                                            {{-- <a href="{{route('category.destroy', $item->id)}}"> <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a> --}}

                                            <form method="post" action="{{route('review.destroy', $item->id)}}">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">

                                                <input type="submit" value="DELETE" class="btn follow-btn">
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
