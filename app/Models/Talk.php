<?php

namespace App\Models;

use App\Events\TalkCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Talk extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => TalkCreated::class,
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
