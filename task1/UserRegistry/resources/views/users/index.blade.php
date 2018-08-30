@extends('layout')
@section('content')
<h1>User Listing</h1>
<table>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->surname }} {{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->position }}</td>
                <td>
                    <form action="{{url('users', [$user->id])}}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-sm btn-danger"><b>X</b></button>    
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop