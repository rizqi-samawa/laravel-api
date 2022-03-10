<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $table = 'manga';
    protected $fillable = ['image','title','synopsis','released','author','status','score'];
    
    function delete_image()
    {
        if ($this->image && file_exists(public_path('images' . $this->image)))
            return unlink(public_path('images' . $this->image));
    }
}
