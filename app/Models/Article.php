<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use tizis\laraComments\Traits\Commentable;
use tizis\laraComments\Contracts\ICommentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model implements ICommentable
{
    use HasFactory, Commentable;

    protected $fillable = [
        'title', 'subtitle', 'content',' category_id'
    ];

    public function formattedCreatedAt()
    {
        return date_format($this->created_at, 'd-m-Y');
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
