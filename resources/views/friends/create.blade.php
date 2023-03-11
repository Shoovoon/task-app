<form action="{{ route('friends.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Friends Name" name="friends_name">
    <input type="text" placeholder="Junior Friends Name" name="junior_friends_name">
    <button type="submit">Save</button>
</form>
