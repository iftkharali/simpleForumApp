<?php
namespace App\Traits;
 
use Illuminate\Http\Request;
 
trait SaveImage {
 
    /**
     * Does very basic image validity checking and stores it. Redirects back if somethings wrong.
     * @Notice: This is not an alternative to the model validation for this field.
     *
     * @param Request $request
     * @return $this|false|string
     */
    public function verifyAndUpload($request, $folder) 
    {
        $destinationPath = storage_path($folder);
        $file = $request->file('image');
        $file->move($destinationPath,$file->getClientOriginalName());
        return $file->getClientOriginalName();

    }
 
}

