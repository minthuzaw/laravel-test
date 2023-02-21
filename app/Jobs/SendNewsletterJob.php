<?php

namespace App\Jobs;

use App\Mail\Newsletters;
use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewsletterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private Newsletter $newsletter)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->newsletter->update(['started_at' => now()]);

        $this->newsletter->recipients
            ->each(
                fn ($recipient) => Mail::to($recipient->email)->send(new Newsletters($this->newsletter))
            );

        $this->newsletter->update(['finished_at' => now()]);
    }
}
