<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory, Obfuscatable;

    protected $fillable = [
        'user_id',
        'program_id',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function scopeSubscribedProgramIds($query, User $user)
    {
        $query->select('program_id')
            ->where('user_id', $user->id)
            ->get()
            ->pluck('program_id')
            ->all();
    }

    public function scopeGetStudentSubscribes($query, User $user)
    {
        $query->with(['program.teacher', 'program.grade', 'program.subject'])
            ->where('user_id', $user->id);
    }
}
