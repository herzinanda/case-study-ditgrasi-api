<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgramAccreditations extends Model
{
    use HasFactory;
    // protected $table = 'study_program_accreditations';
    protected $fillable = ['study_program', 'faculty', 'degree', 'accreditation', 'decree', 'decree_url'];
}
