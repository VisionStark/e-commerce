@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <span >Jewellery Shop </span>

                    @if(empty($about1))
                    <a href="/about1/create" class="float-end btn btn-info">Add</a>
                    @endif

                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>Title</th>
                               <th>Short Description</th>
                               <th>Position</th>
                               <th>Description</th>
                               <th>Action</th>

                            </tr>

                        </thead>

                        @if(!empty($about1))
                        <tbody>

                        <tr>
                            <td>{{$about1->name}}</td>
                            <td>{{$about1->short_description}}</td>
                            <td>{{$about1->position}}</td>
                            <td>{{$about1->description}}</td>
                            <td>

                                <form action="/about1/{{$about1->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/about1/{{$about1->id}}/edit" class="btn btn-info">Edit</a>
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
