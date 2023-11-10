<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discussion extends Model
{
    use HasFactory;
    protected $table = 'discussions';
    protected $primaryKey = 'id';

    protected $fillable = ['message','reply_messageId', 'like_count', 'report_count','userId','blog_id'];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
    public function reply_message()
    {
        return $this->HasMany(ReplyMessages::class,'reply_messageId')->with('user');
    }
}
