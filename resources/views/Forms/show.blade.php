<div>
    <h3>Form Details</h3>
    <p><strong>ID:</strong> {{$form->id}} </p>
    <p><strong>Username:</strong> {{$form->username}} </p>
    <p><strong>Password:</strong> {{$form->password}} </p>
    <p><strong>Created at:</strong> {{$form->created_at->format('M d, Y')}} </p>
    <p><strong>First Name:</strong> {{$form->firstName}} </p>
    <p><strong>Last Name:</strong> {{$form->lastName}} </p>
    <p><strong>Middle Name:</strong> {{$form->middleName}} </p>
    <p><strong>Date of Birth:</strong> {{$form->dateOfBirth}} </p>
    <p><strong>Favorite Color:</strong> {{$form->color}} </p>

    <a href="{{route('forms.index')}}">Back to list</a>
</div>
