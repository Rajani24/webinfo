<?php
/**
 * Created by PhpStorm.
 * User: Rajani Maharjan
 * Date: 8/2/2016
 * Time: 12:40 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable =['name'];

    function users(){
         return $this->hasMany(Role::class);
    }
}