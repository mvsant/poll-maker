<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll_alternatives extends Model
{
    use HasFactory;

    protected $table = 'poll_alternatives';
    protected $primaryKey = 'id';
    protected $fillable = ['alternative', 'votes', 'poll_id'];

    public function poll()
    {
        return $this->belongsTo('App\Models\Poll', 'poll_id', 'id');
    }
}
