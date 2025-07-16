<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Storage;

class DashboardReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Report::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                ->orWhere('link', 'like', '%' . $search . '%');
            });
        }

        return view('dashboard.reports.index', [
            'report' => $query->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'link' => 'required',
            'image' => 'required|image|file|max:10000|mimes:jpeg,png,jpg',
        ]);

        $image = $request->file('image');
        $image->storeAs('report-images', $image->hashName());

        Report::create([
            'title' => $request->title,
            'link' => $request->link,
            'image' => 'report-images/' . $image->hashName(), 
        ]);

        return redirect('dashboard/reports')->with('success', 'New report has been added!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $report = Report::findOrFail($id);
        return view('dashboard.reports.edit', [
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $report = Report::findOrFail($id);

        $rules = [
            'title' => 'required|max:255',
            'link' => 'required',
            'image' => 'required|image|file|max:10000|mimes:jpeg,png,jpg',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($report->image) {
                Storage::delete($report->image);
            }

            $image = $request->file('image');
            $image->storeAs('report-images', $image->hashName());
            $validatedData['image'] = 'report-images/' . $image->hashName();
        }

        $report->update($validatedData);

        return redirect('dashboard/reports')->with('success', 'Report has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        if ($report->image) {
            Storage::delete($report->image);
        }
        $report->delete();

        $messages = 'Report has been deleted!';

        return redirect('dashboard/reports')->with('success', $messages);
    }

}
