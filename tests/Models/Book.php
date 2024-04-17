<?php

namespace Henriquex25\QueryCache\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Henriquex25\QueryCache\Traits\QueryCacheable;

class Book extends Model
{
    use QueryCacheable;

    protected $cacheUsePlainKey = true;

    protected $fillable = [
        'name',
    ];

    protected function cacheUsePlainKeyValue()
    {
        return $this->cacheUsePlainKey;
    }

    protected function cacheForValue()
    {
        return 3600;
    }
}
