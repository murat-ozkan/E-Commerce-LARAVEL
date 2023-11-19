<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function createcontact(Request $request)
    {
        $data = $request->all();
        $data['ip'] = $request->ip();
        $newRecord = Contact::create($data);
        return back()->withSuccess('data successfully recorded');
        // return back()->with(['message'=>'data successfully recorded']);
    }
}
