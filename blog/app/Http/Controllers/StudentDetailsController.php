<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StudentDetailsModel;

class StudentDetailsController extends Controller{
    /*
    --------------------------------------------------------------------------
    Something New
    --------------------------------------------------------------------------
    + Here i use this github repository, because i can create easily any file 
    + (Search this link, how to use, you find everything here) https://github.com/flipboxstudio/lumen-generator
    + (terminal command using) composer require flipbox/lumen-generator
    + (bootstrap/app.php using) $app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
    */
    /*
    --------------------------------------------------------------------------
    Eloquent ORM (Object Relational Mapping)
    --------------------------------------------------------------------------
    + Each database has a corrisponding "Model"
    + Used to interect with this model
    + Model allow you to query for data
    + All Eloquend Model extend Illuminate\Database\Eloquent\Model
    + (bootstrap/app.php comment to uncomment this line) $app->withEloquent();
    */

    //Select all table data from database
    function SelectALL(){
        $result=StudentDetailsModel::all();
        return $result;
    }

    //Select specific table data using id 
    function SelectByID(Request $request){
        $id= $request->input('id');
        $result=StudentDetailsModel::where('id',$id)->get();
        return $result;
    }
}
