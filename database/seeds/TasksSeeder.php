<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (range(1,10)as $id){

            \App\Task::create([
                'name'=>'task'.$id,
                'data1'=>$id,
                'data2'=>$id,
                'data3'=>$id,
                'data4'=>$id,
            ]);

        }

    }
}
