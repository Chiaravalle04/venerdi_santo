<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;

// Models
use App\Models\Host;

// Helpers
use Illuminate\Support\Facades\Storage;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::all();

        $hosts = Host::all();

        return view('admin.announcements.index', compact('announcements', 'hosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hosts = Host::all();

        return view('admin.announcements.create', compact('hosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnnouncementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnnouncementRequest $request)
    {
        $data = $request->validated();

        dd($data);

        if (array_key_exists('image', $data)) {

            $data['image'] = Storage::put('announcements', $data['image']);

        }

        $newAnnouncement = Announcement::create($data);

        return redirect()->route('admin.announcements.show', $newAnnouncement->id)->with('success', 'Annuncio aggiunto con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        $hosts = $announcement->host;

        return view('admin.announcements.show', compact('announcement', 'hosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('admin.announcements.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnnouncementRequest  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        $data = $request->validated();

        if (array_key_exists('image', $data)) {

            $data['image'] = Storage::put('announcements', $data['image']);

            if ($announcement->image) {

                Storage::delete($announcement->image);

            }

        }

        $announcement->update($data);

        return redirect()->route('admin.announcements.show', $announcement->id)->with('success', 'Annuncio modificato con successo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect()->route('admin.announcements.index')->with('success', 'Annuncio eliminato con successo!');
    }
}
