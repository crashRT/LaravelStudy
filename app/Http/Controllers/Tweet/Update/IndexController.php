<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Illuminate\Http\Request;

class IndexController extends Controller
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
        $tweet = Tweet::where('id', $tweetId)->firstOrFail();
        /*
        if (is_null($tweet)){
            throw new NotFoundHttpException('存在しないつぶやきです');
        }
        first() の代わりに firstOrFail() を使えば省略可能
        */
        
        //dd($tweet);
        return view('tweet.update')->with('tweet', $tweet);
    }
}
