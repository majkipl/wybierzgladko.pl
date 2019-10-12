<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Review extends Model
{
    protected $fillable = ['id', 'content', 'product'];

    public $timestamps = false;


    /**
     * @return mixed
     */
    public static function getAllCachedBy($product)
    {
        $cacheKey = (new self)->getTable() . '_' . $product;

        return Cache::remember($cacheKey, now()->addDay(365), function () use ($product) {
            return self::where('product', $product)->get();
        });
    }


    /**
     * @param $query
     * @param $search
     * @param $searchable
     * @return mixed
     */
    public function scopeSearch($query, $search, $searchable)
    {
        if ($search && $searchable) {
            $query->where(function ($query) use ($search, $searchable) {
                foreach ($searchable as $column) {
                    switch ($column) {
                        case 'id':
                            $query->orWhere('id', '=', '%' . $search . '%');
                            break;
                        case 'content':
                        case 'product':
                            $query->orWhere($column, 'LIKE', '%' . $search . '%');
                            break;
                    }
                }
            });
        }

        return $query;
    }

    /**
     * @param $query
     * @param $filter
     * @return mixed
     */
    public function scopeFilter($query, $filter)
    {
        if ($filter) {
            $filters = json_decode($filter, true);

            foreach ($filters as $column => $value) {
                switch ($column) {
                    case 'id':
                        $query->where('id', $value);
                        break;
                    case 'content':
                    case 'product':
                        $query->where($column, 'LIKE', "%$value%");
                        break;
                }
            }
        }

        return $query;
    }
}
