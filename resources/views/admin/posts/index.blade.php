@extends('layouts.admin')




@section('content')
    <h1>posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>User</th>
                <th>Category</th>
                
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>updated</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
            @foreach($posts as $post)
            <tr>
                <th>{{$post->id}}</th>
                <th><img height="50" width="50" src="{{$post->photo ? $post->photo->file : 'no picture'}}" alt=""></th>
                <th>{{$post->user->name}}</th>
                <th>{{$post->category ? $post->category->name : 'uncategorize'}}</th>

                <th>{{$post->title}}</th>
                <th>{{$post->body}}</th>
                <th>{{$post->created_at->diffForHumans()}}</th>
                <th>{{$post->updated_at->diffForHumans()}}</th>
            </tr> 
            @endforeach
            @endif
        </tbody>
            
    </table>

@stop