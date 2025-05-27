<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Profile extends Model
{
    protected $fillable = [
        'Nom','Prenom','Email','password','image'
    ]; 
    use HasFactory;
    use SoftDeletes;
    use Authorizable;
}
