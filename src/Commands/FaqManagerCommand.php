<?php

namespace Christyjoshy\FaqManager\Commands;

use Illuminate\Console\Command;

class FaqManagerCommand extends Command
{
    public $signature = 'faq-manager';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
