<h1>User Listing</h1>
<table>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->surname }} {{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->position }}</td>
                <td>X</td>
            </tr>
        @endforeach
    </tbody>
</table>