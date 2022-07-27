<?php

namespace App\Console\Commands;

use App\Models\vegetableRepository;
use Illuminate\Console\Command;
// use App\Models\vegetableRepository;


class orm_exe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orm_exe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // // insert
        // require_once("/home/porzoe/Source/laravel_project/app/Models/vegetable.php");
        // $vegetable_orm = new vegetableRepository();
        // $vegetable_orm->insert();
        // echo 'テスト';
        // return 0;

        // // update
        // require_once("/home/porzoe/Source/laravel_project/app/Models/vegetable.php");
        // $vegetable_orm = new vegetableRepository();
        // $vegetable_orm->update();
        // echo 'テスト';
        // return 0;

        // delete
        require_once("/home/porzoe/Source/laravel_project/app/Models/vegetable.php");
        $vegetable_orm = new vegetableRepository();
        $vegetable_orm->delete();
        echo 'テスト';
        return 0;
        
        // // select
        // require_once("/home/porzoe/Source/laravel_project/app/Models/vegetable.php");
        // $vegetable_orm = new vegetableRepository();
        // $select_array = $vegetable_orm->select();
        // echo $select_array;
        // return 0;

    }
}
