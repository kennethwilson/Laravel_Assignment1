<html>
<head>
</head>
<body>
  <form action="/register" method="post">
    {{csrf_field()}}
    Name: <input type="text" name="name" required><br>
    Email : <input type='text' name="email" required><br>
    Password : <input type='password' name="pass" required><br>
    <input type="submit" value="submit">
  </form>
</body>
</html>
