<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcels extends Model
{
    use HasFactory;

    protected $table = "parcels";
    public $timestamps = false;
    protected $fillable = [
        'parcel_number',
        'size',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
