<?php
namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        // Get all samples ordered by updated_at timestamps in descending order
        $samples = Sample::orderBy('updated_at', 'desc')->get();

        // Pass the samples to the view
        return view('samples.index', ['samples' => $samples]);
    }

	
	public function create()
    {
        return view('samples.create');
    }

    /*public function store(Request $request)
    {
        $validated = $request->validate([
            'field' => 'required|max:255',
        ]);

        $sample = new Sample;
        $sample->field = $validated['field'];
        $sample->save();

        return redirect()->route('samples.create')->with('success', 'Sample created successfully');
    }*/
	
	   public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'path' => 'required|max:255',
            'body' => 'required',
        ]);

        // Create a new sample using the request data and save it to the database
        $sample = new Sample;
        $sample->title = $request->title;
        $sample->path = $request->path;
        $sample->body = $request->body;
        $sample->save();

        // Redirect the user to some specific page after the sample is saved
        return redirect()->route('samples.index');
    }
	
	
	    public function edit(Sample $sample)
    {
        // Show the edit form with the current sample
        return view('samples.edit', ['sample' => $sample]);
    }

    public function update(Request $request, Sample $sample)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|max:255',
            'path' => 'required|max:255',
            'body' => 'required',
        ]);

        // Update the sample with the request data and save it to the database
        $sample->title = $request->title;
        $sample->path = $request->path;
        $sample->body = $request->body;
        $sample->save();

        // Redirect the user to some specific page after the sample is updated
        return redirect()->route('samples.index');
    }
	
	   public function destroy(Sample $sample)
    {
        // Delete the sample
        $sample->delete();

        // Redirect to the samples index view
        return redirect()->route('samples.index');
    }
	
}

