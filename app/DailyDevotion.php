<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyDevotion extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'title_slug';
    }
}
