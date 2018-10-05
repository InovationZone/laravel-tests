<?php

namespace App\Http\Controllers;

//was added the Post model
use App\Console\Commands\PostCommand;
use App\Models\Post;
use App\Jobs\WriteXFileJob;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use DispatchesJobs;
    private $post;

    //Model passed by paramater in constructor
    public function __construct(Post $post)
    {
        $this->post = $post;

    }

    public function index()
    {
        $posts = $this->post->all();
        //return index
        return view('post.index')->with('posts',$posts);
    }


    //send params to post command
    public function create(){
        $data['name'] = "Post Command";
        $data['content'] = "description";

        $this->dispatch(
            //execute a Command that insert a new post
            //new PostCommand($this->post,$data)
            //call a new job
            new WriteXFileJob()
        );

        return redirect('posts');
    }
}
