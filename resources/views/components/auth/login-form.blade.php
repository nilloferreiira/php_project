<form action="{{ route('login.submit') }}" method="POST">
    @csrf
  <label for="username">E-mail:</label>
  <input type="text" id="email" name="email"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>