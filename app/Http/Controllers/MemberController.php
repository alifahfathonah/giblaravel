<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function __construct() {
        $this->model        = new User();
        $this->viewRoute    = 'pages.admin.members';
        $this->routeToIndex = 'members.index';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = $this->model::orderByDesc('created_at')->paginate(10);
        return view($this->viewRoute.'.index', [
            'datas' => $datas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewRoute.'.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->photo) {
            $data['photo'] = $request->file('photo')->store('assets/photos', 'public');
        }

        $data['password'] = Hash::make($request->password);

        $this->model::create($data);

        return redirect()->route($this->routeToIndex);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->model::findOrFail($id);

        return view($this->viewRoute.'.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model::findOrFail($id);
        return view($this->viewRoute.'.form', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_data = User::findOrFail($id);
        $data = $request->all();
        if($request->photo) {
            if($user_data->photo){
                $imagePath = public_path('storage/'.$user_data->photo);
                unlink($imagePath);
            }
            $data['photo'] = $request->file('photo')->store('assets/photos', 'public');
        }
        if($request->password) {
            $data['password'] = Hash::make($request->password);
        } else {
            $data['password'] = $user_data->password;
        }
        $this->model::findOrFail($id)->update($data);

        return redirect()->route($this->routeToIndex);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($this->model::findOrFail($id));
        $this->model::findOrFail($id)->delete();

        return redirect()->route($this->routeToIndex);
    }

    public function viewTrashed()
    {
        //showTrashedData
        $datas = $this->model->onlyTrashed()->paginate(10);
        // dd($datas);
        return view($this->viewRoute.'.trashed', compact('datas'));
    }

    public function restore($id)
    {
        $this->model::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $user_data = User::withTrashed()->findOrFail($id);
        if($user_data->photo){
            $imagePath = public_path('storage/'.$user_data->photo);
            unlink($imagePath);
        }
        $this->model::onlyTrashed()->findOrFail($id)->forceDelete();

        return redirect()->back();
    }

    public function profilePhotoDownload($id)
    {
        $user_data = User::withTrashed()->findOrFail($id);
        $photoPath = public_path('storage/'.$user_data->photo);

        return Storage::download($photoPath);
    }
}
