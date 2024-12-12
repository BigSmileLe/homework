<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
}
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // استرجاع جميع المستخدمين من قاعدة البيانات
        $users = User::all();

        // تمرير البيانات إلى الـ View
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        // حفظ البيانات المدخلة من الفورم إلى قاعدة البيانات
        $user = new User();
        $user->name = $request->name;
        $user->save();

        // العودة إلى صفحة عرض المستخدمين بعد الحفظ
        return redirect()->route('users.index');
    }
}
