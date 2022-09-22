<form action="{{route('color.store', $user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name"/>
    <button type="submit">Click ME</button>
</form>
