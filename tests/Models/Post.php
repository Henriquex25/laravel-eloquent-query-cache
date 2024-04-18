<?php

namespace Henriquex25\LaravelEloquentQueryCache\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Henriquex25\LaravelEloquentQueryCache\Traits\QueryCacheable;

class Post extends Model
{
    use QueryCacheable;

    protected $cacheUsePlainKey = true;

    protected $fillable = [
        'name',
    ];

    protected function getCacheBaseTags(): array
    {
        return [
            //
        ];
    }

    protected function cacheUsePlainKeyValue()
    {
        return $this->cacheUsePlainKey;
    }

    protected function cacheForValue()
    {
        return 3600;
    }
}
