<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $data = Company::all();
        return $this->sendResponse($data, 'All Company see Easily');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
           ]); 
           if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $input = $request->all();
        $company = Company::create($input);
        return $this->sendResponse($company, 'Company Data Created Successfully');
        }
    

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findorFail($id);
        return $this->sendResponse($company, 'Company Data Fetched Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required',
            
          ]);
          if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $company = Company::findorFail($id);
        $company->update([
            'name' => $request->name,
            
        ]);
        return $this->sendResponse($company , 'Company Data Updated Successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findorFail($id)->delete();
        return $this->sendResponse($company , 'Company Data Deleted Permanently!');
    }
}
