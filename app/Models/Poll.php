<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $table = 'polls';
    protected $primaryKey = 'id';
    protected $fillable = ['poll_question', 'start_date', 'end_date', 'user_id'];
}
