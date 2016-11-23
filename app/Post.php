<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class used for holding info about the object that is going to be rented.
 */
class Post extends Model
{
    /**
     * DB table refered to this object
     * @var string
     */
    protected $table = 'posts';

    protected $fillable = ['author', 'title', 'content'];

    // public $timestamps = true;

    public function new($data)
    {
        unset($data['_token']);
        $data['created_at'] = Carbon::now()->toDateTimeString();
        return $this::create($data);
    }

    public function getAll()
    {
        return SELF::join('users', 'author', '=', 'users.id')
            ->get();
    }
}
