<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $team_members = TeamMember::all();
        return view('dashboard.teamMembers.index', compact('team_members'));
    }

    public function create()
    {
        return view('dashboard.teamMembers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'google_plus' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        $photoPath = $request->file('photo')->store('team_photos', 'public');

        TeamMember::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $photoPath,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'google_plus' => $request->google_plus,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('team_members.index');
    }

    public function edit(TeamMember $team_member)
    {
        return view('dashboard.teamMembers.edit', compact('team_member'));
    }

    public function update(Request $request, TeamMember $team_member)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'google_plus' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        if ($request->hasFile('photo')) {
            if (Storage::disk('public')->exists($team_member->photo)) {
                Storage::disk('public')->delete($team_member->photo);
            }
            $photoPath = $request->file('photo')->store('team_photos', 'public');
            $team_member->photo = $photoPath;
        }

        $team_member->update($request->only(['name', 'position', 'description', 'facebook', 'twitter', 'google_plus', 'linkedin']));

        return redirect()->route('team_members.index');
    }

    public function destroy(TeamMember $team_member)
    {
        if (Storage::disk('public')->exists($team_member->photo)) {
            Storage::disk('public')->delete($team_member->photo);
        }

        $team_member->delete();

        return redirect()->route('team_members.index');
    }
       
}   