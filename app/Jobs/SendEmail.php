<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\UsersTestMail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $sender;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($sender, $user)
    {
        $this->sender = $sender;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $chunk = array_chunk();
        foreach($this->user as $u) {
            $mailable = new UsersTestMail($this->sender);
            \Mail::to($u)->send($mailable);
        }
    }
}
