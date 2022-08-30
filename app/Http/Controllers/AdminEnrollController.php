<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class AdminEnrollController extends Controller
{
    private $enrolls;
    private $message;
    public function manageEnroll ()
    {
        $this->enrolls = Enroll::orderBy('id', "DESC")->get();
        return view('admin.enroll.manage', [
            'enrolls' => $this->enrolls,
        ]);
    }

    public function updateStatus ($id)
    {
        Enroll::updateEnrollStatus($id);
        return redirect()->back()->with('message', $this->message);
    }
}
