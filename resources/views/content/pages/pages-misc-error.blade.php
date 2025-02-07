@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Appointment Management - Pages')

@section('page-style')
<!-- Page -->
@vite(['resources/assets/vendor/scss/pages/page-misc.scss'])
@endsection

@section('content')
<!-- Appointment Management -->
<div class="container-xxl container-p-y">
  <div class="misc-wrapper">
    <h2 class="mb-1 mt-4">Appointment Management</h2>
    <p class="mb-4 mx-2">Manage and view appointments here.</p>

    <!-- Appointment Form -->
    <div class="card mb-4">
      <div class="card-header">
        <h5 class="card-title">Add New Appointment</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('appointments.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="patientName" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="patientName" name="patient_name" required>
          </div>
          <div class="mb-3">
            <label for="appointmentDate" class="form-label">Appointment Date</label>
            <input type="date" class="form-control" id="appointmentDate" name="appointment_date" required>
          </div>
          <div class="mb-3">
            <label for="appointmentTime" class="form-label">Appointment Time</label>
            <input type="time" class="form-control" id="appointmentTime" name="appointment_time" required>
          </div>
          <div class="mb-3">
            <label for="doctorName" class="form-label">Doctor Name</label>
            <input type="text" class="form-control" id="doctorName" name="doctor_name" required>
          </div>
          <div class="mb-3">
            <label for="reason" class="form-label">Reason for Appointment</label>
            <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Add Appointment</button>
        </form>
      </div>
    </div>

    <!-- Appointment List -->
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Appointment List</h5>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Patient Name</th>
              <th>Appointment Date</th>
              <th>Appointment Time</th>
              <th>Doctor Name</th>
              <th>Reason</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($appointments as $appointment)
            <tr>
              <td>{{ $appointment->patient_name }}</td>
              <td>{{ $appointment->appointment_date }}</td>
              <td>{{ $appointment->appointment_time }}</td>
              <td>{{ $appointment->doctor_name }}</td>
              <td>{{ $appointment->reason }}</td>
              <td>
                <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /Appointment Management -->
@endsection
