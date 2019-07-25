@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="modal-body">
                    <form method="post" class="form-horizontal" action="{{ route('post.update',$post) }}" enctype="multipart/form-data">
                    @csrf
{{--                        {{ method_field('PUT') }}--}}
                            @include('admin.layouts._messages')

                    <div class="panel-heading p-sm-4">
                        <h3 class="panel-title text-primary" style="font-size: 25px;">post us Form</h3>
                    </div>

                    <div class="form-group">
                        <label for="text" class="control-label col-md-2">Title</label>
                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label col-md-2">Short description</label>
                        <div class="col-md-10">
                            <input type="text" name="short_description" class="form-control" placeholder="Short description" value="{{ $post->short_description }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-md-2">Description</label>
                        <div class="col-md-10">
                            <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $post->description }}">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="salary" class="control-label col-md-2">Salary</label>
                    <div class="col-md-10">
                        <input type="text" name="salary" class="form-control" placeholder="Salary" value="{{ $post->salary }}">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="address" class="control-label col-md-2">Address</label>
                    <div class="col-md-10">
                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $post->address }}">
                    </div>
                    </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary" id="createUser">Update post</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection