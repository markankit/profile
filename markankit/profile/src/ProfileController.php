<?php
namespace Markankit\Profile;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function index($name)
    {
        echo "name == $name";
    }
}