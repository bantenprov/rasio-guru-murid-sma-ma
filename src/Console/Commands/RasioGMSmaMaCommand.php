<?php namespace Bantenprov\RasioGMSmaMa\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RasioGMSmaMaCommand class.
 *
 * @package Bantenprov\RasioGMSmaMa
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmaMaCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rasio-guru-murid-sma-ma';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RasioGMSmaMa package';

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
        $this->info('Welcome to command for Bantenprov\RasioGMSmaMa package');
    }
}
