<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Reserve;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class RemindMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remind:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '予約当日にリマインドメールを送信';

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
        $today = Carbon::today();
        $reserves = Reserve::with('user', 'shop')->whereDate('date', $today)->get();
        foreach ($reserves as $reserve) {
            Mail::send('reminder', ['reserve' => $reserve], function ($message) use ($reserve) {
                $message->to($reserve->user->email)
                    ->subject('【リマインダー】飲食店予約システムReseによる本日のご飲食に関しまして');
            });
        }
    }
}
