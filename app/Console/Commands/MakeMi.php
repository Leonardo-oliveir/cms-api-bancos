<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeMi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makeMi {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria migration auto';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle($id): int
    {
        return dd($id);
    }
}
