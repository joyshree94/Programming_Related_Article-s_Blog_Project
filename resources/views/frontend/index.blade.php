@extends('layouts.app')
@section('title',"$setting->meta_title")
@section('meta_description',"$setting->meta_description")
@section('meta_keyword',"$setting->meta_keyword")
@section('content')
    
<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme ">
                    @foreach ($category as $category_item)
                    <div class="item">
                        <a href="{{ url('tutorial/'.$category_item->slug) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('uploads/category/'.$category_item->image) }}" alt="image">
                            <div class="card-body text-center item">
                                <h5 class="text-dark">{{ $category_item->name }}</h5>
                            </div>
                        </div>
                        </a>
                     
                    </div>
                    @endforeach
                </div>
                
            </div>

        </div>
    </div>
</div>
<div class="py-2 bg-gray">
    <div class="container">
        <div class="border text-center p-3 Advertise">
            <h3> Advertise Here </h3>
        </div>
    </div>
</div>
<div class="web">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Web It</h4>
                    <div class="underline"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All categories List</h4>
                <div class="underline"></div>
            </div>
            @foreach ($category as $allcategory )
                <div class="col-md-3 mb-3">
                    
                    <div class="card card-body cate-name">
                        <a href="{{ url('tutorial/'.$allcategory->slug) }}" class="text-decoration-none">
                            <h4 class="text-dark mb-0">{{ $allcategory->name }}</h4>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 latest-post">
                <h4>Latest Posts List</h4>
                <div class="underline"></div>
            </div>
            <div class="col-md-8  latest-post-date">
                @foreach ($latestposts as $latest_post_item )
                    <div class="card card-body bg-gray shadow mb-3">
                        <a href="{{ url('tutorial/'.$latest_post_item->category->slug .'/'.$latest_post_item->slug) }}" class="text-decoration-none">
                            <h4 class="text-dark mb-0">{{ $latest_post_item->name }}</h4>
                        </a></br>
                        <h6>Posted On:{{ $latest_post_item->created_at->format('d-m-y') }}</h6>
                    </div>
            @endforeach
            </div>
            <div class="col-md-4">
                <div class="border text-center p-3">
                    <h3> Advertise Here </h3>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection