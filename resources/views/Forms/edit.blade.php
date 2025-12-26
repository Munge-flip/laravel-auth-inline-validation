<form method="POST" action="{{route('forms.update', $form->id)}}">
    @csrf
    @method('PATCH')
    <div>
        <label for="update-username">Username</label><br>
        <input type="text" name="username" id="update-username" value="{{old('username', $form->username)}}" required>
        @error('username')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="update-password">Password</label><br>
        <input type="password" name="password" id="update-password" required>
        @error('username')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="update-firstName">First Name</label><br>
        <input type="text" name="firstName" id="update-firstName" value="{{old('firstName', $form->firstName)}}" required>
        @error('firstName')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="update-lastName">Last Name</label><br>
        <input type="text" name="lastName" id="update-lastName" value="{{old('lastName', $form->lastName)}}" required>
        @error('lastName')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="update-middleName">Middle Name</label><br>
        <input type="text" name="middleName" id="update-middleName" value="{{old('middleName', $form->middleName)}}" required>
        @error('middleName')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="update-dateOfBirth">Date of Birth</label><br>
        <input type="date" name="dateOfBirth" id="update-dateOfBirth" value="{{old('dateOfBirth', $form->dateOfBirth)}}" required>
        @error('dateOfBirth')
        <div style="color: red"></div>
        @enderror
    </div>
    <div>
        <label for="update-color">Favorite Color</label><br>
        <input type="color" name="color" id="update-color" value="{{old('color', $form->color)}}" required>
        @error('color')
        <div style="color: red"></div>
        @enderror
    </div>
    <input type="submit" value="UPDATE">
</form>
