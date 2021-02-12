<?php

namespace App\Models;

use tizis\laraComments\Entity\Comment as AbstractComment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends AbstractComment
{
    use HasFactory;
}
