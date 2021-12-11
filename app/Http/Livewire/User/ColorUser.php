<?php

namespace App\Http\Livewire\User;

use App\Models\Color;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ColorUser extends Component
{
    public $color_select = [];

    public function render()
    {
        $getColorByUserId = DB::table('colors')
        ->join('users', 'colors.users_id', '=', 'users.id')
        ->where('colors.users_id', '=', Auth::user()->id)
        ->get();

        return view('livewire.user.color-user', compact('getColorByUserId'));
    }

    public function store()
    {
        $this->validate([
            'color_select' => 'required'
        ]);

        foreach ($this->color_select as $color) {
            Color::create([
                'users_id' => Auth::user()->id,
                'color_name' => $color
            ]);
        }

        session()->flash('Success!. Your Pick Color');
    }
}
