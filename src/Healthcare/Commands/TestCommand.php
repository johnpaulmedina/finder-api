<?php

namespace Healthcare\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Healthcare;

class TestCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'healthcare:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test HealthCare.gov API Connection';

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
     * @return void
     */
    public function fire()
    {
        $baseUrl = \Healthcare::hostUrl();
        $this->line("\033[32mTesting initiation of {$baseUrl} php wrapper using zipcode: 33166\033[0m");
        \Healthcare::ZipCodeLookupTest('33166');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            // array('zipcode', InputArgument::REQUIRED, 'Enter a zipcode to test.')
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
          
        );
    }

}
