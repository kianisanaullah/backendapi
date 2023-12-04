<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getPreferences(Request $request)
    {
        $user = auth()->user();
        return response()->json([
            'data' => [
                'preferences' => $user->preferences,
                'user' => $user,
            ],
        ], 200);
    }

    public function savePreferences(Request $request)
    {
        $user = auth()->user();

        $preferences = Preference::updateOrCreate(
            ['user_id' => $user->id],
            $request->all()
        );

        return response()->json(['message' => 'Preferences saved successfully']);
    }
}
