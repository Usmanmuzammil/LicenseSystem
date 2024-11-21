<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\License;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class LicenseController extends Controller
{
    public function index(Request $request)
    {
        
        $title = 'Delete License!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        if ($request->ajax()) {
            $data = License::all();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return  $row->created_at->format('d-m-Y');
                })
               
                ->addColumn('action', function($row){
                    $viewUrl = route('admin.user.view', $row->id);
                    $editUrl = route('admin.user.edit', $row->id);
                    $deleteUrl = route('admin.user.destroy', $row->id);
    
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
    
        return view('backend.license.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.license.create',compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name'=>'required|string',
            'father_or_husband'=>'required|string',
            'license_no'=>'required',
            'category'=>'required',
            'dob'=>'required',
            'issue_date'=>'required',
            'valid_upto'=>'required',
            'cnic'=>'required',
            'address'=>'required',
            'blood_group'=>'required',
            'identification_mark'=>'required',
            'old_dl'=>'required',
            'status'=>'required',
            'remarks'=>'required',
            'image'=>'required',
        ]);

        if($request->has('image')){
            $file =  $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/backend/uploads/image',$fileName);
            $image = 'assets/backend/uploads/image/'.$fileName;
        }
          License::create([
            'name' =>$request->name,
            'father_or_husband' =>$request->father_or_husband,
            'license_no' =>$request->license_no,
            'category' =>$request->category,
            'dob' =>$request->dob,
            'issue_date' =>$request->issue_date,
            'valid_upto' =>$request->valid_upto,
            'cnic' =>$request->cnic,
            'address' =>$request->address,
            'blood_group' =>$request->blood_group,
            'identification_mark' =>$request->identification_mark,
            'old_dl' =>$request->old_dl,
            'status' =>$request->status,
            'remarks' => $request->remarks,
            'image' => $image,
        ]);

       
        toast('License created successfully.','success');
        return redirect()->route('admin.user.index');
    }


    public function edit($id)
    {
        $license = License::findOrFail($id);
        $categories = Category::all();


        if(!$license){
            toast('No license found','error');
            return redirect()->back();
        }

        return view('backend.license.edit',compact('license','categories'));
    }

    public function view($id)
    {
        $license = License::findOrFail($id);

        if(!$license){
            toast('No license found','error');
            return redirect()->back();
        }

        return view('backend.license.view',compact('license'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
           'name'=>'required|string',
            'father_or_husband'=>'required|string',
            'license_no'=>'required',
            'category'=>'required',
            'dob'=>'required',
            'issue_date'=>'required',
            'valid_upto'=>'required',
            'cnic'=>'required',
            'address'=>'required',
            'blood_group'=>'required',
            'identification_mark'=>'required',
            'old_dl'=>'required',
            'status'=>'required',
            'remarks'=>'required',


        ]);
        $license = License::find($id);
        if(!$license){
            toast('No license found','error');
            return redirect()->back();
        }
        if($request->hasFile('image')){
            $file =  $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $uploadPath = 'assets/backend/uploads/image';
            $image = 'assets/backend/uploads/image/'.$fileName;
            $file->move($uploadPath,$fileName);
        

        if($license->image && file_exists($uploadPath.'/'.$license->image)){
            unlink($uploadPath.'/'.$license->image);
        }

        $license->image = $image;
        }


        $license->update([
            'name' =>$request->name,
            'father_or_husband' =>$request->father_or_husband,
            'license_no' =>$request->license_no,
            'category' =>$request->category,
            'dob' =>$request->dob,
            'issue_date' =>$request->issue_date,
            'valid_upto' =>$request->valid_upto,
            'cnic' =>$request->cnic,
            'address' =>$request->address,
            'blood_group' =>$request->blood_group,
            'identification_mark' =>$request->identification_mark,
            'old_dl' =>$request->old_dl,
            'status' =>$request->status,
            'remarks' => $request->remarks,

        ]);
        toast('User updated successfully','success');

        return redirect()->route('admin.user.index');
    }


    public function destroy($id)
    {
        $license = License::find($id);
        if(!$license){
            toast('No License found','error');
            return redirect()->back();
        }

        if($license->image && file_exists($license->image)){
            unlink($license->image);
        }
       
        $license->delete();
        toast('License deleted successfully','success');

        return redirect()->route('admin.user.index');
    }


    public function  printCard($id)
    {
        $license = License::find($id);
        if(!$license){
            toast('No License found','error');
            return redirect()->back();
        }
        return view('backend.license.print',compact('license'));
    }


    // public function deleteAll(Request $request)
    // {
    //     $ids = $request->input('ids'); // Get the IDs from the request

    //     // Delete the users with the specified IDs
    //     License::destroy($ids);
    //     toast('success','Records deleted successfully.');
    //     return redirect()->back();
    // }


    
}
