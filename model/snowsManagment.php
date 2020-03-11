<?php
require_once 'dbConnector.php';
function get_snows()
{

    $query = "SELECT code, brand, model, snowLength, qtyAvailable, description, dailyPrice, photo FROM snows";

    $snows = executeQuerySelect($query);

    return $snows;





    /* var_dump($TestSnows);
    if ($TestSnows == true)
    {
        return true;
    }else{
        return false;
    }*/
}
