<form action="{{ route('friends.update', ['friend' => $friend->id]) }}" method="post">
    @csrf
    @method('patch')
    <input type="text" placeholder="Friends Name" name="friends_name" value="{{$friend->friends_name}}">
    <input type="text" placeholder="Junior Friends Name" name="junior_friends_name" value="{{$friend->junior_friends_name}}">
    <button type="submit">Update</button>
</form>
