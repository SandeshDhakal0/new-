<?php
    final class Banner extends Database{
        use DataTrait; 

        function __construct()
        {
            parent::__construct();
            $this->table = "sliders";
        }
    }