<?php

use Model\Task;

class Controller_Task extends Controller
{
    public function __construct()
    {
        $this->task = new Task();
    }

    public function action_index()
    {
        // TODO: 共通コントローラーに切り出す
        // これは動作確認のためのログインチェック
        // beforeメソッドにログインチェックを実装しておき、beforeメソッドを継承したコントローラーを作成する
        if (!\Auth::check()) {
            \Response::redirect('/');
        }
        $tasks = [
            [
                'name' => 'task 1',
                'created_time' => '2019-01-01',
                'status' => 'done'
            ],
            [
                'name' => 'task 2',
                'created_time' => '2019-01-02',
                'status' => 'done'
            ],
            [
                'name' => 'task 3',
                'created_time' => '2019-01-03',
                'status' => 'done'
            ]
        ];
        $tasks = $this->task->get_list();
        return Response::forge(View::forge('task/index', array(
            'tasks' => $tasks
        )));
    }
}