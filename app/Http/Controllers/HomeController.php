<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Rental;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $buses = Bus::all();

        return view('contents.home', [
            'title' => 'Beranda',
            "buses" => $buses,
        ]);
    }

    public function about()
    {
        $buses = Bus::all();

        return view('contents.about', [
            'title' => 'Tentang Kami',
            "buses" => $buses,
        ]);
    }

    public function bus()
    {
        $buses = Bus::all();

        return view('contents.bus', [
            'title' => 'Bus',
            "buses" => $buses,
        ]);
    }

    public function bus_detail($id)
    {
        $bus = Bus::find($id);

        return view('contents.bus-detail', [
            'title' => 'Detail Bus',
            "bus" => $bus,
        ]);
    }

    public function contact()
    {
        return view('contents.contact', [
            'title' => 'Kontak',
        ]);
    }

    public function rental(Request $request)
    {
        $request->validate([
            'bus_id' => 'required|exists:buses,id',
            'pickup_location' => 'required',
            'destination' => 'required',
            'pickup_time' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $bus = Bus::find($request->bus_id);

        Rental::create([
            'bus_id' => $request->bus_id,
            'user_id' => auth()->id(),
            'payment_status' => 'unpaid',
            'status' => 'pending', // 'pending', 'approved', 'rejected', 'canceled', 'completed'
            'total_amount' => $bus->price_per_day * (strtotime($request->end_date) - strtotime($request->start_date)) / (60 * 60 * 24) + 1,
            'pickup_location' => $request->pickup_location,
            'destination' => $request->destination,
            'pickup_time' => $request->pickup_time,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->back()->with('success', 'Sewa bus berhasil dilakukan');
    }
}
