<?php
/**
 * Created by PhpStorm.
 * User: szl
 * Date: 16-7-18
 * Time: 下午5:35
 */
require 'vendor/autoload.php';
class AndroidUnitAction extends Yaf\Action_Abstract
{

    public function execute()
    {
        $client_id = $_COOKIE['sixpack_client_id'];
        $sp      = new \SeatGeek\Sixpack\Session\Base( array( 'clientId' => $client_id ) );
        $alt     = $sp->participate( 'split', array( 'old', 'new' ) )->getAlternative();

        if( $alt == 'old' ){
            echo 'old';
        }else{
            echo 'new';
        }
        return false;
    }
}