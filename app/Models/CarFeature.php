<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarFeature extends Model
{
    /** @use HasFactory<\Database\Factories\CarFeatureFactory> */
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        $columns = Schema::getColumnListing($this->getTable());

        $casts = [];

        foreach ($columns as $column) {
            if ($column !== 'car_id') {
                $casts[$column] = 'boolean';
            }
        }

        return $casts;
    }
}
