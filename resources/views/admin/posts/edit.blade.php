@extends('layouts.master')
@section('title','Edit Post')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Post
                <a href="{{ url('admin/posts') }}" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
                
            @endif
           <form action="{{ url('admin/update-post/'.$posts->id) }}" method="POST">
            @csrf
            @method('PUT')
             <div class="mb-3">
                <label for="">Category</label>
              <select name="category_id" required id="" class="form-control">
                <option value="">----Category Select----</option>
                    @foreach ($category as $item)
                    <option value="{{ $item->id }}" {{ $posts->category_id == $item->id ? 'selected': ''}}>{{ $item->name }}</option>
                    @endforeach
                </select>
             </div>
             <div class="mb-3">
                <label>Post name</label>
                <input type="text" name="name" value="{{ $posts->name }}" class="form-control"/>
            </div>
            <div class="mb-3">
                <label>Slug</label>
                <input type="text" name="slug" value="{{ $posts->slug }}" class="form-control"/>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" rows="5" id ="mySummernote" class="form-control">{{ $posts->description }}</textarea>
            </div>
            <div class="mb-3">
                <label>Youtube Iframe Link</label>
                <textarea name="yt_iframe" rows="5" class="form-control">{{ $posts->yt_iframe }}</textarea>
            </div>
            <h6> SEO Tags</h6>
            <div class="mb-3">
                <label>Meta title</label>
                <input type="text" name="meta_title" value="{{ $posts->meta_title }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Meta Description</label>
                <textarea name="meta_description" rows="3" class="form-control">{{ $posts->meta_description }}</textarea>
            </div>
            <div class="mb-3">
                <label>Meta Keywords</label>
                <textarea name="meta_keyword" rows="3" class="form-control">{{ $posts->meta_keyword }}</textarea>
            </div>
            <h6> Status Mood</h6>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status" {{ $posts->status == '1' ? 'checked':'' }}>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end"> Update Post</button>
                    </div>
                </div>
            </div>
           </form>
        </div>
    </div>
</div>
@endsection