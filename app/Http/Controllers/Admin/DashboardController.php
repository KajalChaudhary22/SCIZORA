<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $encrypted = $request->query('ty');
        try {
            $decryptedRoute = custom_decrypt($encrypted);
        
            if ($decryptedRoute !== 'admin.dashboard') {
                abort(403, 'Invalid route access.');
            }
        
            // Continue your logic
            return view('admin.dashboard.dashboard');
        
        } catch (\Exception $e) {
            Log::error('Wrong URL Access: ' . $e->getMessage());
            abort(403, 'Wrong URL Access.');
        }
        
    }
}
