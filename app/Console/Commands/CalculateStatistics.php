<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CalculateStatistics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'statistics:calculateStatistics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'log count';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      
      $sql="SELECT date(visit_date) as visitdate ,JSON_EXTRACT(`params`, '$.geolocation.display') as country, count(*) total_visit FROM `logs` GROUP by JSON_EXTRACT(`params`, '$.geolocation.display'),DATE(visit_date)";

        $visitors = DB::select($sql);
       
        Cache::put('visitors', $visitors);
        
        return 0;
    }
}
