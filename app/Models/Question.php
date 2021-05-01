<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subjec;

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'text',
        'subject_id',
    ];

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
}
