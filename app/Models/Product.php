<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $name
 * @property int $code
 * @property float $price
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @method static Product|null find(int $id)
 * @method static Product findOrFail(int $id)
 */
class Product extends Model
{
    use HasFactory;
    protected $casts = [
        'price' => 'float'
    ];
    public function productIngredient(): HasMany
    {
        return $this->hasMany(ProductIngredient::class);
    }
}
