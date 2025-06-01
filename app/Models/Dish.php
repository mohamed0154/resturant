<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description','image','category_id'];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'carts');
    }
}
