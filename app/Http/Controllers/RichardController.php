<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

use Illuminate\Container\Container;

use Illuminate\Support\ServiceProvider;


use Illuminate\Http\Request;



class MyServiceProvider extends ServiceProvider{
    public function register()
    {
        $this->app->bind("App\Http\Controllers\Ipower", "App\Http\Controllers\Ypower");
        $this->app->bind("App\Http\Controllers\SuperMan","App\Http\Controllers\SuperMan");
    }
}


interface Ipower{
    function show();
}

class Xpower implements Ipower {
    function show(){
        echo "xpower";
    }
};

class Ypower implements Ipower {
    function show(){
        echo "Ypower";
    }
};

class SuperMan{

    public function __construct(Ipower $power){
        $this->_power= $power;
    }

    public $_power;
    function showPower(){
        $this->_power->show();
    }

};



class RichardController extends Controller
{

    public function index(Request $request){


        // $class = new \ReflectionClass('App\Http\Controllers\SuperMan');//建立 Person这个类的反射类  
        // var_dump( $class);
        // exit;



        var_dump(App::isLocal());
        exit;

        $app=app();
        $superman=$app->make("App\Http\Controllers\SuperMan");
        $superman->showPower();



        // $container=new Container();

        // $container->bind("App\Http\Controllers\Ipower","App\Http\Controllers\Ypower");
        // $container->bind("App\Http\Controllers\SuperMan","App\Http\Controllers\SuperMan");

        // $superman=$container->make("App\Http\Controllers\SuperMan");
        // $superman->showPower();

        exit;


        //$superman=new SuperMan(new Xpower());
        $superman->showPower();


        $environment = App::environment();
        return $environment;
    	return 'index';
    }

    public function index2(){
    	return 'index';
    }

    public function getIndex3(){
//         $app->bind('HelpSpot\API', function ($app) {
//     return new HelpSpot\API($app->make('HttpClient'));
// });
    	
    	return "dddd";



    }

    public function testview(){
       return view("richard/child");
    }

}