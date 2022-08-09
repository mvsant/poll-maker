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
            'poll_question' => 'required|max:255,min:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'alternative.*' => 'required|min:1',
        ]);

        if (count($request->alternative) < 3) {
            return back()->with("Please insert at least 3 alternatives");
        } else {

            $current_poll = $poll::create([
                'poll_question' => $request->poll_question,
                'user_id' => auth()->user()->id,
                'start_date' => $request->start_date,
                'end_date' => date_create($request->end_date)->modify('+1 day -1 microsecond'),
            ]);

            foreach ($request->alternative as $item) {
                $poll_alternatives::create([
                    'alternative' => $item,
                    'poll_id' => $current_poll->id
                ]);
            }
            return redirect('polls');
        }
    }

    public function show($id)
    {
        $poll = Poll::where('id', '=', $id)->get();
        $alternatives = Poll_alternatives::where('poll_id', '=', $id)->get();


        return view('polls.show')->with(['poll' => $poll[0], 'alternatives' => $alternatives]);
    }

    public function edit($id)
    {
        $poll = Poll::where('id', '=', $id)->get();
        $alternatives = Poll_alternatives::where('poll_id', '=', $id)->get();
        return view('polls.edit')->with(['poll' => $poll[0], 'alternatives' => $alternatives]);
    }

    public function update(Request $request, $id)
    {
        $poll = Poll::find($id);
        $poll->update([
            'poll_question' => $request->poll_question,
            'user_id' => auth()->user()->id,
            'start_date' => $request->start_date,
            'end_date' => date_create($request->end_date)->modify('+1 day -1 microsecond'),
        ]);

        foreach ($request->alternative as $item) {
            Poll_alternatives::where('poll_id', $id)->updateOrCreate([
                'alternative' => $item,
                'poll_id' => $id
            ]);
        }
        return redirect()->to('polls/' . $id)->with('message', '<p class="text-gray-200">Company Has Been updated successfully</p>');
    }

    public function destroy($id)
    {
        $poll = Poll::where('id', '=', $id)->get();
        $poll->each->delete();
        return redirect('polls')->with('message', 'Item deleted !!!');
    }
}
