<?php

namespace App\Filters;

class ArticleFilter extends QueryFilter
{
    public function start_date($date)
    {
        return $this->builder->whereDate('created_at', '>=', $date);
    }

    public function end_date($date)
    {
        return $this->builder->whereDate('created_at', '<=', $date);
    }

    public function search($keyword)
    {
        return $this->builder->where('title', 'like', '%'.$keyword.'%');
    }

}
