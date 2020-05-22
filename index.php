<?php
require __DIR__."/vendor/autoload.php";

use Devscreencast\ResponseClass\JsonResponse;


$student = array('name'=>'Moha','course'=>'PHP','level'=>'basic');

new JsonResponse('ok','',$student);
