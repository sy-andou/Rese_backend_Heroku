<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\User;
use Carbon\Carbon;

class DeletePreRegister extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:pre_register';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '仮登録の削除';

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
        $one_hour_ago = Carbon::now()->subHour(1);
        User::where('email_verified_at', null)->whereDate('created_at', '<=', $one_hour_ago)->forceDelete();
    }
}
