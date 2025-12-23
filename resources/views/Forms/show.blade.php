<div>
    <h3>Form Details</h3>
    <p><strong>ID:</strong> {{$form->id}} </p>
    <p><strong>ID:</strong> {{$form->username}} </p>
    <p><strong>ID:</strong> {{$form->password}} </p>
    <p><strong>ID:</strong> {{$form->created_at->format('M d, Y')}} </p>

    <a href="{{route('forms.index')}}">Back to list</a>
</div>
