<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCompleteProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (! $request->user() ) {
            return redirect()->route("login")->with(["message" => "You must be logged in to access that page."]);
        }

        $user = $request->user();

        if (!isset($user->first_name) || !isset($user->last_name) || !isset($user->phone) || !isset($user->birthdate) || !isset($user->civil_status)) {
            return redirect()->route("profile")->with(["message" => "Complete your profile first to access that page."]);
        }

        $address = $user->address;

        if (!isset($address) || !isset($address->address_line_1) || !isset($address->region_id) || !isset($address->province_id) || !isset($address->municipality_id) || !isset($address->barangay_id)) {
            return redirect()->route("profile")->with(["message" => "Complete your profile first to access that page."]);
        }

        return $next($request);
    }
}
