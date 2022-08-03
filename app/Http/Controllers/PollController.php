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
        $user = auth()->user();
        $polls = Poll::where('user_id', $user->id)->get();
        return view('polls.index')->with('polls', $polls);
    }

    public function create()
    {
        return view('polls.new');
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
        return view('polls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
