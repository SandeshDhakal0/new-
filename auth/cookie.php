<?php
    //long period of time store
    // cookie unless mature
    // self destroy when gets matured
    // client side storage
    // less secure
    // remember me is an example of cookie implementation

// set cookie
    setcookie('name', 'Sandesh Dhakal', time()+864000,'/');
// read cookie
     echo $_COOKIE['name'];
// to delete cookie
    setcookie('name','',time()-60,'./');

