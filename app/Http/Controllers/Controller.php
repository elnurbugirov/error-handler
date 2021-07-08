<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiHandlerTrait;
use App\Http\Traits\Helpers\ApiResponseTrait;
use App\Models\blog;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ApiHandlerTrait;

    public function err(){
       $user = User::findOrFail(1);
       if($user == true){
           return $this->successResponse($user);
       }
       else{
           return  $this->errorResponse($user);
       }

    }
}
