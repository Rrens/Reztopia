<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'name',
        'id_user',
        'slug',
        'phone',
        'address',
        'created_by',
        'created_at',
        'updated_at'
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function order()
    {
        return $this->belongsTo(Orders::class);
    }

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'id_user');
    }
}
