<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $book_id)
    {

        // dd($request);
        $user_id = Auth::id();
        $userExist = Review::where('user_id', '=', $user_id)->first();

        //dd($userExist);

        $this->validate($request, [
            'text' => 'required|max:255',


        ], [
            'text.required' => 'Please enter your review in the "review" field',
            'text.max' => 'Your review mustn\'t be longer then 255 charachters'

        ]);

        if (!$userExist) {
            $review = new Review;

            $review->text = $request->input('text');
            $review->book_id = $book_id;
            $review->user_id = $user_id;
            $review->save();

            session()->flash('success_message', 'Your review was successfully registered.');
        } else {

            session()->flash('error_user_message', 'You have already left review for this book');
        }






        // dd($review);




        return redirect(url('/admin/books/' . $book_id));
    }
}
