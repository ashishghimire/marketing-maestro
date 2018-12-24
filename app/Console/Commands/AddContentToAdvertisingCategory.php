<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Marketing\AdvertisingCategory;


class AddContentToAdvertisingCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:advertisingcategory';
//command name
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add New Category Hourly';
//command description
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
     * @return mixed
     */
    public function handle()
    {
        $add_cat=new AdvertisingCategory();
               
               $add_cat->title='test';
               $add_cat->slug='uoop-aaa';
            $add_cat->save();
     
    }
}
