<?php

namespace Healthcare\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Healthcare;

class ZipCodeLookupCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'healthcare:zipcode-lookup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'HealthCare.gov API: ZipCode Lookup and XML Response';

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
        // $this->line('Testing initiation of '.\Healthcare::hostUrl().' php wrapper using zipcode: '.$this->argument('zipcode'));
        \Healthcare::ZipCodeLookupTest($this->argument('zipcode'));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('zipcode', InputArgument::REQUIRED, 'Enter a zipcode to lookup.')
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
