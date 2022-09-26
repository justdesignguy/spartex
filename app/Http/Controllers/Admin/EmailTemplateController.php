<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $templates = EmailTemplate::all();
        return view('admin.email_templates.index', compact('templates'));
    }

    public function edit($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $template = EmailTemplate::findOrFail($id);
        if (isset($template)){
            return view('admin.email_templates.edit', compact('template'));
        }
        return redirect()->back()->with('error', 'Invalid Request');
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $template = EmailTemplate::where('id', $id)->first();
        $requestData = $request->except('_token');
        $template->update($requestData);
        return redirect()->route('admin.email_templates')->with('success', 'Data Updated Successfully.');
    }
}
