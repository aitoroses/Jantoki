<?php

class Child_Controller extends Base_Controller { 

    public $restful = true; 

	public function get_index()
    {
    	return View::make('child.index')
    		->with('child', Child::all());

    } 

    public function get_view($id)
    {
        $child = Child::find($id);
        return View::make('child.view')
            ->with('child', $child);
    }

	public function get_create()
    {
        return View::make('child.create');
    }    

    public function post_add()
    {
        Child::create(array(
            'nombre' => Input::get('nombre'),
            'euskera' => Input::get('euskera'),
            'sentado' => Input::get('sentado'),
            'mesa' => Input::get('mesa')
        ));
        return Redirect::to_route('index');
    }
    public function put_update()
    {
        $id = Input::get('id');

        Child::update($id, array(
            'nombre' => Input::get('nombre'),
            'euskera' => Input::get('euskera'),
            'sentado' => Input::get('sentado'),
            'mesa' => Input::get('mesa')
        ));
        return Redirect::to_route('index');
    }

    public function delete_destroy()
    {
        $id = Input::get('id');

        Child::find($id)->delete();
        return Redirect::to_route('index');
    }

}