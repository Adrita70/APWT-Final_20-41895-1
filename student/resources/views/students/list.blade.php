<table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Dob</th>
        </tr>
        @foreach($students as $s)
            <tr>
                <td>{{$s->name}}</td>
                <td>{{$s->id}}</td>
                <td>{{$s->dob}}</td>
            </tr>
        @endforeach
    </table>