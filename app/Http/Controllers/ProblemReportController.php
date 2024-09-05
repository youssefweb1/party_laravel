<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProblemReport;

class ProblemReportController extends Controller
{
    /**
     * Store a newly created problem report in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ProblemReport::create($validatedData);

        return redirect()->back()->with('success', 'Your report has been submitted.');
    }
}