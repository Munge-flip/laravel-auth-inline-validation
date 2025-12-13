this is the index

<a href=" {{ route('form.create') }} " class="btn-primary">Add</a>

<form method="POST" action=" {{ route('logout') }} ">
    @csrf
    <button type="submit">Logout</button>
</form>