@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @method('POST')
        <label for="title">TITLE:</label>
        <input type="text" name="title" value=""><br><br>
        <label for="category">Category Name</label>
        <input type="text" name="category" value=""><br><br>
        <label for="category">Description</label>
        <input type="text" name="description" value=""><br><br>
        <input type="submit" name="submit" value="POST">
      </form>
</div>



@endsection
