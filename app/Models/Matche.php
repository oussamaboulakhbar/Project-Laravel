<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    public function referee(){
        return $this->belongsTo(Referee::class);
    }
    protected $fillable = [
        'referee_id',
        'city',
        'visiting_team',
        'local_team',
        'category',
        'date_match',
        'report_match'
    ];
}
