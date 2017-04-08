@extends('layouts.admin')


@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Date Created</th>
            <th>Date Updated</th>


        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user )
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="40" src="{{$user->photo? $user->photo->path : '/images/1491553644shush.jpg'}}" alt=""> </td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}"> {{$user->name}} </a></td>
                    <td>{{$user->email}}</td>
                    <th>{{$user->role ? $user->role->name : 'No Name'}}</th>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>

                </tr>

            @endforeach

        @endif
        </tbody>
    </table>


@stop
