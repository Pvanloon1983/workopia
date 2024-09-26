<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function() {
  $title = 'Available Jobs';
  $jobs = [

  ];

  return view('jobs.index', compact('title', 'jobs'));
})->name('jobs');

Route::get('/jobs/create', function() {
  return view('jobs.create');
})->name('jobs.create');