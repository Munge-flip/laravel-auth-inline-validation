<form method="POST" action=" {{ route('login') }} ">

    @csrf

    <h3>Login</h3>

    <div>
        <label for="">Email</label><br>
        <input type="email" name="email" value=" {{ old('email') }} " required><br>
        @error('email')
        <div style="color: red"> {{ $message }} </div>
        @enderror
    </div>

    <div>
        <label for="">Password</label><br>
        <input type="password" name="passwword" required><br>
        @error('password')
        <div style="color: red"> {{ $message }} </div>
        @enderror
    </div>

    <button>Login</button>

    <a href=" {{ route('register') }} ">Don't have an account? Register</a>
</form>
