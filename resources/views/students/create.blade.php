<h1>Add Student</h1>

<form action="/students" method="POST">

    @csrf

    <label>Name</label>
    <input type="text" name="name">

    <br><br>

    <label>Email</label>
    <input type="email" name="email">

    <br><br>

    <label>Age</label>
    <input type="integer" name="age">

    <br><br>

    <button type="submit">
        Save Student
    </button>

</form>
