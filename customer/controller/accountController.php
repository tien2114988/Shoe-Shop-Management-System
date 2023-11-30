<?php
class Account
{

    public function __construct()
    {

        require('../model/userModel.php');

        $userModel = new UserModel();
        if (isset($_GET['action'])) {
            echo "123";
            include_once "../view/account.php";
        }
    }

    public function getInformation()
    {
        echo "123";
    }
}
