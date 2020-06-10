<?php

namespace App\Console\Commands;

use App\Services\CurrenciesService;
use App\Services\CurrenciesServiceInterface;
use Illuminate\Console\Command;

class updateCurrencies extends Command
{
    protected $signature = 'currencies:update';

    protected $description = 'Gets latest currencies from https://www.bank.lv/vk/ecb_rss.xml';

    private CurrenciesServiceInterface $currenciesService;

    public function __construct(CurrenciesService $currenciesService)
    {
        parent::__construct();
        $this->currenciesService = $currenciesService;
    }

    public function handle(): void
    {
        $this->currenciesService->update();
        $this->info('Currencies updated');
    }
}
