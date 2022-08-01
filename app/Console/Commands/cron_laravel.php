<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class cron_laravel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron_laravel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cronでコマンド実行されるファイル';

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

    if (error_log(date("Y-m-d H:i:s"), 3, "./tests/test/debug.log")) {
        echo "ログを出力しました。";
        } else {
        echo "ログ出力に失敗しました。"; 
    }
        return 0;
    }
}
