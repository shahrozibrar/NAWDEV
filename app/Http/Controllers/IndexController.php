<?php


namespace App\Http\Controllers;
use App;
use App\Http\Requests;
use App\Index;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        
        return view('index');
 
        

    }

    




}