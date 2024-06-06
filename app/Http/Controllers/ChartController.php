<?php

namespace App\Http\Controllers;

use App\Models\Matche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function matchChart()
    {
        $userId = Auth::user()->id;
        $matches = Matche::selectRaw('MONTH(date_match) as month, COUNT(*) as count')->where('referee_id', $userId)
            ->whereYear('date_match', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = [];
        $data = [];
        $colors = [
            "#3498db",
            "#e74c3c",
            "#2ecc71",
            "#f1c40f",
            "#9b59b6",
            "#1abc9c",
            "#e67e22",
            "#34495e",
            "#e84393",
            "#fdcb6e",
            "#00cec9",
            "#6c5ce7"
        ];

        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0,0,0,$i,1));
            $count = 0;
            foreach ($matches as $match) {
                if ($match->month == $i) {
                    $count = $match->count;
                    break;
                }
            }

            array_push($labels,$month);
            array_push($data,$count);
        }

        $datasets = [
            [
                'label' => 'Matches',
                'data' => $data,
                'backgroundColor' => $colors
            ]
        ];

        return view('home', compact('labels', 'datasets'));
    }
}
