<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Mail\AccountApproved;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $usersPerPage = 10;
        $totalUsers = User::count();
        $totalPages = ceil($totalUsers / $usersPerPage);
        $currentPage = request()->page ?? 1;

        $query = User::query()->latest();

        if (request()->filled('search')) {
            $search = request()->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('username', 'LIKE', '%' . $search . '%')
                    ->orWhere('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%');
            });
        }

        $users = $query->skip(($currentPage - 1) * $usersPerPage)->take($usersPerPage)->get();

        return view('dashboard.sidebar.menukelola.userdate', compact('users',  'currentPage', 'totalPages'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = new Notification();
        $notification->model()->associate($user); // Menghubungkan dengan model Post
        $notification->content = 'has been deleted.';
        $notification->save();

        return redirect()->route('userdate')->withSuccess('Pengguna berhasil dihapus.');
    }

    public function getNewUsersCount()
    {
        $today = Carbon::today();
        $newUsersCount = User::whereDate('created_at', $today)->count();

        return view('dashboard', compact('newUsersCount'));
    }

    public function edit_profile()
    {
        // $user = Auth::user();
        // return view('profile-edit', compact('user'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }

    public function update_profile(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|min:5|max:50|regex:/^[a-zA-Z\s]+$/',
            'job' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|regex:/^[+0-9\s]+$/|max:20',
            'twitter_profile' => 'nullable|string|max:255',
            'facebook_profile' => 'nullable|string|max:255',
            'instagram_profile' => 'nullable|string|max:255',
            'linkedin_profile' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->setAttribute('username', $request->username);
        $user->fill($request->only(['name', 'job', 'address', 'phone', 'twitter_profile', 'facebook_profile', 'instagram_profile', 'linkedin_profile']));

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $allowedMimes = ['jpeg', 'png', 'jpg'];
            $validator = Validator::make($request->all(), [
                'image' => 'image|mimes:' . implode(',', $allowedMimes) . '|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $name = Str::slug($request->username) . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $name);
            $user->setAttribute('image', '/uploads/' . $name);
        }

        $user->save();

        return redirect()->route('profile')->withSuccess("Profile updated successfully.");
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate the input fields
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        // Check if the current password matches the user's stored password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('profile')->withSuccess("Password updated successfully.");
    }
}
