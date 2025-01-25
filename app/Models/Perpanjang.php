<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpanjang extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = "perpanjang";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "projek_id",
        "harga",
        "tanggal_start",
        "tangal_ahir",
        "type_perpanjang",
        "deskripsi",
        "created_at",
        "updated_at",
    ];

    public function projek()
    {
        return $this->belongsTo(Projek::class, "projek_id");
    }
}
