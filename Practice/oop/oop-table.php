<?php
    include_once "table-class.php";
    include_once "table-oop.php";

    use TableClass;
    use TableOop as Ooptable;

    $table = new TableClass\Table;
    $new_table = new TableOop\Table;
    