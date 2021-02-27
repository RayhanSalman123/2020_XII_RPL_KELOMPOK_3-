<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedule;
use App\Day;
use App\Hours;
use App\Majors;
use App\Subjects;
use App\SchoolYears;
use App\Teacher;
use App\TeacherSubject;
use App\Classes;
use App\DayHour;


class ScheduleController extends Controller
{
    public function AddSchedule()
    {
        $data['teacher']=TeacherSubject::join('teachers' , 'teacher_subjects.ts_teacher_id', '=' , 'teachers.teacher_id')
                        ->join('users',  'teachers.user_id', '=' , 'users.usr_id')
                        ->join('subjects' , 'ts_subject_id'  , '=' , 'subjects.subject_id')
                        ->get();
        $data ['day'] = Day::whereNotIn('day_id' , [1,7])->get();
        $data  ['hour'] = Hours::all();
        $data ['class'] =  Classes::join('grades' , 'classes.cl_grade_id'  , '=' , 'grades.grade_id')
                        ->join('majors'  , 'classes.cl_major_id' , '=' , 'majors.major_id')
                        ->get();
        return view ('admin.schedule.add_schedule', $data);

    }

    public function SaveSchedule (Request $request){
        $class_id = $request->input('class_id');
        $subject_id =  $request->input('subject_id');
        $hour_id  = $request->input('hour_id');
        $day_id = $request->input('day_id');
        $dayHour = DayHour::whereIdDay($day_id)
                                ->whereIdHour($hour_id)
                                ->first();
        $schedule = Schedule::where('sch_day_hour_id'  ,  $dayHour->dh_id)
                            ->where('sch_class_id' , $class_id)
                            ->first();
        if($schedule){
            return 'gagal, Jam sudah Terisi';
        } else {
            Schedule::create([
                'sch_teacher_subject_id' => $subject_id,
                'sch_day_hour_id' =>  $dayHour->dh_id,
                'sch_class_id'  => $class_id
            ]);
            return 'berhasil';
        }
        return $request->all();

    }
}
