<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $table = 'polls';
    protected $primaryKey = 'id';
    protected $fillable = ['poll_question', 'start_date', 'end_date', 'user_id', 'is_open'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function pollAlternatives()
    {
        return $this->hasMany('App\Models\Poll_alternatives');
    }
    public function setDateAttribute($date, $value)
    {
        $this->attributes[$date] = date('Y-m-d', strtotime($value));
    }


}
