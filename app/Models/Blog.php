<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\HasRichText;
class Blog extends Model
{
    use HasFactory , HasRichText;

    protected $richTextFields = [
        'contents'

    ];
}
