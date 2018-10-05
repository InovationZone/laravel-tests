<?php

namespace App\Console\Commands;

//use Post
use App\Models\Post;
use Illuminate\Console\Command;
use PharIo\Manifest\Application;

class PostCommand
    //extends Command -error because my class are modified
{
    //create atributtes
    private $data;
    private $post;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    //passsed parameters to the constructor
    public function __construct( Post $post ,  array $data)
    {
        //parent::__construct();
        $this->data = $data;
        $this->post = $post;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    //insert into post's table.
    public function handle()
    {
        $post = $this->post;
        $post->fill($this->data);
        $post->save();
    }
}
