<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://unpkg.com/sakura.css/css/sakura.css" type="text/css">
    <style>label { display: inline-block;} body{ max-width: 48em;} </style>
<h1>Add Person</h1>
    </head>
<body>
<form action="people" method="post">
    @csrf
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="text" name="email" placeholder="Email">
    <label>
    SSN <input
      name="ssn1"
      type="text"
      pattern="[0-9]{3}"
      placeholder="###"
      aria-label="3-digit"
      size="4" /> -
    <input
      name="ssn2"
      type="text"
      pattern="[0-9]{2}"
      placeholder="##"
      aria-label="2-digit"
      size="2" />
    -
    <input
      name="ssn3"
      type="text"
      pattern="[0-9]{4}"
      placeholder="####"
      aria-label="4-digit"
      size="4" />
  </label>
</p>
    <button type="submit">Add</button>
</form>
    </body>
</html>
