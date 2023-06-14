<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $file_name;
    private $path;
    /**
     * Create a new job instance.
     */
    public function __construct($file_path, $w , $h)
    {
        $this->path = dirname($file_path);
        $this->file_name = basename($file_path);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $scr_path = storage_path() . '/app/public' . $this->path . '/' . $this->file_name;
        $dest_path = storage_path() . '/app/public' . $this->path . "/crop_{$w}x{$h}_" . $this->file_name;
    
    }
}
