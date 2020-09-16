<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Category;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Vote;

class blogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index(){
        $this->data['blogs'] = Blog::all();
        $this->data['categories'] = Category::all();
        return view('blog',$this->data);
    }
    public function new(){
        return view('newblog');
    }
    public function publish(Request $request){
        $cover = $request->file('image');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
        $title = $request->input('title');
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->slug = str_replace(' ', '-', $title);
        $blog->description = $request->input('content');
        $blog->mime = $cover->getClientMimeType();
        $blog->original_filename = $cover->getClientOriginalName();
        $blog->filename = $cover->getFilename().'.'.$extension;
        $blog->user_name = Auth::user()->name;
        $blog->featured = $request->input('featured');
        $blog->category_id = $request->input('select');
        $blog->save();
        return redirect()->route('blog')
        ->with('success','Book added successfully...');
    }
    public function ajaxRequestPost(Request $request){
        $category = new Category();
        $category->category_name = $request->input('category');
        $category->save();
        return response()->json(['success'=>'Category Added Successfully.']);
    }
    public function getCategory(){
        $category['data'] = Category::all();
        return response()->json($category);
    }
    public function blogcategories(Request $request){
        $url = $request->path();
        $slug = substr($url, 5);
        $this->data['blog'] = Blog::where('slug', $slug)->with('comments')->get();
        $this->data['categories'] = Category::all();
        return view('singleblog',$this->data);
    }
    public function comment(Request $request){
        $this->validate($request, [
            'article_id' =>  'required',
            'comment'  =>  'required',
            'name'     =>  'required',
        ]);
        $data = new Comment;
        $data->blog_id = $request->input('article_id');
        $data->comment = $request->input('comment');
        $data->name = $request->input('name');
        $data->save();
        return back();
    }
    public function upvote(Request $request){
        $slug = $request['url'];
        $id = auth()->user()->id;
        $blog_id = Blog::where('slug', $slug)->get('id');
        $currentBlogId = $blog_id[0]['id'];
        $isUpvoted = Vote::where('user_id',$id)->where('blog_id',$currentBlogId)->get();
        if(count($isUpvoted) < 1){
            $data = new Vote;
            $data->upvote = 1;
            $data->blog_id = $currentBlogId;
            $data->user_id = $id;
            $data->save();
            return response()->json(['success'=>'Upvoted Successfully.']);
        }else{
            return response()->json(['error'=>'Cant upvote more than once']);
        };
    }
    public function downvote(Request $request){
        $slug = $request['url'];
        $id = auth()->user()->id;
        $blog_id = Blog::where('slug', $slug)->get('id');
        $currentBlogId = $blog_id[0]['id'];
        $isUpvoted = Vote::where('user_id',$id)->where('blog_id',$currentBlogId)->where('downvote', '!=', Null)->get();
        if(count($isUpvoted) < 1){
            $data = new Vote;
            $data->downvote = 1;
            $data->blog_id = $currentBlogId;
            $data->user_id = $id;
            $data->save();
            return response()->json(['success'=>'Downvote Successfully.']);
        }else{
            return response()->json(['error'=>'Cant downvote more than once']);
        };
    }
    public function displsyCategory(Request $request){
        $url = $request->path();
        $category_name = substr($url, 9);
        $category = Category::where('category_name', $category_name)->get('id');
        $category_id = $category[0]['id'];
        $this->data['blogCategory'] = Blog::where('category_id',$category_id)->get();
        $this->data['categories'] = Category::all();
        return view('blogCategory',$this->data);
    }
}
