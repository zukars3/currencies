<?php

namespace App\Http\Controllers;

use App\Currency;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CurrenciesController extends Controller
{
    public function index(): View
    {
        $previousDay = Carbon::createFromTimestamp(strtotime('last weekday ' . Carbon::now()));
        $currencies = Currency::date($previousDay->format('Y-m-d'))
            ->simplePaginate(20);

        return view('home', ['currencies' => $currencies]);
    }

    public function distinctCurrency(Request $request): View
    {
        $currency = $request->get('currency');
        $currencies = Currency::name($currency)->get();
        return view('currency', ['currencies' => $currencies]);
    }
}
