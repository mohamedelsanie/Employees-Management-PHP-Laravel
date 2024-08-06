<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category',
        'persional_num',
        'name_ar',
        'name_en',
        'job_pos',
        'passport_num',
        'nationality',
        'birthplace',
        'passposrt_releasedate',
        'passport_expirationdate',
        'pasport_type', // normal - private - diplomatic
        'personal_picture',
        'gender', // male - female
        'mobile_num',
        'phone_num',
        'sos_phone_num',
        'kinship',
        'email',
        'apartment',
        'building',
        'streat',
        'complex',
        'region',
        'work_type', // military - civilian
        'work_place',
        'job_number',
        'job_title',
        'work_section',
        'line_manger_name',
        'tshirt_size', // xs - s - m - l - xl - 2xl - 3xl - 4xk - 5xl
        'shoe_size',
        'mandate_type', // 0 - 1
        'mandate_startdate',
        'mandate_enddate',
        'passport_file',
        'smart_id_file',
        'salary_print_file',
        'bank_report_file',
        'cv_file',
        'other_file',
    ];

    public function category(){
        return $this->belongsTomany(Categories::class,'categories');
    }
}
