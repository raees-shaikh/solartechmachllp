<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ProjectSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates Required Folders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('storage:link');
        $this->info('Storage has been linked.');
        $this->info('creating required directories.');
        Storage::disk('public')->makeDirectory('images');
        $this->line('...');
        Storage::disk('public')->makeDirectory('images/products');
        $this->line('...');
        Storage::disk('public')->makeDirectory('images/products/gallery');
        $this->line('...');
        Storage::disk('public')->makeDirectory('images/offers');
        $this->line('...');
        Storage::disk('public')->makeDirectory('images/exhibition');
        $this->line('...');
        Storage::disk('public')->makeDirectory('data');
        $this->info('required directories created.');
    }
}
