<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\Prop\Property;
use App\Models\Prop\HomeType;
use App\Models\Prop\AllRequest;
use App\Models\Prop\PropImage;
use App\Models\Prop\SavedProp;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePropertyRequest;

class AdminsController extends Controller
{
    public function viewLogin()
    {

        return view('admins.login');
    }

    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect()->route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index()
    {
        $adminsCount = Admin::select()->count();
        $propsCount = Property::select()->count();
        $hometypesCount = HomeType::select()->count();

        return view('admins.index', compact('adminsCount', 'propsCount', 'hometypesCount'));
    }

    public function allAdmins()
    {


        $allAdmins = Admin::select()->get();


        return view('admins.admins', compact('allAdmins'));
    }


    public function createAdmins()
    {

        return view('admins.createadmins');
    }


    public function storeAdmins(Request $request)
    {

        Request()->validate([
            "name" => "required|max:40",
            "email" => "required|max:40",
            "password" => "required|max:40",
        ]);

        $storeAdmins = Admin::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ]);


        if ($storeAdmins) {

            return redirect('/admin/all-admins/')->with('success', 'Admin added successfully');
        }
    }

    public function allHomeTypes()
    {

        $allHomeTypes = HomeType::select()->get();



        return view('admins.hometypes', compact('allHomeTypes'));
    }


    public function createHomeTypes()
    {


        return view('admins.createhometypes');
    }

    public function storeHomeTypes(Request $request)
    {

        Request()->validate([
            "hometypes" => "required|max:40"
        ]);


        $storeHomeTypes = HomeType::create([

            'hometypes' => $request->hometypes,

        ]);


        if ($storeHomeTypes) {

            return redirect('/admin/all-hometypes/')->with('success', 'Home type added successfully');
        }
    }

    public function editHomeTypes($id)
    {

        $homeType = HomeType::find($id);

        return view('admins.edithometypes', compact('homeType'));
    }



    public function updateHomeTypes(Request $request, $id)
    {

        Request()->validate([
            "hometypes" => "required|max:40"
        ]);

        $singelHomeType = HomeType::find($id);
        $singelHomeType->update($request->all());


        if ($singelHomeType) {

            return redirect('/admin/all-hometypes/')->with('update', 'Home type updated successfully');
        }
    }


    public function deleteHomeTypes($id)
    {

        $homeType = HomeType::find($id);
        $homeType->delete();

        if ($homeType) {

            return redirect('/admin/all-hometypes/')->with('delete', 'Home type deleted successfully');
        }
    }

    public function Requests()
    {

        $requests = AllRequest::all();

        return view('admins.requests', compact('requests'));
    }

    public function allProps()
    {

        $props = Property::all();

        return view('admins.props', compact('props'));
    }


    public function createProps()
    {


        return view('admins.createprops');
    }



    public function storeProps(StorePropertyRequest $request)
    {

        $myimage = 'Propiedad_' . time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $myimage);

        $storeProps = Property::create([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $myimage,
            'beds' => $request->beds,
            'baths' => $request->baths,
            'sq_ft' => $request->sq_ft,
            'year_built' => $request->year_built,
            'price_sqft' => $request->price_sqft,
            'location' => $request->location,
            'home_type' => $request->home_type,
            'type' => $request->type,
            'city' => $request->city,
            'more_info' => $request->more_info,
            'agent_name' => $request->agent_name,
        ]);


        if ($storeProps) {

            return redirect('/admin/all-props/')->with('success', 'Property added successfully');
        }
    }



    public function createGallery()
    {

        $allProps = Property::all();


        return view('admins.creategallery', compact('allProps'));
    }


    public function storeGallery(Request $request)
    {

        $files = [];
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {

                $path = 'public/images_gallery';
                $name = time() . rand(1, 50) . '.' . $file->extension();
                //$file->move(public_path($path), $name);
                $file->storeAs($path, $name);
                $files[] = $name;

                PropImage::create([
                    "image" => $name,
                    "prop_id" => $request->prop_id,
                ]);
            }
        }

        // $file= new PropImage();
        // $file->filenames = $files;
        // $file->save();

        if ($name) {

            return redirect('/admin/all-props/')->with('success_gallery', 'Gallery added successfully');
        }
    }


    public function deleteProps($id)
    {

        $deleteProp = Property::find($id);
        $deleteGallery = PropImage::where("prop_id", $id)->get();

        if ($deleteProp) {
            $imagePath = 'public/images/' . $deleteProp->image;

            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            } else {
                //dd('File does not exists.');
            }
            $deleteProp->delete();

            foreach ($deleteGallery as $delete) {

                $imagePath = 'public/images_gallery/' . $delete->image;

                if (Storage::exists($imagePath)) {
                    Storage::delete($imagePath);
                } else {

                    //dd('File does not exists.');
                }


                $delete->delete();
            }

            $deleterequests = AllRequest::where("prop_id", $id)->first();

            if ($deleterequests) {
                $deleterequests->delete();
            }


            $deletesave = SavedProp::where("prop_id", $id)->first();

            if ($deletesave) {
                $deletesave->delete();
            }

            return redirect('/admin/all-props/')->with('delete', 'Property deleted successfully');
        }
    }

    // Cargar tanto los datos de PropImage como los datos relacionados de Property

    public function allGallery()
    {

        $allGallery = PropImage::with('property')->get();

        return view('admins.allgallery', compact('allGallery'));
    }


    public function galleryDelete($id)
    {
        try {
            $galleryDelete = PropImage::find($id);
            if ($galleryDelete) {
                $imagePath = 'public/images_gallery/' . $galleryDelete->image;

                if (Storage::exists($imagePath)) {
                    Storage::delete($imagePath);
                } else {
                    Log::warning('Image file does not exist: ' . $imagePath);
                }

                $galleryDelete->delete();


                return redirect()->route('gallery.all')->with('success', 'Elemento eliminado correctamente');
            }

            return redirect()->route('gallery.all')->with('error', 'No se encontró la propiedad.');
        } catch (Exception $e) {
            Log::error('Error deleting gallery image: ' . $e->getMessage());
            return redirect()->route('gallery.all')->with('error', 'Ocurrió un error al borrar la imagen.');
        }
    }
}
