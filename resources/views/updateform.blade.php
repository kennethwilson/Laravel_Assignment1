<html>
<head>
</head>
<body>
  <form action="/updaterecord/{{ $members->id }}" method="post">
    {{csrf_field()}}
    Name: <input type="text" name="name" value="{{ $members->name }}" required> <br>
    Email : <input type='text' name="email" value="{{ $members->email }}" required><br>
    Password : <input type='password' name="pass" value="{{ $members->password }}" required><br>
    <input type="submit" value="submit">

  </form>
</body>
</html>
