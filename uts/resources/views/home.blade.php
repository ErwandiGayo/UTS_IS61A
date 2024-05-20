
@extends('layouts.master')
@section('title','Dashboard')
@section('judul','Dashboard')
@section('nama','Usaha Gas Mandiri')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Dashboard </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      Start creating your amazing application!
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>

  <!-- Notifications Card -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Notifications</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <!-- Notifications List -->
      <ul class="list-group">
        <li class="list-group-item">Welcome to the Hananan Academy Dashboard!</li>
        <li class="list-group-item">Your profile has been updated successfully.</li>
        <li class="list-group-item">New students have been enrolled.</li>
        <li class="list-group-item">Upcoming events: Annual Day on 25th May 2024.</li>
        <!-- Add more notifications as needed -->
      </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Last updated: May 17, 2024
    </div>
    <!-- /.card-footer-->
  </div>
@endsection
