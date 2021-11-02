@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>{{$blog->title}}</h3>
            <p class="lead">{{$blog->content}}</p>
        </div>
        <a href="{{route('edit_blog_path', ['blog'=>$blog->id])}}">Edit</a>
    </div>

    <a href="{{route('blogs_path')}}">Back</a>


@endsection