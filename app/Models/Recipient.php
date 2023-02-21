<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipient extends Model
{
    use HasFactory;

    protected $fillable = ['newsletter_id', 'email'];

    public function newsletters(): HasMany
    {
        return $this->hasMany(Newsletter::class);
    }
}
