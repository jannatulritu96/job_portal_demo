<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Post us';
        $posts= new Post();
        $render=[];
        $posts= $posts->paginate(10);
        $posts= $posts->appends($render);
        $data['posts'] = $posts;
        return view('admin.post.index',$data);
    }

    public function create()
    {
        $data['title'] = 'Create post us form';
        return view('admin.post.create',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'salary'=>'required',
            'address'=>'required',
        ]);
        $post = new Post();
        $post->title= $request->title;
        $post->short_description= $request->short_description;
        $post->description= $request->description;
        $post->salary= $request->salary;
        $post->address= $request->address;
        $post->save();
        session()->flash('success','Information stored successfully');
        return redirect()->route('post.index');
    }

    


    public function edit($id)
    {
        $data['title'] = 'Edit post form';
        $data['post'] = post::findOrFail($id);
        return view('admin.post.edit',$data);
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'salary'=>'required',
            'address'=>'required'
        ]);
        $post = post::findOrfail($id);
        $post->title= $request->title;
        $post->short_description= $request->short_description;
        $post->description= $request->description;
        $post->salary= $request->salary;
        $post->address= $request->address;

        $post->save();
        session()->flash('success','Information updated successfully');
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        post::findOrFail($id)->delete();
        session()->flash('success','Slider deleted successfully');
        return redirect()->route('post.index');
    }
}
