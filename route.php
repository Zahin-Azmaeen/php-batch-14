<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;

$home = new Home();


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'about')
    {
        $home->about();
    }
    elseif ($_GET['page'] == 'contact')
    {
        $home->contact();
    }

    elseif ($_GET['page'] == 'login')
    {
        $home->login();
    }
    elseif ($_GET['page'] == 'register')
    {
        $home->register();
    }
    elseif ($_GET['page'] == 'gallery')
    {
        $home->gallery();
    }
    elseif ($_GET['page'] == 'portfolio')
    {
        $home->portfolio();
    }
}

elseif (isset($_POST['full_name_btn']))
{
    $fullName = new FullName($_POST);
    $fullName->getFullName();
}

elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $calculator->index();
}

elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $series->index();
}




