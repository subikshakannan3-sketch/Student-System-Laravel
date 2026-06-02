<h1>Edit Student</h1>

<form action="/students/{{$student->id}}" method="POST">

    @csrf
    @method('PUT')

    <label>Name</label>
    <input type="text"
           name="name"
           value="{{$student->name}}">

    <br><br>

    <label>Email</label>
    <input type="email"
           name="email"
           value="{{$student->email}}">

    <br><br>

    <label>Age</label>
    <input type="number"
           name="age"
           value="{{$student->age}}">

    <br><br>

    <button type="submit">
        Update Student
    </button>

</form>
