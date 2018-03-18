<html>
<head>
</head>
<body>
  <table border="1">
    <tr>
      <th>Name</th>
      <th>Email </th>
      <th>Action</th>
    </tr>
    @foreach($members as $user)
    <tr>
      <td>{{ $user->name }} </td>
      <td>{{ $user->email }} </td>
      <td><a href="/user/{{ $user->id }}" >Detail </td>
      <td><a href="/update/{{ $user->id }}"> Update </td>
      <td><a href="/delete/{{ $user->id }}"> Delete </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
