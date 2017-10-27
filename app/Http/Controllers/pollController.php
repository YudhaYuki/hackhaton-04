<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;

class pollController extends Controller
{
    public function listPolls()
    {

        $view = view('polls/listofpolls'); //resources/views/ movies/listing .blade.php
        
        $all_polls = Poll::orderBy('name', 'description')->get();
        $view->polls = $all_polls;

        return $view;
    }

    public function detailPolls($id)
    {
        $view = view('polls/polldetail'); //resources/views/ movies/listing .blade.php
        
                $poll = Poll::find($id);
                $view->poll = $poll;
        
                return $view;
    }

    public function newPoll()
    {

        $view = view('polls/newpoll');
        $view->poll = new Poll();

        return $view;
    }


    public function store($id = null)
    {
        if($id) //if this is edit
        {
            //select movie from DB
            $poll= Poll::findOrFail($id);
        }
        else{
            // create empty object movie
            $poll = new Poll();
        }


        //fill it with selected data fro the request
        $poll->fill(request()->only([
            'name'
            // 'description',
        ]));
        $poll->name = $poll->name ?: '';
        // $poll->description = $poll->description ?: '';

        //save the movie
        $poll->save();

        //inform the user of success
        session()->flash('success_message', 'The poll was successfully saved!');

        //redirect
        return redirect()->action('pollController@listPolls');
    }

    
}
