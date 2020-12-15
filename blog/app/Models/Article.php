<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // protected $table = 'article';

    protected $fillable = [ 
        'title',
        'excerpt', 
        'body',
        'heading1',
        'image_name',
        'paragraph1',
        'heading2',
        'image2_name',
        'paragraph2',
        'heading3',
        'image3_name',
        'paragraph3',
        'heading4',
        'image4_name',
        'paragraph4',
        'heading5',
        'image6_name',
        'paragraph5',
        'heading6',
        'image6_name',
        'paragraph6',
        'heading7',
        'image7_name',
        'paragraph7',
        'heading8',
        'image8_name',
        'paragraph8',
        'heading9',
        'image9_name',
        'paragraph9',
        'heading10',
        'image10_name',
        'paragraph10'
];
}
