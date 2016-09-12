
<br><br>
<form action="{{url('updateData')}}" method="post">
    <table>
        <tr>
            <td><label for="name">name :</label></td>
            <td><input type="text" name="name" id="name" placeholder="input name" value="{{$data->name}}"></td>
        </tr>
        <tr>
            <td><label for="name">email :</label></td>
            <td><input type="text" name="email" id="email" placeholder="input email" value="{{$data->email}}"></td>
        </tr>
        <tr>
            <td><input type="submit" name="sumit" id="submit" value="Submit"></td>
            <td><input type="hidden" name="hidden" id="hidden" value="{{$data->id}}"></td>
        </tr>
    </table>
    {{ csrf_field() }}
</form>