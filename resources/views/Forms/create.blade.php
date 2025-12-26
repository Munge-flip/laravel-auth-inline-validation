<form method="POST" action="{{route('forms.store')}}">
    @csrf
    <div>
        <label for="create-username">Username</label><br>
        <input type="text" name="username" id="create-username" value="{{old('username')}}" required>
        @error('username')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="create-password">Password</label><br>
        <input type="password" name="password" id="create-password" required>
        @error('password')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="create-firstName">First Name</label><br>
        <input type="text" name="firstName" id="create-firstName" required>
        @error('firstName')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="create-lastName">Last Name</label><br>
        <input type="text" name="lastName" id="create-lastName" required>
        @error('lastName')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="create-middleName">Middle Name</label><br>
        <input type="text" name="middleName" id="create-middleName" required>
        @error('middleName')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="create-dateOfBirth">Date of Birth</label><br>
        <input type="date" name="dateOfBirth" id="create-dateOfBirth" required>
        @error('dateOfBirth')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="create-color">Favorite Color</label><br>
        <input type="color" name="color" id="create-color" required>
        @error('color')
        <div style="color: red"></div>
        @enderror
    </div>
    <input type="submit" value="SUBMIT">
</form>
