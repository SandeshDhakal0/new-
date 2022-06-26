<?php
    namespace TableClass;
    class Table{
        public $title = "Title value";
        public $num_rows = 0;

        public function getMessage(){
            echo "Table".$this->title."has".$this->num_rows."rows.";
        }
    }

    class Row{
        public $num_col = 0;

        public function getMessage(){
            echo "The row has ".$this->num_col."columns";
        }
    }