<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = "setting";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "logo",
        "favicon",
        "nama_instansi",
        "link_fb",
        "link_ig",
        "link_tiktok",
        "deskripsi",
        "map",
        "alamat",
        "no_wa",
        "email",
        "analytic",
        "created_at",
        "updated_at",
    ];
}
