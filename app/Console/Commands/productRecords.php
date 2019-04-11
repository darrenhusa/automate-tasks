<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Product;


class productRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'drop:productRecords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drops all the records from the products table.';

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
        Product::truncate();

        echo "The products table has been successfully truncated"."\n";

    }
}
