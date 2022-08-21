@extends('layouts.app')
@section('title',"$category->meta_title")
@section('meta_description',"$category->meta_description")
@section('meta_keyword',"$category->meta_keyword")
@section('content')

    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="category-heading">
                        <h4> {{ $category->name }} </h4>
                    </div>
                    @forelse ($post as $item)
                    <div class="card card-shadow mt-4"> 
                        <div class="card-body">
                            <a href="{{ url('tutorial/'.$category->slug.'/'.$item->slug) }}" class="text-decoration-none">
                                <h4 class="post-heading">{{ $item->name }}</h4>
                            </a>
                            <h6>
                                Posted On: {{ $item->created_at->format('d-m-y') }}
                                <span class="ms-3"> Posted By: {{ $item->user->name }} </span>
                               
                            </h6>
                            
                        </div>
                    </div>

                    @empty
                    <div class="card card-shadow mt-4"> 
                        <div class="card-body">
                            <h4>No post available</h4>
                        </div>
                    </div>
                    @endforelse
                    <div class="your-paginate mt-4">
                        {{ $post->links() }}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border p-2">
                        <h4>Advertising Area</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection