<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Str;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::authenticateUsing(function (Request $request) {
            $emailLogin = Str::lower($request->email);
            $user = User::where('email', $emailLogin)->where('active','1')->first();
            $n = User::where('email', $emailLogin)->count();
            $n_active = User::where('email', $emailLogin)->where('active','1')->count();

            if($n > 0){
                if($n_active > 0){
                    if ($user && Hash::check($request->password, $user->password)) {
                        return $user;
                    }else{
                        $request->session()->flash('error-login', 'รหัสผ่านไม่ถูกต้อง');
                        $request->session()->flash('login-email',$request->email);
                        return false;
                    }
                }else{
                    $request->session()->flash('error-login', 'อีเมลยังไม่ได้รับการอนุมัติ');
                    $request->session()->flash('login-email',$request->email);
                    return false;
                }
            }else{
                $request->session()->flash('error-login', 'ไม่พบอีเมลผู้ใช้');
                $request->session()->flash('login-email',$request->email);
                return false;
            }
        });
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
