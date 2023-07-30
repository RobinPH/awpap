<?php

namespace App\Http\Middleware;

use App\Models\WebTraffic;
use Closure;
use Exception;
use Illuminate\Http\Request;

class WebTrafficLog
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);


        try {
            $ip_details = WebTrafficLog::getIpDetails($request->ip());

            WebTraffic::query()->create([
                "ip" => $request->ip(),
                "country" => $ip_details["country"],
                "city" => $ip_details["city"],
                "latitude" => $ip_details["latitude"],
                "longitude" => $ip_details["longitude"],
                "url" => $request->path(),
                "query" => $request->getQueryString(),
                "ref" => $request->input("ref", null) ?? $request->input("fbclid", null) ?? $request->input("gclid", null) ?? null,
                "user_agent" => $request->header("user-agent", null),
                "referer" => $request->header("referer", null),
            ]);
        } catch (Exception $e) {
            dd($e);
        } finally {
            return $response;
        }
    }

    private static function getIpDetails(string $ip) {
        $country = null;
        $city = null;
        $latitude = null;
        $longitude = null;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=" . $ip);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $ip_data_in = curl_exec($ch);
        curl_close($ch);

        // Parsing Geolocation Data
        $ip_data = json_decode($ip_data_in, true);
        $ip_data = str_replace('&quot;', '"', $ip_data);

        // Extracting Geolocation Information
        if ($ip_data && $ip_data['geoplugin_countryName'] != NULL) {
            $country = $ip_data['geoplugin_countryName'];
        }
        if ($ip_data && $ip_data['geoplugin_city'] != NULL) {
            $city = $ip_data['geoplugin_city'];
        }
        if ($ip_data && $ip_data['geoplugin_latitude'] != NULL) {
            $latitude = $ip_data['geoplugin_latitude'];
        }
        if ($ip_data && $ip_data['geoplugin_longitude'] != NULL) {
            $longitude = $ip_data['geoplugin_longitude'];
        }

        return [
            "country" => $country,
            "city" => $city,
            "latitude" => $latitude,
            "longitude" => $longitude,
        ];
    }
}
