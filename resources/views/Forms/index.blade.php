this is the index

<a href="{{route('forms.create')}}">Add</a>
<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
</form>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Date Created</th>
    </thead>
    @forelse($forms as $form)
    <tr>
        <td> {{$form->id}} </td>
        <td> {{$form->username}} </td>
        <td> {{$form->created_at->format('M d, Y')}} </td>
    </tr>
    @empty
    <tr>
        <td>Table is empty</td>
    </tr>
    @endforelse
</table>
