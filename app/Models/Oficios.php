<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oficios extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function elabora(): BelongsTo
    {
        return $this->belongsTo(User::class, 'elaboro_id');
    }

    public function solicito(): BelongsTo
    {
        return $this->belongsTo(User::class, 'solicitante_id');
    }
}
