<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td><a href="showId/{{$item->id}}/sua">Sửa</a> <a href="showId/{{$item->id}}/xoa">Xóa</a></td>
        </tr>
    @endforeach
</table>
