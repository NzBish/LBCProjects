<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   //Primary Key
   public $primaryKey = 'id';

   //foreign key
   public function user(){
       return $this->belongsTo('App\User');
   }
}
