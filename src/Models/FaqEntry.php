<?php
namespace Christyjoshy\FaqManager\Models;

use Illuminate\Database\Eloquent\Model;

class FaqEntry extends Model
{
    public $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
