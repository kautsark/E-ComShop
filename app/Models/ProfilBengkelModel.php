<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilBengkelModel extends Model
{
    use HasFactory;

    protected $table = 'table_profil_bengkel';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
