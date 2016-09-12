@extends('layout.layout')
@section('content')
    <div class="container">
        <a href="#add-modal" class="uk-button uk-button-primary add" data-uk-modal>Thêm</a>
        {{--show data--}}
        <table border="0" class="show">
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
                    <td>
                        <a href="#edit-modal" class="edit" data-id="{{$item->id}}" data-uk-modal>Sửa</a>
                        <a href="#del-modal" class="del" data-id="{{$item->id}}" data-uk-modal>Xóa</a>
                    </td>
                </tr>
            @endforeach
        </table>

        {{--add--}}
        <div id="add-modal" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>

                <form action="/addData" method="post">
                    <table class="popup">
                        <tr>
                            <td><label for="name">Name :</label></td>
                            <td><input type="text" name="name" id="name" placeholder="input name"></td>
                        </tr>
                        <tr>
                            <td><label for="name">Email :</label></td>
                            <td><input type="text" name="email" id="email" placeholder="input email"></td>
                        </tr>
                    </table>
                    <input class="uk-button uk-button-primary uk-float-right" type="submit" name="sumit" id="submit" value="Submit">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

        {{--edit--}}
        <div id="edit-modal" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>

                <form action="" method="post">
                    <table class="popup">

                    </table>
                    <input class="uk-button uk-button-primary uk-float-right" type="submit" name="sumit" id="submit" value="Submit">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>

        {{--delete--}}
        <div class="uk-modal" id="del-modal">
            <div class="uk-modal-dialog">
                <a class="uk-close uk-modal-close"></a>
                <p>Bạn chắc chắn muốn xóa</p>
                <div class="uk-modal-footer uk-text-right">
                    <a href="javascript:void(0)" class="uk-modal-close uk-button">Close</a>
                    <a id="delete" href="" class="uk-button uk-button-primary">Ok</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.del').click(function () {
                var id = $(this).data('id');
                $('#delete').attr('href', '/delete/'+id);
            });
            $('.edit').click(function () {
                var id = $(this).data('id');
                $.ajax({
                    url: '/loadAjax/'+id,
                    type: 'get',
                    dataType: 'text',
                    success: function(html) {
                        $('table.popup').html(html);
                    }
                });
                $('form').attr('action', '/update/'+id);
            });
        });
    </script>
@endsection