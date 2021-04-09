<?php
    namespace App\Service;
    class UserService
    {
        public function getInfoById(int $id)
        {
            $abc = 19;
            $abc += $id;
            return $abc;
        }
    }
?>