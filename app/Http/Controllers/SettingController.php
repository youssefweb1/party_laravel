<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class SettingController extends Controller
{
    /**
     * Display the settings page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        return view('setting', compact('user'));
    }

    /**
     * Update user profile information.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
// إضافة الحقول الجديدة في الدالة update
public function update(Request $request)
{
    $user = Auth::user();
    
    $validatedData = $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'phone' => 'required|string|max:20',
        'country' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'province' => 'required|string|max:255',
    ]);
    
    $user->update([
        'name' => $validatedData['full_name'],
        'email' => $validatedData['email'],
        'phone' => $validatedData['phone'],
        'country' => $validatedData['country'],
        'city' => $validatedData['city'],
        'province' => $validatedData['province'],
    ]);
    
    return redirect()->back()->with('success', 'Profile updated successfully.');
}

    
    /**
     * Update user profile image.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateImage(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }
    
            // Store new image
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->update(['photo' => $imagePath]);
        }
    
        return redirect()->back()->with('success', 'Profile picture updated successfully.');
    }

    /**
     * Delete user profile image.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteImage()
    {
        $user = Auth::user();

        if ($user->photo && Storage::disk('public')->exists($user->photo)) {
            Storage::disk('public')->delete($user->photo);
            $user->update(['photo' => null]);
        }

        return redirect()->back()->with('success', 'Profile picture deleted successfully.');
    }

    /**
     * Update the user's password.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function updatePassword(Request $request): JsonResponse
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not authenticated.'
            ], 401);
        }

        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($validatedData['old_password'], $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'The old password is incorrect.'
            ], 400);
        }

        $user->update(['password' => Hash::make($validatedData['new_password'])]);

        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully.'
        ]);
    }
}
