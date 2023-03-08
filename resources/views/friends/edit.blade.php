<form action="{{ route('friends.update', ['friend' => $friend->id]) }}" method="post">
    @csrf
    @method('patch')
    <input type="text" placeholder="First Name" name="friends_name" value="{{$friend->friends_name}}">
    <button type="submit">Update</button>
</form>
