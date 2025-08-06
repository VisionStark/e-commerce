@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <span >Jewellery Shop </span>

                    @if(empty($ecommerce))
                    <a href="/ecommerce/create" class="float-end btn btn-info">Add</a>
                    @endif

                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>Title</th>
                               <th>Address</th>
                               <th>Email</th>
                               <th>Phone</th>
                               <th>Action</th>

                            </tr>

                        </thead>

                        @if(!empty($ecommerce))
                        <tbody>

                        <tr>
                            <td>{{$ecommerce->name}}</td>
                            <td>{{$ecommerce->address}}</td>
                            <td>{{$ecommerce->email}}</td>
                            <td>{{$ecommerce->phone}}</td>
                            <td>

                                <form action="/ecommerce/{{$ecommerce->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/ecommerce/{{$ecommerce->id}}/edit" class="btn btn-info">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>





                        </tbody>
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
