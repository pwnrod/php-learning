<?php

class PagesController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');

        return view('index');
    }

    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}