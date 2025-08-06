@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Jewellery Shop </span>
                    <a href="/shop" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/shop/{{$shop->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name" value="{{$shop->name}}">
                        </div>

                        <div class="form-group">
                            <label for="price"> Price</label>
                            <input id="price" class="form-control" type="price" name="price" placeholder="enter price"  value="{{$shop->price}}">
                        </div>

                        <div class="form-group">
                            <label for="description">description</label>
                            <input id="description" class="form-control" type="description" name="description" placeholder="enter description"  value="{{$shop->description}}">
                        </div>

                        <div class="form-group">
                            <label for="image">image</label>
                            <input id="image" class="form-control" type="file" name="image" placeholder="enter image number"  value="{{$shop->phone}}">
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
