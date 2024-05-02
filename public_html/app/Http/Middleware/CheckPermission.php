<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckPermission
{
    public function handle(Request $request, Closure $next, ...$permissions)
    {
        $user = Auth::user();

        if ($user && $user->status == 1) { // Active user
            foreach ($permissions as $permission) {
                switch ($permission) {
                    case 'ADMIN':
                        if ($user->classification_id == User::ADMIN) {
                            return $this->checkAndRedirect($user, $next, $request, 'ADMIN');
                        }
                        break;

                    case 'CASHIER':
                        if ($user->classification_id == User::CASHIER) {
                            return $this->checkAndRedirect($user, $next, $request, 'CASHIER');
                        }
                        break;
                }
            }
        }

        return redirect('/login');
    }

    private function checkAndRedirect($user, $next, $request, $role)
    {
        if ($user->default_password == 1) {
            if ($request->is('change-password')) {
                // If the route is /change-password, allow access without checking the default password
                return $next($request);
            } else {
                return redirect('/change-password');
            }
        } else {
            return $next($request);
        }
    }
}
