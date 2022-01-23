<?php

namespace App\Models;

use ApiChef\Obfuscate\Obfuscatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory, Obfuscatable;

    protected $guarded = [];

    protected $dates = [
        'start_at',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function enrollStudent(User $user)
    {
        $enrol = new Subscribe();
        $enrol->user_id = $user->id;
        $enrol->program_id = $this->id;
        $enrol->save();
    }

    public function hasRequest(User $user): bool
    {
        return Subscribe::query()
            ->where('user_id', $user->id)
            ->where('program_id', $this->id)
            ->exists();
    }
}
