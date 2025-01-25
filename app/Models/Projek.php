<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = "projek";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "nama",
        "tanggal_masuk",
        "gambar",
        "link",
        "type_projek_id",
        "status_projek_id",
        "created_at",
        "updated_at",
    ];

    public function typeProjek()
    {
        return $this->belongsTo(TypeProjek::class, "type_projek_id");
    }

    public function statusProjek()
    {
        return $this->belongsTo(StatusProjek::class, "status_projek_id");
    }
}
