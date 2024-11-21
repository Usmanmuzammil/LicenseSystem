<?php

namespace App\Http\Controllers;

use App\Models\PunjabLicense;
use Illuminate\Http\Request;
use App\Models\License;

class SearchController extends Controller
{
    // public function search(Request $request)
    // {
    //     $request->validate([
    //         'cnic' => 'required',
    //     ]);

    //     $license = License::where('cnic', $request->cnic)->first();

    //     if (!$license) {
    //         return redirect()->back()->with('error', 'No license found for the provided CNIC.');
    //     }

    //     return view('license-card', compact('license'));
    // }

    public function search(Request $request)
    {
        $request->validate([
            'cnic' => 'required',
        ]);

        $license = PunjabLicense::where('cnic', $request->cnic)->first();

        if (!$license) {
            return redirect()->back()->with('error', 'No license found for the provided CNIC.');
        }

        return view('punjab-license-card', compact('license'));
    }
}
