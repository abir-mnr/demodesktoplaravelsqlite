@extends('layouts.app')
@section('content')
<h1>Hellow this is index</h1>


@foreach($blogs as $blog)
    <div class="col-md-6">
        <a href={{route('create_blog_path')}}>Create</a>
        <div class="card">
            <div class="card-header">
                <a href="{{route('blog_path',['blog'=>$blog->id])}}">{{ $blog->title }}</a>
            </div>
            <div class="class-body">
                {{ $blog->content}}
            </div>
        </div>
    </div>

@endforeach

@endsection