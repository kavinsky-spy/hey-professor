<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\{Question, Vote};

class LikeController extends Controller
{
    public function __invoke(Question $question): RedirectResponse
    {

        Vote::query()->create([
            'question_id' => $question->id,
            'user_id'     => auth()->id(),
            'like'        => 1,
            'unlike'      => 0,
        ]);


        return back();
    }
}
