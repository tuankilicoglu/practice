<?php
if(@$_GET['sayfa'] == 'iletisim')
{
    include('iletisim.php');
}
else if(@$_GET['sayfa'] == 'hakkimizda')
{
    include('hakkimizda.php');
}
else 
{
    include('anasayfa.php');

    //xfhdxfhzgxmgfx
}
