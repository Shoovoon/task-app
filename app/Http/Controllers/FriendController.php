<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    // index
    public function index()
    {
        $friends = Friend::get();
        // dd($friends);
        return view('friends.index', compact('friends'));
    }


    // Create
    public function create()
    {
        return view('friends.create');
    }

    // Store

    public function store(Request $request)
    {
        $friend = new Friend();
        $friend->friends_name = $request->friends_name;
        $friend->junior_friends_name = $request->junior_friends_name;
        $friend->save();
        return redirect()->route('friends.index')->withMessage('User Creation Successful!');
    }

    // Show

    public function show(Friend $friend)
    {
        return view('friends.show', [
            'friend' => $friend
        ]);
    }

    // Edit

    public function edit(Friend $friend)
    {
        return view('friends.edit', [
            'friend' => $friend
        ]);
    }

    public function update(Request $request, Friend $friend)
    {
        $friend->update([
            'friends_name' => $request->friends_name,
        ]);
        return redirect()->route('friends.index')->withMessage('Task was successful!');
    }

    public function destroy(Friend $friend)
    {
        $friend->delete();
        return redirect()->route('friends.index')->withMessage('Successfully Deleted!');
    }

}
