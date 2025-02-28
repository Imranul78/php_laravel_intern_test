<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\BirthdayWishMail;

class SendBirthdayNotification extends Command
{
    protected $signature = 'send:birthday-notification';
    protected $description = 'Send birthday notification emails to employees whose birthday is today';

    public function handle()
    {
        $today = Carbon::today()->format('m-d'); // Get today's month and day
        
        $employees = Employee::whereRaw("DATE_FORMAT(date_of_birth, '%m-%d') = ?", [$today])->get();

        foreach ($employees as $employee) {
            Mail::to($employee->email)->send(new BirthdayWishMail($employee));
            $this->info("Birthday email sent to: " . $employee->email);
        }

        $this->info("Birthday notifications sent successfully!");
    }
}
