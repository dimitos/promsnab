<?
    /**
     * Класс данных для метатегов
     */
    class Meta
    {
        public string $title = "ПромТеплоСнаб | Трубы ППУ и фасонные изделия";
        public string $description = "На заводе производятся трубопроводы в пенополиуретановой изоляции, которые предназначаются для воздушной и подземной бесканальной прокладки тепловых сетей.";
        public string $keywords = "ПромТеплоСнаб";
        public string $image = "/img/og-image.png";
        public string $url;
        public string $host;

        /**
         * Meta constructor
         */
        public function __construct()
        {
            $this->url = get_current_url(false);

            $url_parts = parse_url($this->url);
            $this->host = $url_parts["host"];
        }

    }
