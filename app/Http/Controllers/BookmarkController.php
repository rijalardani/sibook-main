<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    // public function store(Request $request)
    // {
    //     $bookmark = new Bookmark;
    //     $bookmark->user_id = auth()->user()->id;
    //     $bookmark->post_id = $request->post_id;
    //     $bookmark->save();

    //     // return response()->json(['message' => 'Bookmark deleted successfully']);
    //     return redirect('/dashboard/bookmarks')->with('success', 'Post has been added to bookmark!');
    // }

    // public function destroy(Bookmark $bookmark)
    // {
    //     $bookmark->delete();

    //     return response()->json(['message' => 'Bookmark deleted successfully']);
    // }

    // public function show(Bookmark $bookmark)
    // {
    //     $bookmark->isBookmarked;
    //     return view('dashboard.bookmarks.index');
    // }
}
