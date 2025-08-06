@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Team </span>
                    <a href="/team" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/team/{{$team->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name" value="{{$team->name}}">
                        </div>

                        <div class="form-group">
                            <label for="position"> Position</label>
                            <input id="position" class="form-control" type="position" name="position" placeholder="enter price"  value="{{$team->price}}">
                        </div>

                        <div class="form-group">
                            <label for="description">description</label>
                            <input id="description" class="form-control" type="description" name="description" placeholder="enter description"  value="{{$team->description}}">
                        </div>

                        <div class="form-group">
                            <label for="photo">photo</label>
                            <input id="photo" class="form-control" type="file" name="photo" placeholder="enter photo number"  value="{{$team->phone}}">
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
