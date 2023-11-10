<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function getData(Request $request)
    {

        $request = $request->all();

        $request = $request['user'];

        $email = $request['email'];
        $givenName = $request['given_name'];
        $name = $request['name'];
        $picture = $request['picture'];
        $jti = $request['jti'];
        $locale = $request['locale'];
        $userData = User::where('email', $email)->count();
        if($userData == null) {
          $user = new User([
            'email' => $email,
            'givenName' => $givenName,
            'name' => $name,
            'picture' => $picture,
            'jti' => $jti,
            'locale' => $locale
          ]);
         $user->save();
         return response()->json(['message' => 'User saved successfully', 'user' => $user], 201);
        }else{
            $user = User::where('email', $email)->first();
            return $user;
        }
    }
    public function getUser(Request $request)
    {
        $header = $request->header('Authorization');
        $token = str_replace('Token ', '', $header);
        if ($token != null) {
            $user = User::where('jti', $token)->first();
            return $user;
        }
    }


}
