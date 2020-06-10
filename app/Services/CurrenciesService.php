<?php

namespace App\Services;

use App\Currency;
use DateTime;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;

class CurrenciesService implements CurrenciesServiceInterface
{
    public function update(): void
    {
        Currency::truncate();

        $feed = Feeds::make('https://www.bank.lv/vk/ecb_rss.xml');
        $data = ['items' => $feed->get_items()];

        for ($j = 0; $j < count($data['items']); $j++) {
            $items = explode(' ', $data['items'][$j]->get_description());

            for ($i = 0; $i < count($items) - 1; $i = $i + 2) {

                $val = strtotime($data['items'][$j]->get_date());
                $ts = $val;
                $date = DateTime::createFromFormat('U', $ts);

                Currency::create([
                    'name' => $items[$i],
                    'value' => $items[$i + 1],
                    'date' => $date
                ]);
            }
        }
    }
}
