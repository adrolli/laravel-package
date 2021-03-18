<?php

namespace TallUI\TalluiPackage\Commands;

use Illuminate\Console\Command;

class TalluiPackageCommand extends Command
{
    public $signature = 'tallui-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
