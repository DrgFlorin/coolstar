<?php

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = $this->model('Gallery');

        $this->view('gallery', 
        [
            'title' => $gallery->title
        ]);
    }
}