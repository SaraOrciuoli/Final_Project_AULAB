<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    protected $casts = [
        'labels' =>'array'
    ];

    public function announcement(){
        return $this->belongsTo(Announcement::class);
    }

    public static function getUrlFilePath($file_path , $w = null , $h = null){
        if(!$w && !$h) {
            return Storage::url($file_path);
        }
        $path = dirname($file_path);
        $file_name = basename($file_path);
        $file ="{$path}/crop_{$w}x{$h}_{$file_name}";

        return Storage::url($file);
    }
    
    public function getUrl($w = null , $h = null){
        return Image::getUrlFilePath($this->path, $w , $h);
    }
    
    
}