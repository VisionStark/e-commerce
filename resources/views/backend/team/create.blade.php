@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span > Team </span>
                    <a href="/team" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/team" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name">
                        </div>

                        <div class="form-group">
                            <label for="position"> Position</label>
                            <input id="position" class="form-control" type="position" name="position" placeholder="enter price">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="description" name="description" placeholder="enter description">
                        </div>

                        <div class="form-group">
                            <label for="photo"> Photo</label>
                            <input id="photo" class="form-control" type="file" name="photo" placeholder="enter image number">
                        </div>

                        <button type="submit" class="btn btn-info">Submit</button>

                    </form>


                </div>
            </div>
        </div>
    </div>

</div>

@endsection
