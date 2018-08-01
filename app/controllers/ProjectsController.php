<?php

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = $this->model('Projects');

        $this->view('projects', ['title' => $projects->title]);
    }
}