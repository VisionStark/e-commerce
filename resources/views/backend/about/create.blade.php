@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >about </span>
                    <a href="/about1" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/about1" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Team Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name">
                        </div>

                        <div class="form-group">
                            <label for="position">Position</label>
                            <input id="position" class="form-control" type="position" name="position" placeholder="enter position">
                        </div>

                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            <input id="short_description" class="form-control" type="short_description" name="short_description" placeholder="enter short description">
                        </div>

                        <div class="form-group">
                            <label for="team_desciption">Team description</label>
                            <input id="team_desciption" class="form-control" type="team_desciption" name="team_desciption" placeholder="enter team_description">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="description" name="description" placeholder="enter description">

                        </div>

                       <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="image1">Image 1</label>
                            <input id="image1" class="form-control" type="file" name="image1" placeholder="enter image1">
                        </div>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="image2">Image 2</label>
                            <input id="image2" class="form-control" type="file" name="image2" placeholder="enter image2">
                        </div>
                       </div>
                       </div>

                        <button type="submit" class="btn btn-info">Submit</button>

                    </form>


                </div>
            </div>
        </div>
    </div>

</div>

@endsection
