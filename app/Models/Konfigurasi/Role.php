<?php

namespace App\Models\Konfigurasi;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "manajemen_role";
    protected $primaryKey = "id";

    public $guarded = ["id"];
    public $incrementing = true;

    protected $fillable = [
        'role',
        'slug',
        'menu',
        'status',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
