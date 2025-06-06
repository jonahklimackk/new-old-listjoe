<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CreditsOrders extends Model
{
  /** @use HasFactory<\Database\Factories\CreditsOrdersFactory> */
  use HasFactory;


  protected $fillable = [
    'user_id',
    'sponsor_id',
    'price',
    'credits',
    'checkout_session_id',    
 ];  


      /**
     * Eloquent relationship
     *
     * @return array
     */
      public function user()
      {
       return $this->belongsTo('App\Models\User');
    }


 }
