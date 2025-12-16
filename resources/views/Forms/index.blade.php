this is the index

<a href=" {{ route('forms.create') }} " class="btn-primary">Add</a>

<form method="POST" action=" {{ route('logout') }} ">
    @csrf
    <button type="submit">Logout</button>
</form>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Created at</th>
        </tr>
    </thead>
    @forelse($forms as $form)
    <tr>
        <td> {{$form->id}} </td>
        <td> {{$form->username}} </td>
        <td> {{$form->created_at->format('M d, Y')}} </td>
    </tr>
    @empty
    <tr>
        <td>No forms created</td>
    </tr>
    @endforelse
</table>
