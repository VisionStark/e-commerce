@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Jewellery Shop</span>
                    <a href="/shop/create" class="float-end btn btn-info">Add</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($shop as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        @if($item->image)
                                            <img src="{{ asset( $item->image) }}" width="80" alt="image">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <form action="/shop/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="/shop/{{ $item->id }}/edit" class="btn btn-info">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            @if($shop->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">No shop items available.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

