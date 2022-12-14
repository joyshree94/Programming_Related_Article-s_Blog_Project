<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
class FrontendController extends Controller
{
    public function index()
    {    $setting=Setting::find(1);
         $category=Category::where('status','0')->get();
         $latestposts=Post::where('status','0')->orderBy('created_at','DESC')->get()->take(12);
        return view('frontend.index',compact('category','latestposts','setting'));
    }
    public function viewCategoryPost(string $category_slug)
    {
        $category=Category::where('slug',$category_slug)->where('status','0')->first();
        if($category)
        {
            $post=Post::where('category_id',$category->id)->where('status','0')->paginate(2);
            return view('frontend.posts.index',compact('post','category'));
        }
        else
        {
            return redirect('/');
        }
    }
    public function viewPost(string $category_slug, string $post_slug)
    {
        $category=Category::where('slug',$category_slug)->where('status','0')->first();
        if($category)
        {
            $post=Post::where('category_id',$category->id)->where('slug',$post_slug)->where('status','0')->first();
            $latestposts=Post::where('category_id',$category->id)->where('status','0')->orderBy('created_at','DESC')->get()->take(12);
            return view('frontend.posts.view',compact('post','latestposts'));
        }
        else
        {
            return redirect('/');
        }
    }
}
