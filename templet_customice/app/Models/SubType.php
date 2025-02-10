<?php

namespace App\Models;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    use HasFactory;
    public function type () {
        return $this->belongsTo(Type::class);
    }
}