@extends('layout')
@section('content')
<div class="user--headerbg margin-bottom-2 text-white text-center">
    <div class="site-container">
        <h1>User Listing</h1>
    </div>
</div>
<div class="site-container">
        <div class="">    
            @if (session('message'))
                <div class="alert text-green">
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert text-red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="">   
            <div class="text-right margin-bottom-1">
                <add-user-button></add-user-button>
            </div> 
            <table class="table">
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->surname }} {{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->position }}</td>
                            <td>
                                <delete-user-button :userid="{{ $user->id }}"></delete-user-button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@stop