<?php

namespace App\Jobs;

use App\Models\Matche;
use Barryvdh\Snappy\Facades\SnappyPdf as Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class GenerateMatchReport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    protected $match;
    protected $extraData;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Matche $match, array $extraData)
    {
        $this->match = $match;
        $this->extraData = $extraData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Generate PDF
        $pdf = Pdf::loadView('reportPdf', [
            'match' => $this->match,
            'extraData' => $this->extraData
        ]);
        $pdfPath = 'public/reports/' . $this->match->id . '.pdf';
        Storage::put($pdfPath, $pdf->output());

        // Update match record with PDF path
        $this->match->report_match = $this->match->id . '.pdf';
        $this->match->save();
    }
}
