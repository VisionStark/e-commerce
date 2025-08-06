@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span >Jewellery Shop </span>
                    <a href="/about1" class="float-end btn btn-info">Back</a>

                </div>

                <div class="card-body">

                    <form action="/about1/{{$about1->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Team Name</label>
                            <input id="name" class="form-control" type="name" name="name" placeholder="enter name" value="{{$about1->name}}">
                        </div>

                        <div class="form-group">
                            <label for="position">Position</label>
                            <input id="position" class="form-control" type="position" name="position" placeholder="enter position"  value="{{$about1->position}}">
                        </div>

                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            <input id="short_description" class="form-control" type="short_description" name="short_description" placeholder="enter short_description"  value="{{$about1->short_description}}">
                        </div>

                        <div class="form-group">
                            <label for="team_desciption">Team Description</label>
                            <input id="team_desciption" class="form-control" type="team_desciption" name="team_desciption" placeholder="enter team_desciption number"  value="{{$about1->team_desciption}}">
                        </div>

                         <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="description" name="description" placeholder="enter description number"  value="{{$about1->team_desciption}}">
                        </div>

                       <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="image1">Image 1</label>
                            <input id="image1" class="form-control" type="text" name="image1" placeholder="enter image1"  value="{{$about1->image1}}">
                        </div>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group">
                            <label for="image2">Image 2</label>
                            <input id="image2" class="form-control" type="text" name="image2" placeholder="enter image2"  value="{{$about1->image2}}">
                        </div>
                       </div>
                       </div>

                        <button type="submit" class="btn btn-info">Update</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
