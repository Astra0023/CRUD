@extends('students.layout')
        @section('content')   
<div class="card">
    <div class="card-header">
        
    </div>
    <div class="card-body">
<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-4">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body text-center">
              <div class="mt-3 mb-4">
                <img src="{{ URL('/Images/studentlogo.png') }}"
                  class="rounded-circle img-fluid" style="width: 100px;" />
              </div>
              <h4 class="mb-2">{{ $students->name }}</h4>
              <p class="text-muted mb-4">Section  <span class="mx-2"> {{ $students->section }}</span>
                <p class="text-muted mb-4">Age <span class="mx-2">{{ $students->age }}</span>
              <div class="mb-4 pb-2">
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-facebook-f fa-lg"></i>
                </button>
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-twitter fa-lg"></i>
                </button>
                <button type="button" class="btn btn-outline-primary btn-floating">
                  <i class="fab fa-skype fa-lg"></i>
                </button>
              </div>
              <button type="button" class="btn btn-primary btn-rounded btn-lg">
                Message now
              </button>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>
    </div>
</div>
