<?php

namespace App\Models\Konfigurasi;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "manajemen_menu";
    protected $primaryKey = "id";

    public $guarded = ["id"];
    public $incrementing = true;

    protected $fillable = [
        'name',
        'type',
        'link',
        'urutan',
        'parent',
        'notif',
        'slug',
        'status',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];
}
