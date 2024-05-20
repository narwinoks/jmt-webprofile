<?php

namespace App\Http\Middleware;

use App\Models\Menu;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoadContentMiddeware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $profile = Menu::where('status_enabled', true)
            ->where('menu_id', null)
            ->with('children')
            ->get();
        $profileSession = $request->session()->get('profile');

        if ($profile && !$profileSession) {
            $request->session()->put('profile', $profile->toJson());
            Log::info("Update Menu: " . json_encode($profile, JSON_PRETTY_PRINT));
            Log::info("User: " . json_encode(['user' => getHostByName(getHostName()), 'pc' => gethostname()], JSON_PRETTY_PRINT));
        }

        return $next($request);
    }
}
