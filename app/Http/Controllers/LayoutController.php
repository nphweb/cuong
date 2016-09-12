<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Students;
use App\nph_products;
use Illuminate\Http\Request;
use DB;
class LayoutController extends Controller
{
    public function pagination() {
        $data = DB::table('nph_products')->paginate(15);
        return view('panigation.pani', ['data' => $data]);
    }
    public function updateDB($type, Request $request ) {
        $id = $request->input('hidden');
        $name = $request->input('name');
        $email = $request->input('email');
        Students::where('id', $id)->update([
            'name' => $name,
            'email' => $email
        ]);
        return $this->showDB();
    }
}