<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebTraffic extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "ip",
        "country",
        "city",
        "latitude",
        "longitude",
        "url",
        "query",
        "ref",
        "user_agent",
        "referer",
    ];
}
