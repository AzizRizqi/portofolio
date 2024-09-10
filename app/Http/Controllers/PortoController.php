<?php

// app/Http/Controllers/PortoController.php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Porto;
use App\Models\profile;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function profiles()
    {
        $profiles = profile::first();
        return view('portofolio.component.profile', compact('profiles'));
    }
    public function experiences()
    {
        $experiences = Experience::get();
        return view('portofolio.component.experience',compact('experiences'));
    }

    public function educations()
    {
        $educations = Education::get();
        return view('portofolio.component.education', compact('educations'));
    }

    public function skills()
    {
        $skills = Skill::get();
        return view('portofolio.component.skills', compact('skills'));
    }
}
