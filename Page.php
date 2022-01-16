<?

    /**
     * Класс данных для страницы
     */
    class Page
    {
        public int $code;
        public string $name;
        public string $scripts;
        public string $styles;
        public string $view;

        /**
         * @param int $code
         * @param string $name
         */
        public function __construct(int $code, string $name)
        {
            $this->name = $name;
            $this->code = $code;
            $this->scripts = external_scripts(actual_bundle_path("dist/js", $name));
            $this->styles = styles_by_mode($name);
            $this->view = "pages/$name.tpl";
        }

        /**
         * @param string $name
         * @return Page
         */
        public static function code200(string $name): Page
        {
            return new Page(200, $name);
        }

        /**
         * @return Page
         */
        public static function code404(): Page
        {
            return new Page(404, "404");
        }

        /**
         * @return Page
         */
        public static function code415(): Page
        {
            return new Page(415, "415");
        }
    }