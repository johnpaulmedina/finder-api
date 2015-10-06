<?php

namespace Healthcare\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Healthcare;

class GetQuotesCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'healthcare:get-quotes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'HealthCare.gov API: Quotes Lookup and XML Response';

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
        \Healthcare::getQuote($this->argument('zipcode'),$this->argument('dob'),$this->argument('gender'),$this->argument('relation'),$this->argument('effectiveDate'),$this->argument('pageNumber'),$this->argument('pageSize'));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return array(
            array('zipcode', InputArgument::REQUIRED, 'Enter a zipcode to lookup.'),
            array('dob', InputArgument::REQUIRED, 'Enter a dob for applicant'),
            array('gender', InputArgument::REQUIRED, 'Enter a gender for applicant'),
            array('relation', InputArgument::REQUIRED, 'Enter a relation for applicant'),
            array('effectiveDate', InputArgument::REQUIRED, 'Enter a effective date for applicant'),
            array('pageNumber', InputArgument::REQUIRED, 'Enter a page number'),
            array('pageSize', InputArgument::REQUIRED, 'Enter a page size'),
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
