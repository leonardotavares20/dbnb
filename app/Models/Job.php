<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all() { 
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$100,000',
            ],
            [
                'id'=> 2,
                'title' => 'Teacher', 
                'salary' => '$80,000',
            ], 
            [
                'id'=> 3,
                'title' => 'Manager',
                'salary' => '$120,000',
            ],
        ];
    }  

    public static function find(int $id): array | null {
        $job = Arr::first(static::all(), fn (  $job) => $job['id'] == $id);
        
        if(!$job) {
          abort(code: 404);
        }

        return $job;
    }
}

