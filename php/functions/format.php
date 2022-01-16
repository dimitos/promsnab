<?

    /**
     * Получаем цифры из строки
     * @param string $string
     * @return string
     */
    function numbers_from_str(string $string): string
    {
        return preg_replace("/[^0-9]/", "", $string);
    }

    /**
     * Нормализация номера телефона
     * @param string $phone_in
     * @param bool $is_first_8
     * @return string
     */
    function normalize_phone(string $phone_in, bool $is_first_8 = false): string
    {
        $prefix = 7;
        if ($is_first_8) {
            $prefix = 8;
        }

        $phone = numbers_from_str($phone_in);
        if (strlen($phone) >= 6) {
            if ((strlen($phone) == 11) && (substr($phone, 0, 1) == "8")) {
                $phone = $prefix . substr($phone, 1);
            } elseif (strlen($phone) == 10) {
                $phone = $prefix . $phone;
            }
        } else {
            $phone = "";
        }
        return $phone;
    }

    /**
     * Строка телефона в корректном формате
     * @param string $phone_in
     * @return string
     */
    function format_phone(string $phone_in): string
    {
        $phone = normalize_phone($phone_in);
        $prefix = "+7";
        $code = substr($phone, 1, 3);
        $part1 = substr($phone, 4, 3);
        $part2 = substr($phone, 7, 2);
        $part3 = substr($phone, 9, 2);

        return "{$prefix} ({$code}) {$part1}-{$part2}-{$part3}";
    }
