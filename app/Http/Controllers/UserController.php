<?php
namespace App\Http\Controllers;

use App\Models\NrClass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //Index Utama
    public function index(Request $request)
    {
        dd($request->all());
        $data = User::paginate(10);
        return view('managemen_akun', compact('data'));
    }
    public function managementAkun()
    {
        $data = User::paginate(10);
        return view('admin.UserManagement.index', compact('data'));
    }
    //Data Guru
    public function dataGuru()
    {
        $data = User::where('role_id', 3)->paginate(10);
        return view('admin.Guru.index', compact('data'));
    }
    //Data Siswa
    public function dataSiswa()
    {

        $data = User::where('role_id', 2)->paginate(10);
        return view('admin.Siswa.index', compact('data'));
    }

    public function create()
    {
        $classes = NrClass::all();
        return view('admin.UserManagement.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'role_id'    => 'required|in:2,3',
            'class_id'   => 'nullable|exists:nr_class,id',
            'password'   => 'required|min:6|confirmed',
            'phone'      => 'nullable|numeric',
            'status'     => 'nullable|string',
            'birth_date' => 'nullable|date',
            'address'    => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('user_images', 'public');
        }

        User::create([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'role_id'               => $request->role_id,
            'class_id'              => $request->class_id,
            'password'              => Hash::make($request->password),
            'identification_number' => $this->generateUniqueID(),
            'phone'                 => $request->phone,
            'status'                => $request->status,
            'birth_date'            => $request->birth_date,
            'address'               => $request->address,
            'image_path'            => $imagePath,
        ]);

        return redirect()->route('account.management')->with('success', 'User berhasil ditambahkan.');
    }

    private function generateUniqueID()
    {
        do {
            $id = mt_rand(100000, 999999);
        } while (User::where('identification_number', $id)->exists());

        return $id;
    }

    public function edit(User $user)
    {
        $classes = NrClass::all();
        return view('admin.UserManagement.edit', compact('user', 'classes'));
    }

    public function show(string $id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'nullable',
        'status' => 'required',
        'birth_date' => 'nullable|date',
        'address' => 'nullable|string',
        'image_path' => 'nullable|image|max:2048',
        'role_id' => 'required',
        'class_id' => 'nullable|exists:nr_class,id',
        'password' => 'nullable|confirmed|min:6',
    ]);

    if ($request->hasFile('image_path')) {
        if ($user->image_path) {
            Storage::delete('public/' . $user->image_path);
        }
        $validated['image_path'] = $request->file('image_path')->store('uploads/users', 'public');
    }

    if ($request->filled('password')) {
        $validated['password'] = Hash::make($request->password);
    } else {
        unset($validated['password']);
    }

    $user->update($validated);

    return redirect()->route('data.siswa')->with('success', 'User berhasil diperbarui.');
}

    public function destroy(User $user)
    {
        if ($user->image_path && Storage::disk('public')->exists($user->image_path)) {
            Storage::disk('public')->delete($user->image_path);
        }

        $user->delete();

        return redirect()->route('account.management')->with('success', 'User berhasil dihapus.');
    }
}
