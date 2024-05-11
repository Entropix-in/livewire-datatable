<?php

namespace Entropix\LivewireDatatable\Commands;

use Illuminate\Console\Command;

class LivewireDatatableCommand extends Command
{
    public $signature = 'livewire-datatable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
