<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    /**
     * Class Product
     *
     * @property int $id
     * @property string $name
     * @property \Carbon\Carbon $created_at
     * @property \Carbon\Carbon $updated_at
     *
     */
    	protected $fillable = [
    		'name'
    	];

}
