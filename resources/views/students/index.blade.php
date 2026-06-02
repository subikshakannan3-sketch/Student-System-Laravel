<h1>Students List</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    </tr>


@foreach ($students as $student)
<tr>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->age}}</td>
</tr>

<td>
    <a href="/students/{{$student->id}}/edit">
        Edit
    </a>
</td>

 <td>
        <form action="/students/{{$student->id}}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit">
                Delete
            </button>

        </form>
    </td>
</tr>


@endforeach

</table>
