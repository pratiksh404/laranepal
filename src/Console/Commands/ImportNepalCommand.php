<?php

namespace Pratiksh\LaraNepal\Console\Commands;

use Illuminate\Console\Command;

class ImportNepalCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:nepal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to Seed Provinces, Districts and Municipalities of Nepal.';

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
        $this->call('vendor:publish', [
            '--tag' => ['laranepal-seed'],
        ]);
        $this->info('A star to the repo would be great. Thank You ! Jay Nepal');
    }
}
