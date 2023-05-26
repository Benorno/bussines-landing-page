<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
      public function store(Request $request)
        {
            // Validate the form data
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'car_brand' => 'required',
                'car_model' => 'required',
                'licence' => 'required',
                'service' => 'required',
                'appointment_date' => 'required|date_format:Y-m-d\TH:i',
            ]);


            // Parse the appointment date and convert it to a valid format for storing in the database
            $appointmentDate = date('Y-m-d H:i:s', strtotime($validatedData['appointment_date']));

            // Create a new appointment with the adjusted appointment date
            Appointment::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'car_brand' => $validatedData['car_brand'],
                'car_model' => $validatedData['car_model'],
                'licence' => $validatedData['licence'],
                'service' => $validatedData['service'],
                'appointment_date' => $appointmentDate,
            ]);

            // You can perform additional actions here, such as sending confirmation emails, notifications, etc.

            // Redirect the user to a thank you page or any other desired page
            return redirect()->route('thankyou');
         }
}

