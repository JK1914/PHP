<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Exceptions\OlegException;


class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lesson:3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        throw new OlegException();     
        print "Hello console!";
    }
}
