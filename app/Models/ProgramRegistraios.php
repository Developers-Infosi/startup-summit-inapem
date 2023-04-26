<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramRegistraios extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'program_registraios';
    protected $guarded = ['id'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function programs(){

        return $this->belongsTo(ActivityProgram::class, 'fk_activity_program');
    }
}