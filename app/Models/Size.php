<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'created_by'
    ];

    /**
     * Get the bin that owns the Size
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bin(): BelongsTo
    {
        return $this->belongsTo(Bin::class);
    }
}
