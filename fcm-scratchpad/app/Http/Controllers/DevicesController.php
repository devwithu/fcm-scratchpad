<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic.once');
    }

    public function upsert(Request $request)
    {
        // 사용자 인증 기능을 구현하지 않았으므로 하드코드로 사용자를 지정해주었다.
        // $user = User::find(1);
        $user = $request->user();

        $device = $user->devices()
            ->whereDeviceId($request->device_id)->first();

        $input = $request->all();

        if (! $device) {
            $device = $user->devices()->create($input);
        } else {
            $device->update($input);
        }

        return $device;
    }
}
