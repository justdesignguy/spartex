<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ContactRequestExport;
use App\Exports\NewslettersExport;
use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use App\Models\Newsletter;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UserController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users.index', compact('users'));
    }

    public function export(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function userDetails($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::findOrFail($id);
        return view('admin.users.user_detail', compact('user'));
    }

    public function newsletterList(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = Newsletter::orderBy('id', 'DESC')->get();
        return view('admin.users.newsletters', compact('users'));
    }

    public function newsletterExport(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return Excel::download(new NewslettersExport, 'newsletters.xlsx');
    }

    public function contactRequestList(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $users = ContactRequest::orderBy('id', 'DESC')->get();
        return view('admin.users.contact_requests', compact('users'));
    }

    public function contactRequestExport(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return Excel::download(new ContactRequestExport, 'contact_requests.xlsx');
    }

    public function contactRequestDetails($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $request = ContactRequest::findOrFail($id);
        return view('admin.users.contact_request_detail', compact('request'));
    }
}
