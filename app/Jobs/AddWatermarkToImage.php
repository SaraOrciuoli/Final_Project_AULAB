<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class AddWatermarkToImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        if (!$i) {
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        $image = SpatieImage::load($srcPath);
        $image->watermark(base_path('resources/img/logo-w.png'))
            ->watermarkPosition(Manipulations::POSITION_TOP_LEFT)
            ->watermarkPadding(5, 5, Manipulations::UNIT_PERCENT)
            ->watermarkWidth(650, Manipulations::UNIT_PIXELS)
            ->watermarkHeight(650, Manipulations::UNIT_PIXELS)
            ->watermarkFit(Manipulations::FIT_CROP);

        $image->save($srcPath);
}
}
