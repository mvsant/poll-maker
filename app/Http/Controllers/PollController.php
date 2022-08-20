<?php

namespace App\Http\Controllers;

use App\Events\VoteEvent;
use App\Models\Poll;
use App\Models\Poll_alternatives;
use Carbon\Carbon;
use Illuminate\Http\Request;


class PollController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $polls = Poll::where('user_id', $user->id)->simplePaginate(10);
        return view('polls.index')->with('polls', $polls);
    }

    public function create()
    {
        return view('polls.create');
    }

    public function store(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');

        $request->validate([
            'poll_question' => 'required|max:255,min:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'alternative.*' => 'required|min:1',
        ]);

        if ($request->start_date > $request->end_date) {
            return back()->with('danger', 'End date must be grater than start date');
        } elseif (count($request->alternative) < 3) {
            return back()->with('danger', 'Please insert at least 3 alternatives');
        } elseif ($now > $request->end_date) {
            return back()->with('danger', 'This poll must be end in the future!');
        } else {

            $current_poll = Poll::create([
                'poll_question' => $request->poll_question,
                'user_id' => auth()->user()->id,
                'start_date' => $request->start_date,
                'end_date' => Carbon::createFromFormat('Y-m-d', $request->end_date)->endOfDay(),
                'is_open' => $request->start_date > $now ? false : true

            ]);

            foreach ($request->alternative as $item) {
                Poll_alternatives::create([
                    'alternative' => $item,
                    'poll_id' => $current_poll->id
                ]);
            }
            return redirect('polls')->with('success', 'Poll created successfully!!!');
        }
    }

    public function show($id)
    {
        $poll = Poll::where('id', $id)->get();
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
        $now = Carbon::now()->format('Y-m-d');

        $request->validate([
            'poll_question' => 'required|max:255,min:10',
            'end_date' => 'required|date',
            'alternative.*' => 'required|min:1',
        ]);
        if ($request->start_date > $request->end_date) {
            return back()->with('danger', 'End date must be grater than start date');
        } elseif (count($request->alternative) < 3) {
            return back()->with('danger', 'Please insert at least 3 alternatives');
        } elseif ($now > $request->end_date) {
            return back()->with('danger', 'This poll must be end in the future!');
        } else {

            $poll->update([
                'poll_question' => $request->poll_question,
                'end_date' => Carbon::createFromFormat('Y-m-d', $request->end_date)->endOfDay(),

            ]);

            Poll_alternatives::where('poll_id', $id)->delete();

            foreach ($request->alternative as $item) {
                Poll_alternatives::create([
                    'alternative' => $item,
                    'poll_id' => $id
                ]);
            }
            return redirect('polls')->with('success', 'Poll updated successfully!!!');
        }
    }

    public function destroy($id)
    {
        $poll = Poll::where('id', '=', $id)->get();
        $poll->each->delete();
        return redirect('polls')->with('danger', 'Item deleted !!!');
    }

    public function vote(Request $request, $id)
    {
        $poll = Poll::find($id);

        Poll_alternatives::where('id', $request->vote)->increment('votes', 1);
        $get_total = Poll_alternatives::where('id', $request->vote)->get();
        if (Carbon::now()->format('Y-m-d') < $poll->end_date && $poll->is_open == true) {
            event(new VoteEvent($request->vote, $get_total));
            return redirect()->to('polls/' . $id)->with('success', 'Poll voted successfully!');
        } else {
            return redirect()->to('polls/' . $id)->with('danger', 'Poll already closed!');
        }
    }
}
