<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Newsletter;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNewLetters;
use App\Tag;

class NewsLetterMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $Tag;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tag $Tag)
    {
        $this->Tag = $Tag;

     

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
      
        Mail::to('admin@admin.com')->send(new MailNewLetters($this->Tag) );
    }
}
