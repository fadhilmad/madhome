<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProjek extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = "type_projek";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ["nama", "created_at", "updated_at"];
}
