<?php

    namespace App\Sheets;

    use Spatie\Sheets\Sheet;

    /**
     * @property mixed|null $slug
     */
    class Package extends Sheet
    {

        public function getUrlAttribute(): string
        {
            return url($this->slug);
        }

    }
