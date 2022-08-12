<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'client_id', 'media','path', 
      ];


      public function clients()
      {
        $this->belongsTo(client::class);
      }

      public function UserPhotos()
      {
        $this->belongsTo(User::class);
      }
}
