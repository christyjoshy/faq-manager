<?php
namespace Christyjoshy\FaqManager\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $guarded = [];
    
    public function faq()
    {
        return $this->hasMany(FaqEntry::class, 'category_id', 'id');
    }
}
