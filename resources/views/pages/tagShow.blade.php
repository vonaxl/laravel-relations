@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <h1 class="text-center">Tag: {{ $tag->title }}</h1>
    </div>
    <div class="col-12">
        <h2>Posts with this tag:[{{$tag->posts()->count()}}] </h2>
        <ul>
            @foreach ($tag->posts as $post)
                <li>{{$post->title}}</li>
            @endforeach

        </ul>
    </div>

</div>



@endsection
