<?php

namespace App\Http\Controllers;

use App\Models\Matche;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GenerateMatchReport;
use Illuminate\Support\Facades\Auth;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $matches = Matche::with('referee')->where('referee_id', $userId)->get();

        // Format data for DataTables
        $data = $matches->map(function ($match) {
            return [
                'id' => $match->id,
                'referee_name' => $match->referee->fullName ?? 'Unknown', // Assuming you have a 'name' field in referees table
                'city' => $match->city,
                'visiting_team' => $match->visiting_team,
                'local_team' => $match->local_team,
                'category' => $match->category,
                'date_match' => $match->date_match,
                'report_match' => $match->report_match,
            ];
        });
        return response()->json(['data' => $data]);
    }
    public function create()
    {
        return view('createReport');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'referee_id' => 'required',
            'city' => 'required|string',
            'visiting_team' => 'required|string',
            'local_team' => 'required|string',
            'category' => 'required|string',
            'date_match' => 'required|date',
        ]);

        $match = Matche::create(array_merge($validated, ['report_match' => '']));
        // Gather additional data
        $extraData = $request->only([
            'competition', 'round', 'time_match', 'goal_V', 'goal_L', 'scorer_V', 'scorer_L', 'warning_V', 'warning_L', 'expulsions_V', 'expulsions_L', 'changed_players_V', 'changed_players_L', 'referee_1', 'referee_2', 'referee_3'
        ]);
        // Dispatch job to generate PDF
        dispatch(new GenerateMatchReport($match, $extraData));
        return redirect()->route('matches.view')->with('success', 'Match created and PDF generation is in progress!');
    }

    public function destroy(Matche $match){
        Matche::destroy($match->id);
        return to_route('matches.view')->with('success','Match a ete supprime ');
    }
}
