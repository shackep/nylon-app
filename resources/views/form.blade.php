<h1>Add Person</h1>
<form action="{{ route('person.store') }}" method="post">
    @csrf
    <input type="text" name="fname" placeholder="First Name">
    <input type="text" name="lname" placeholder="Last Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="ssn" placeholder="Social Security Number">
    <button type="submit">Add</button>
</form>