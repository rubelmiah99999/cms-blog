<?php

  class Dashboard extends Controller {
      public function index()
      {
        $this->view('admin/dashboard');
      }
  }