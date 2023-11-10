<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'givenName',
        'name',
        'picture',
        'jti',
        'locale',
    ];

    public function Discussion()
    {
        return $this->belongsTo(Discussion::class);
    }
    public function reply_message()
    {
        return $this->belongsTo(ReplyMessages::class,'reply_messageId');
    }
}
