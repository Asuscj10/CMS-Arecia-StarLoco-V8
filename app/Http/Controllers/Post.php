<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;
use Auth;

use App\Models\Post as PostManager;

class Post extends Controller
{
	public function showHomepage(Request $request)
	{
		if (!$request->has('page') || $request->input('page') == 1)
		{
			$fav_posts = Cache::remember('fav_posts', 60, function () {
				return PostManager::orderBy('date', 'desc')->take(4)->get();
			});
		}
		else
		{
			$fav_posts = [];
		}

		$posts = PostManager::orderBy('date', 'desc')->paginate(4);

		return view('post.homepage', compact('fav_posts', 'posts'));
	}

	public function showPost($id, $title)
	{
		$post = PostManager::findOrFail($id);
		$comments = $post->comments()->orderBy('date', 'desc')->paginate(10);
		$count = $post->comments()->count();

		return view('post.view', compact('post', 'comments', 'count'));
	}

	public function postComment(Request $request, $id, $title)
	{
		$this->validate($request, [
			'comment' => 'required|string',
		]);

		$post = PostManager::findOrFail($id);

		$post->comments()->create([
			'post'   => $post->id,
			'author' => Auth::user()->guid,
			'date' 	 => date('Y-m-d H:i:s'),
			'text'   => $request->comment,
		]);

		return redirect()->route('post', [$post->id, str_slug($post->title)]);
	}
}