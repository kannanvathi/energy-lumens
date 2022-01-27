<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryStoreRequest;
use App\Models\enquiry_data;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function saveData(EnquiryStoreRequest $request){
        enquiry_data::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'message' => $request->message
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'message' => $request->message
        ];

        \Mail::to('bharathikannanp@dckap.com')->send(new \App\Mail\EnquiryMail($details));

        return response()->json([ 'success' => 'Form Submitted Successfully']);

    }

    public function getEnquiryData(){

        $enquiry_datas = enquiry_data::all();
        return view('enquiry.list', compact('enquiry_datas'));

    }
}
