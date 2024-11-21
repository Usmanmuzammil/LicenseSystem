<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PunjabLicense;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PunjabLicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $title = 'Delete License!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        if ($request->ajax()) {
            $data = PunjabLicense::all();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return  $row->created_at->format('d-m-Y');
                })
               
                ->addColumn('action', content: function($row){
                    $viewUrl = route('admin.punjablicense.view', $row->id);
                    $editUrl = route('admin.punjablicense.edit', $row->id);
                    $deleteUrl = route('admin.punjablicense.destroy', $row->id);
    
                    return '
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton'.$row->id.'" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton'.$row->id.'">
                                <li><a class="dropdown-item" href="'.$viewUrl.'"><i class="bi bi-eye"></i> View</a></li>
                                <li><a class="dropdown-item" href="'.$editUrl.'"><i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="'.$deleteUrl.'" data-confirm-delete="true"><i class="bi bi-trash3"></i> Delete</a></li>
                                
                            </ul>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('backend.punjablicense.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.punjablicense.create',compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $data = $this->validate($request, [
            'name' => 'required|string',
            'son_daughter_wife' => 'required|string',
            'license_no' => 'required|string',
            'issue_date' => 'required|date',
            'valid_till' => 'required|date',
            'cnic' => 'required|string',
            'dob' => 'required|date',
            'category_id' => 'required',
            'emergency_contact' => 'required',
            'blood_group' => 'required|string',
            'previous_license_number' => 'required',
            'passport_number' => 'required|string',
            'nationality' => 'required|string',
            'status' => 'required|boolean',
            'remarks' => 'nullable|string',
        ]);


        
        if($request->has('image')){
            $file =  $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/backend/uploads/image',$fileName);
            $image = 'assets/backend/uploads/image/'.$fileName;
        }
    
        PunjabLicense::create([
            'license_no' => $request->license_no,
            'name' => $request->name,
            'son_daughter_wife' => $request->son_daughter_wife,
            'address' => $request->address,
            'issue_date' => $request->issue_date,
            'valid_till' => $request->valid_till,
            'cnic' => $request->cnic,
            'dob' => $request->dob,
            'category_id' => $request->category_id,
            'emergency_contact' => $request->emergency_contact,
            'blood_group' => $request->blood_group,
            'previous_license_number' => $request->previous_license_number,
            'passport_number' => $request->passport_number,
            'nationality' => $request->nationality,
            'status' => $request->status,
            'remarks' => $request->remarks,
            'image' => $image,
        ]);

        // return 'successfully';
    
        toast('License created successfully.', 'success');
        return redirect()->route('admin.punjablicense.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $Punjablicense = PunjabLicense::findOrFail($id);

        if(!$Punjablicense){
            toast('No license found','error');
            return redirect()->back();
        }

        return view('backend.punjablicense.view',compact('Punjablicense'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        // $data = $this->validate($request, [
        //     'name' => 'required|string',
        //     'son_daughter_wife' => 'required|string',
        //     'license_no' => 'required|string',
        //     'issue_date' => 'required|date',
        //     'valid_till' => 'required|date',
        //     'cnic' => 'required|string',
        //     'dob' => 'required|date',
        //     'category_id' => 'required',
        //     'emergency_contact' => 'required',
        //     'blood_group' => 'required|string',
        //     'previous_license_number' => 'required',
        //     'passport_number' => 'required|string',
        //     'nationality' => 'required|string',
        //     'status' => 'required|boolean',
        //     'remarks' => 'nullable|string',
        // ]);
        
    
        // Find the license by its ID
        $license = PunjabLicense::findOrFail($id);
        // return $license;
        // Check if the request contains an image and update it
        if($request->has('image')) {
            // Delete the old image if it exists
            if (file_exists(public_path($license->image))) {
                unlink(public_path($license->image));
            }
    
            // Handle new image upload
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $ext;
            $file->move('assets/backend/uploads/image', $fileName);
            $image = 'assets/backend/uploads/image/' . $fileName;
        } else {
            // If no new image is uploaded, keep the old one
            $image = $license->image;
        }
    
        // Update the license record
        $license->update([
            'license_no' => $request->license_no,
            'name' => $request->name,
            'son_daughter_wife' => $request->son_daughter_wife,
            'address' => $request->address,
            'issue_date' => $request->issue_date,
            'valid_till' => $request->valid_till,
            'cnic' => $request->cnic,
            'dob' => $request->dob,
            'category_id' => $request->category_id,
            'emergency_contact' => $request->emergency_contact,
            'blood_group' => $request->blood_group,
            'previous_license_number' => $request->previous_license_number,
            'passport_number' => $request->passport_number,
            'nationality' => $request->nationality,
            'status' => $request->status,
            'remarks' => $request->remarks,
            'image' => $image,
        ]);
    
        // Show success message
        toast('License updated successfully.', 'success');
        return redirect()->route('admin.punjablicense.index');
    }
    

    public function  printCard($id)
    {
        $Punjablicense = PunjabLicense::find($id);
        if(!$Punjablicense){
            toast('No Punjablicense found','error');
            return redirect()->back();
        }
        return view('backend.Punjablicense.print',compact('Punjablicense'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function edit($id)
    {
        $license = PunjabLicense::findOrFail($id);
        $categories = Category::all();


        if(!$license){
            toast('No license found','error');
            return redirect()->back();
        }

        return view('backend.Punjablicense.edit',compact('license','categories'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Punjablicense = PunjabLicense::find($id);
        if(!$Punjablicense){
            toast('No PunjabLicense found','error');
            return redirect()->back();
        }

        if($Punjablicense->image && file_exists($Punjablicense->image)){
            unlink($Punjablicense->image);
        }
       
        $Punjablicense->delete();
        toast('PunjabLicense deleted successfully','success');

        return redirect()->route('admin.punjablicense.index');
    }

}
