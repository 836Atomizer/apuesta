<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Canal;
use App\Models\Player;
use App\Models\Refill;
use Illuminate\Http\Request;

class RefillController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $refills = Refill::all();
        $players = Player::all();
        $canals = Canal::all();
        $banks = Bank::all();
        return view('admin/refill')
            ->with(['refills'=>$refills,
                'players'=>$players,
                'canals'=>$canals,
                'banks'=>$banks
                ]);
    }
}
