<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['firstname','lastname','birthdate','national_id_card','adress','contact','email','faculty','level','sex','status'];
}
