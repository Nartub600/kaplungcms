<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{

  protected $primaryKey = 'ecommerce_transaction_id';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['value', 'ecommerce_transaction_id', 'user_id'];

  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
