<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class checkDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:Product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check_product';

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
//        $results = DB::select('select * from products');
        $results = Product::all();
        $this->info($results[0]->name);
    }
}
