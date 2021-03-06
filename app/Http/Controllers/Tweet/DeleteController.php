<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tweetId = (int) $request->route('tweetId');
        /*
        $tweet = Tweet::where('id', $tweetID)->firstOrFail();
        $tweet->delete();
        以下のように直接主キーを指定して削除することも可能*/
        Tweet::destroy($tweetId);
        return redirect()
            ->route('tweet.index')
            ->with('feedback.success', "つぶやきを削除しました");
    }
}
