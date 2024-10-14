<form action="{{ route('register.submit') }}" method="POST">
  @csrf
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  <label for="confirmPassword">Confirm Password:</label>
  <input type="password" id="confirmPassword" name="password_confirmation"><br><br>
  <button type="submit">register</button>

  
</form>