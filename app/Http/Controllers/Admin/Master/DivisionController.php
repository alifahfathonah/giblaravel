<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function __construct() {
        $this->model = new Division;
        $this->masterViews= 'pages.admin.masters.';
        $this->routeToIndex= 'masters.divisions.index';
        $this->routeName= 'divisions';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = $this->model::orderBy('id')->paginate(10);
        return view($this->masterViews.$this->routeName.'.index', [
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
        return view($this->masterViews.$this->routeName.'.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->model::create($request->all());

        return redirect()->route($this->routeToIndex);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //showTrashedData
        $datas = $this->model->onlyTrashed()->paginate(10);
        return view($this->masterViews.$this->routeName.'.trashed', compact('datas'));
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
        return view($this->masterViews.$this->routeName.'.form', [
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
        
        $this->model::findOrFail($id)->update($request->all());

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
        $this->model::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function restore($id)
    {
        $this->model::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $this->model::onlyTrashed()->findOrFail($id)->forceDelete();

        return redirect()->back();
    }
}
