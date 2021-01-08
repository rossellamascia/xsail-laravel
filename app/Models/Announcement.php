<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use Searchable;
    use HasFactory;
    protected $fillable = ['title', 'long_description', 'short_description', 'price'];

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array =[
            'id' => $this->id,
            'title' => $this->title,
            'long_description' => $this->long_description,
            'short_description' => $this->short_description,
            'cetegory_id' => $this->category,
        ]; 

        return $array;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    static public function ToBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count();
    }
}
