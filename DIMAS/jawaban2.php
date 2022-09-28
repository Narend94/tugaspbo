<?php
    class toko_beras{
        public $harga="1500000";

        public function __construct()
        {
            echo "ini berasal dari consrtuct toko_beras <br/>";
        }
        public function __destruct()
        {
            echo "ini berasal dari destruct toko_beras";
        }
    }
        $toko_beras = new toko_beras();