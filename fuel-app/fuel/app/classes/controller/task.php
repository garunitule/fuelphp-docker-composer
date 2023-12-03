<?php

class Controller_Task extends Controller
{
    public function action_index()
    {
        $tasks = [
            [
                'name' => 'task 1',
                'date' => '2019-01-01',
                'status' => 'done'
            ],
            [
                'name' => 'task 2',
                'date' => '2019-01-02',
                'status' => 'done'
            ],
            [
                'name' => 'task 3',
                'date' => '2019-01-03',
                'status' => 'done'
            ]
        ];
        return Response::forge(View::forge('task/index', array(
            'tasks' => $tasks
        )));
    }
}