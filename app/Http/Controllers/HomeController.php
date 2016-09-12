<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Students;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function showView() {
        return view('showInfo');
    }

    /*show data*/
    public  function showDB() {
        $data = Students::all();
        return view('template.index', ['data' => $data]);
    }

    /*add data*/
    public function addDB(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        Students::insert(['name' => $name, 'email' => $email]);
        return redirect('/showData');
    }

    /*delete data*/
    public function deleteDB($id) {
        Students::where('id', $id)->delete();
        return redirect('/showData');
    }

    /*load ajax*/
    public function loadAjax($id) {
        $data = Students::where('id', $id)->first();
        $html = '';
        $html = '<tr>
                    <td><label for="name">Name :</label></td>
                    <td><input type="text" name="name" id="name" placeholder="input name" value="'.$data->name.'"></td>
                </tr>
                <tr>
                    <td><label for="name">Email :</label></td>
                    <td><input type="text" name="email" id="email" placeholder="input email" value="'.$data->email.'"></td>
                </tr>';
        echo $html;
    }

    /*update data*/
    public function updateDB($id, Request $request ) {
        $name = $request->input('name');
        $email = $request->input('email');
        Students::where('id', $id)->update([
            'name' => $name,
            'email' => $email
        ]);
        return redirect('/showData');
    }
}