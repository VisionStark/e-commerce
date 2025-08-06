@extends('backend.app')

@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span>Team</span>
                    <a href="/team/create" class="float-end btn btn-info">Add</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Position</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($team as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->position}}</td>
                                    <td>
                                        @if($item->photo)
                                            <img src="{{ asset( $item->photo) }}" width="80" alt="photo">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <form action="/team/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="/team/{{ $item->id }}/edit" class="btn btn-info">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            @if($team->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">No team items available.</td>
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

