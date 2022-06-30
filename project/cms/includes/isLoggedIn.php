<?php
    if(!issest($_SESSION) || empty($_SESSION['token'])){
        redirect("./");
    }