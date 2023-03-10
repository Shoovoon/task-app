<table style="width: 100%; border-collapse: collapse" border="1">
    <thead>

        <button type="submit" class="btn btn-dark"> <a href="{{ route('friends.create') }}">Add Friends</a></button>
        <button type="submit" class="btn btn-dark"> <a href="">Add Junior Friends</a></button>
        <tr>
            <th style="width: 30%">Friends Name</td>
            <th style="width: 30%">Junior Friends Name</td>
            <th style="width: 40%">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($friends as $friend)
            <tr>
                <td>{{ $friend->friends_name }}</td>
                <td>{{ $friend->junior_friends_name }}</td>
                <td>
                    <a class="btn btn-info btn-sm"
                        href="{{ route('friends.show', ['friend' => $friend->id]) }}">Show</a>
                    <a class="btn btn-warning btn-sm"
                        href="{{ route('friends.edit', ['friend' => $friend->id]) }}">Edit</a>

                    <form style="display:inline" action="{{ route('friends.destroy', ['friend' => $friend->id]) }}"
                        method="post">
                        @csrf
                        @method('delete')

                        <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger"
                            type="submit">Delete</button>
                    
                    </form>

                    <a class="btn btn-warning btn-sm"
                        href="{{ route('friend.pdf', ['friend' => $friend->id]) }}">Download PDF</a>



                </td>
            </tr>
        @endforeach

    </tbody>
</table>
