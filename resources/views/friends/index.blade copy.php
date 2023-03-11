<table style="width: 100%; border-collapse: collapse" border="1">
    <thead>
        <tr>
            <th colspan="3">
                <button type="submit"><a href="{{ route('friends.create') }}">Create Friend</button>
            </th>
        </tr>
        <tr>
            <th style="width: 30%">First Name</td>
            <th style="width: 30%">Junior Friend</td>
            <th style="width: 40%">Action</td>
        </tr>
    </thead>
    <tbody>
        {{-- @php $sl=0 @endphp --}}
        @foreach ($friends as $friend)
            <tr>
                <td>{{ $friend->name }}</td>
                <td>{{ $friend->junior_friend }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('friends.show', ['friend' => $friend->id]) }}">Show</a>
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
