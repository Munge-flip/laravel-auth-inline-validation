<form method="POST" action=" {{ route('register') }} ">

    @csrf

    <h3>Register</h3>

    <div>
        <label for="">Name</label><br>
        <input type="text" name="name" value=" {{old('name')}} " required><br>
        @error('name')
        <div style="color: red"> {{ $message }} </div>
        @enderror
    </div>

    <div>
        <label for="">Email</label><br>
        <input type="email" name="email" value=" {{old('email')}} " required><br>
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

    <div>
    <label for="">Confirm Password</label>
    <input type="password" name="password_confirmation" required>
    </div>

    <button>Register</button>

    <a href=" {{ route('login') }} ">Already have an Account?</a>
</form>
