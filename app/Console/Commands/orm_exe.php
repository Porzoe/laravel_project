<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\vegetableRepository;


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
        $vegetable_orm = new vegetableRepository();
        $vegetable_orm->insert();
        echo 'テスト';
        return 0;
    }
}
