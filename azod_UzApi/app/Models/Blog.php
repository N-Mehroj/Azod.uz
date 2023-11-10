<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'blogs';
    protected $primaryKey = 'id';

    protected $fillable = ['tags','imgName', 'minDescrip', 'description','chatId'];

    public function discussion()
    {
        return $this->hasMany(Discussion::class);
    }
}
