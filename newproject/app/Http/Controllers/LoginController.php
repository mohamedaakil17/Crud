<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store(Request $request)
    {
      $validatedData = $request->validate([
          'email'=>'required|email',
          'password'=>'required|min:6|max:12'
      ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email : '.$email.'Password : '.$password;
    }
}