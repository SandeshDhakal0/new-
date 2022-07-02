<?php
    final class Blog extends Database{
        use DataTrait; 
        function __construct()
        {
        parent::__construct();
        $this->table = "sliders";
        }
    }