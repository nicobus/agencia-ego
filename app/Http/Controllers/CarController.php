<?php

namespace App\Http\Controllers;

use App\Car;
use App\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        $title = 'Descubri todos los modelos';
        $categories = Category::all();
        $cat = 'Todos';
        $vac = compact('cars', 'title', 'categories', 'cat');
        return view('pages.carsList', $vac);
    }

    public function listByCategory($category)
    {
        $title = $category;
        $cat = $category;
        $cars = Car::carsByCategory($category)->get();
        $categories = Category::all();
        $vac = compact('cars', 'title', 'categories', 'cat');
        return view('pages.carsList', $vac);
    }

    public function listOrderBy($category, $orderType)
    {
        $title = $category;
        $cat = $category;
        switch ($orderType) {
            case 'preciomenoramayor':
                $cars = Car::carsByCategory($category)->orderBy('price', 'ASC')->get();
                break;
            case 'preciomayoramenor':
                $cars = Car::carsByCategory($category)->orderBy('price', 'DESC')->get();
                break;
            case 'masnuevos':
            $cars = Car::carsByCategory($category)->orderBy('year', 'DESC')->get();
                break;
            case 'masviejos':
                $cars = Car::carsByCategory($category)->orderBy('year', 'ASC')->get();
                break;    
            
            default:
               $cars = Car::all();
                break;
        }
        
        $categories = Category::all();
        $vac = compact('cars', 'title', 'categories', 'cat');
        return view('pages.carsList', $vac);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $title = $car->model;
        $vac = compact('car', 'title');
        return view('pages.carDetail', $vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
    public function listApi(){
        $cars = Car::All();
        return json_encode($cars);
    }
}

