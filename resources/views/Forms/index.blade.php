this is the index

<a href="{{route('forms.create')}}">Add</a>
<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
</form>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Date Created</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Date of birth</th>
            <th>Favorite Color</th>
            <th>Action</th>
        </tr>
    </thead>
    @forelse($forms as $form)
    <tr>
        <td> {{$form->id}} </td>
        <td> {{$form->username}} </td>
        <td> {{$form->created_at->format('M d, Y')}} </td>
        <td> {{$form->firstName}} </td>
        <td> {{$form->lastName}} </td>
        <td> {{$form->middleName}} </td>
        <td> {{$form->dateOfBirth}} </td>
        <td> {{$form->color}} </td>
        <td>
            <a href="{{route('forms.edit', $form->id)}}">Edit</a>
            <a href="{{route('forms.show', $form->id)}}">View</a>
            <form method="POST" action="{{route('forms.destroy', $form->id)}}" onsubmit="return confirm('Are you sure');" style="display: inline">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td>Table is empty</td>
    </tr>
    @endforelse
</table>
