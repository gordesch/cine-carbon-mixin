<?php

namespace Gordesch;

use Carbon\Carbon;
use Carbon\Translator;

class CineCarbonMixin
{
    public function cine()
    {
        return function () {
            $locale_cinema = Carbon::getLocale() . '_cinema';
            $translator = Translator::get($locale_cinema);
            $translator->setTranslations(['first_day_of_week' => 3]);
            Carbon::setTranslator($translator);
            return $this->locale($locale_cinema);
        };
    }
}