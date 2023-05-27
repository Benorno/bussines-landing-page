<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function toAppointment()
    {
        $appointmentServices = Service::all();
        return view('appointment.index', compact('appointmentServices'));
    }

    public function showAdmin()
    {
        $services = Service::all();
        return view('admin.services.list', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'details' => 'required',
        ]);

        Service::create($request->all());

        return redirect()->route('services.list')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'service_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'details' => 'required',
        ]);

        $service->update($request->all());

        return redirect()->route('services.list')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.list')->with('success', 'Service deleted successfully.');
    }
}
