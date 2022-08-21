@extends('layouts.master')
@section('title','Add Post')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Post
                <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Post</a>
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
           <form action="{{ url('admin/add-post') }}" method="POST">
            @csrf
             <div class="mb-3">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
             </div>
             <div class="mb-3">
                <label>Post name</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="mb-3">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="">Description</label>
                <textarea name="description"  rows="5" id ="mySummernote" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Youtube Iframe Link</label>
                <textarea name="yt_iframe" rows="5" class="form-control"></textarea>
            </div>
            <h6> SEO Tags</h6>
            <div class="mb-3">
                <label>Meta title</label>
                <input type="text" name="meta_title" class="form-control">
            </div>
            <div class="mb-3">
                <label>Meta Description</label>
                <textarea name="meta_description" rows="3" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Meta Keywords</label>
                <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
            </div>
            <h6> Status Mood</h6>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end"> Save Post</button>
                    </div>
                </div>
            </div>
           </form>
        </div>
    </div>
</div>
@endsection