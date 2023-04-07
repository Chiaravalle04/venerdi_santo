<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'host_id',
        'city',
        'country',
        'price',
        'vote',
        'image',
        'description',
        'booked',
    ];

    public function host() {

        return $this->belongsTo(Host::class);
    }
}
