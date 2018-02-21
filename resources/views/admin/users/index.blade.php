@extends('layouts.admin')


@section('content')
@if(Session::has('deleted_user'))
    <p class="bg-danger" >{{session('deleted_user')}}</p>

@endif
<h1>users</h1>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Active</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><img width="50" height="50" src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/300'}}" alt="" class="img-responsive img-rounded"></td>
            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach
        
    @endif
    </tbody>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{$users->render()}}
        </div>
    </div>

@stop