<?php

namespace App\Models\Konfigurasi;

use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    protected $table = "manajemen_konfigurasi";
    protected $primaryKey = "id";

    public $guarded = ["id"];
    public $incrementing = true;

    protected $fillable = [
        'slug',
        'value',
        'status',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
