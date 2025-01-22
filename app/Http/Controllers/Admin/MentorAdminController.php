<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorAdminController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return response()->json([
            'data' => $mentors,
            'message' => 'Mentors retrieved successfully',
            'status' => 'success'
        ], 200);
    }

    public function show($mentorId)
    {
        $mentor = Mentor::findOrFail($mentorId);
        return response()->json([
            'data' => $mentor,
            'message' => 'Mentor retrieved successfully',
            'status' => 'success'
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'position' => 'required',
                'company' => 'required',
                'thumbnail' => 'required',
                'profile' => 'required',
                'linkedin' => 'required',
                'achievements' => 'required',
                'category' => 'required',
                'photo_journey' => 'required'
            ]
        );

        $mentor = new Mentor();
        $mentor->name = $request->name;
        $mentor->position = $request->position;
        $mentor->company = $request->company;
        $mentor->thumbnail = $request->thumbnail;
        $mentor->profile = $request->profile;
        $mentor->linkedin = $request->linkedin;
        $mentor->achievements = json_encode($request->achievements);
        $mentor->category = json_encode($request->category);
        $mentor->photo_journey = json_encode($request->photo_journey);
        $mentor->save();

        return response()->json([
            'data' => $mentor,
            'message' => 'Mentor created successfully',
            'status' => 'success'
        ], 201);
    }

    public function update(Request $request, $mentorId)
    {
        $request->validate(
            [
                'name' => 'required',
                'position' => 'required',
                'company' => 'required',
                'thumbnail' => 'required',
                'profile' => 'required',
                'linkedin' => 'required',
                'achievements' => 'required',
                'category' => 'required',
                'photo_journey' => 'required'
            ]
        );
        
        $mentor = Mentor::findOrFail($mentorId);
        $mentor->name = $request->name;
        $mentor->position = $request->position;
        $mentor->company = $request->company;
        $mentor->thumbnail = $request->thumbnail;
        $mentor->profile = $request->profile;
        $mentor->linkedin = $request->linkedin;
        $mentor->achievements = json_encode($request->achievements);
        $mentor->category = json_encode($request->category);
        $mentor->photo_journey = json_encode($request->photo_journey);
        $mentor->save();

        return response()->json([
            'data' => $mentor,
            'message' => 'Mentor updated successfully',
            'status' => 'success'
        ], 200);
    }

    public function destroy($mentorId)
    {
        $mentor = Mentor::findOrFail($mentorId);
        $mentor->delete();

        return response()->json([
            'message' => 'Mentor deleted successfully',
            'status' => 'success'
        ], 200);
    }
}
