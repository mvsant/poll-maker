<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Poll_alternatives;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PollController extends Controller
{
    public function index()
    {
        $poll = new Poll;
        $user = auth()->user();
        $polls = $poll::where('user_id', $user->id)->get();
        return view('polls.index')->with('polls', $polls);
    }

    public function create()
    {
        return view('polls.create');
    }

    public function store(Request $request)
    {
        $poll = new Poll;
        $poll_alternatives = new Poll_alternatives;

        $request->validate([
            'poll_question' => 'required|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $current_poll = $poll::create([
            'poll_question' => $request->poll_question,
            'user_id' => auth()->user()->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        foreach ($request->alternative as $item) {
            $poll_alternatives::create([
                'alternative' => $item,
                'poll_id' => $current_poll->id
            ]);
        }
        return redirect('polls');
    }
    
    public function show($id)
    {
        $poll = Poll::where('id', '=', $id)->get();
        return view('polls.show')->with('poll', $poll[0]);
        //dd($poll[0]);
    }
    
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
