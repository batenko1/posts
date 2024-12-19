<?php

namespace Batenko1\Posts\Console\Commands;

use Illuminate\Console\Command;

class PostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ask = $this->ask('Начать установку? (да/нет)');

        if (strtolower($ask) === 'да') {
            $this->info('Установка началась...');
            // Ваш код для выполнения установки
        } else {
            $this->warn('Установка отменена.');
        }

    }
}
