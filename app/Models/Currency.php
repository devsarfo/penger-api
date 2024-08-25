<?php

namespace App\Models;

class Currency extends BaseModel
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'symbol',
        'symbol_position',
        'thousand_separator',
        'decimal_separator',
        'decimal_places',
        'active',
    ];

    public function getSampleAttribute(): string
    {
        return $this->format(1000);
    }

    public function format($value): string
    {
        $value = number_format($value, $this->decimal_places, $this->decimal_separator, $this->thousand_separator);

        return ($this->symbol_position == 'after')
            ? ($value . ' ' . $this->symbol)
            : ($this->symbol . ' ' . $value);
    }
}
