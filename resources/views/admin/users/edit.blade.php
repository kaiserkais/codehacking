@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>
<div class="row">
    <dic class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/300'}}" alt="" class="img-responsive img-rounded">

    </dic>


    <div class="col-sm-9">

   
    {!! Form::model($user, (['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id] ,'files'=>true])) !!}
    
    <div class="form-group">
        
        {!! Form::label('name', 'Name:') !!}
        
        {!! Form::text('name', null, ["class"=>"form-control"]) !!}
        
        {!! Form::label('email', 'Email:') !!}
        
        {!! Form::email('email', null, ["class"=>"form-control"]) !!}

        {!! Form::label('role_id', 'Role:') !!}
        
        {!! Form::select('role_id', $roles, null, ["class"=>"form-control"]) !!}

        {!! Form::label('is_active', 'Status:') !!}
        
        {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ["class"=>"form-control"]) !!}

        {!! Form::label('photo_id', 'File:') !!}
        {!! Form::file('photo_id', null ,["class"=>"form-control"] ) !!}
        

        {!! Form::label('password', 'Password:') !!}

        {!! Form::password('password', ["class"=>"form-control"]) !!}
        
        
        
    </div>

    <div class="form-group">
        
        {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
        
    </div>

    
    {!! Form::close() !!}

    <div class="from-control">

        
        
        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
        
        <div class="form-group">
            
            {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
            
        </div>
        {!! Form::close() !!}
        
        
    </div>

</div>
</div>
@include('includes.form_error')

   
    
    

@stop