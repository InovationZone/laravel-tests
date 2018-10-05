<h1>Posts</h1>

<ul>
    <!--list all posts-->
    @foreach($posts as $post)
        <li>{{$post->name}}</li>
    @endforeach
</ul>