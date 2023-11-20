<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function createcontact(ContentFormRequest $request) //? Request yerine artık ContentFormRequest çalışacak
    {
        //? ******** Bu kısmı ContentFormRequest dosyasına taşıdık. Görüntü kirliliği olmasın diye.
        // $validatedData = $request->validate([
        //     'name' => 'required|string|min:3',
        //     'email' => 'required|email',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ], [
        //     'name.min' => 'Must be 3 chars at least',
        //     'subject.required' => 'Subject can not be empty' //! Bu şekilde özel mesajlar alınabilir.
        // ]);
        //? ******** Bu kısmı ContentFormRequest dosyasına taşıdık. Görüntü kirliliği olmasın diye.



        $data = $request->all();
        $data['ip'] = $request->ip();

        $newRecord = Contact::create($data);
        return back()->withSuccess('data successfully recorded');
        // return back()->with(['message'=>'data successfully recorded']);
    }
}
