<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;

class InstallOrchidCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orchid:install-custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Orchid without name column check';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        // Отключаем проверку столбца "name"
        Schema::disableForeignKeyConstraints();

        // Выполняем команду orchid:install
        $this->call('orchid:install');

        // Включаем проверку столбца "name"
        Schema::enableForeignKeyConstraints();
    }
}
