<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Htrans extends Model
{
    use HasFactory;

    protected $table = 'htrans';
    protected $primaryKey = 'htrans_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        "htrans_date",
        "htrans_total",
        "htrans_status",
        "customer_id"
    ];
}
