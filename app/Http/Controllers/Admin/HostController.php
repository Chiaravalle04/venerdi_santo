<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Host;
use App\Http\Requests\StoreHostRequest;
use App\Http\Requests\UpdateHostRequest;

// Helpers
use Illuminate\Support\Facades\Storage;

class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hosts = Host::all();

        return view('admin.hosts.index', compact('hosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hosts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHostRequest $request)
    {
        $data = $request->validated();

        if (array_key_exists('image', $data)) {

            $data['image'] = Storage::put('hosts', $data['image']);

        }

        $newHost = Host::create($data);

        return redirect()->route('admin.hosts.show', $newHost->id)->with('success', 'Host aggiunto con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Host  $host
     * @return \Illuminate\Http\Response
     */
    public function show(Host $host)
    {
        return view('admin.hosts.show', compact('host'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Host  $host
     * @return \Illuminate\Http\Response
     */
    public function edit(Host $host)
    {
        return view('admin.hosts.edit', compact('host'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHostRequest  $request
     * @param  \App\Models\Host  $host
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHostRequest $request, Host $host)
    {
        $data = $request->validated();

        dd($data);

        if (array_key_exists('image', $data)) {

            $data['image'] = Storage::put('hosts', $data['image']);

            if ($host->image) {

                Storage::delete($host->image);

            }

        }

        $host->update($data);

        return redirect()->route('admin.hosts.show', $host->id)->with('success', 'Host modificato con successo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Host  $host
     * @return \Illuminate\Http\Response
     */
    public function destroy(Host $host)
    {
        //
    }
}
