<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor as TemplateProcessor;
use PhpOffice\PhpWord\Settings as Setting;

class MyController extends Controller
{
    public function generateDocument(Request $request)
    {
        Setting::setZipClass(Setting::PCLZIP);

        // Get the data to insert into the template
        $name = $request->input('name');
        $age = $request->input('age');
        $email = $request->input('email');
        $phone = $request->input('phone');

        // Load the template file
        $template = new TemplateProcessor(storage_path('app\my_template.docx'));
    
        // Replace the placeholders in the template with the data
        $template->setValue('name', $name);
        $template->setValue('age', $age);
        $template->setValue('email', $email);
        $template->setValue('phone', $phone);

        // Generate a new Word docx file with the replaced data
        $filename = 'my_document.docx';
        $template->saveAs(storage_path('app/' . $filename));
        
        // Download the new file
        return response()->download(storage_path('app/' . $filename))->deleteFileAfterSend();

    }
}
