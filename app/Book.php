<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 *
 * @package App
 * @property string $name
 * @property string $image
*/
class Book extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'image'];
    protected $hidden = [];
    public static $searchable = [
        'name',
    ];
    
    public static function boot()
    {
        parent::boot();

        Book::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function category()
    {
        return $this->belongsToMany(Category::class, 'book_category')->withTrashed();
    }
    
}
