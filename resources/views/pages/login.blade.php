<x-layouts.app title="Login">
  
  <div class="container login-container">
    <h1 class="login__title">Login</h1>

    <form action="{{ route('login') }}" method="POST" class="form">
      @csrf

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="password" required>
      </div>

      <button type="submit" class="btn btn--primary">Login</button>
    </form>
  </div>
</x-layouts.app>