<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

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
        $src_path = storage_path() . '/app/public/' . $this->path . '/' . $this->file_name;
        $dest_path = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->file_name;
    
        $cropped_image = Image::load($src_path)
                        ->crop(Manipulations::CROP_CENTER, $w , $h)
                        ->save($dest_path);
    }
}
