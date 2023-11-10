<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ReplyMessages extends Model
{
    use HasFactory;
    protected $table = 'reply_messages';
    protected $primaryKey = 'id';

    protected $fillable = ['message','reply_messageId', 'like_count', 'report_count','userId'];

    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
