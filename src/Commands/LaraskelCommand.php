<?php

namespace MCDev\Laraskel\Commands;

use Illuminate\Console\Command;

class LaraskelCommand extends Command
{
    public $signature = 'Laraskel';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
