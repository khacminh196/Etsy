<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            .wrapper-list {
                text-align: center;
            }
            .wrapper-table {
                width: 80%;
                padding: 50px;
                display: flex;
                justify-content: center;
            }
            .wrapper-table table {
                width: 80%;
            }
            .wrapper-table table tr {
                height: 35px;
            }

            @media only screen and (max-width: 640px) {
                .wrapper-table, .wrapper-table table {
                    width: 100%;
                }
                .wrapper-table {
                    padding: 10px;
                }
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="wrapper-list">
            <div class="wrapper-table">
                <table border="1px">
                    <tr>
                        <th></th>
                        <th>Text</th>
                        <th>Email</th>
                        <th>Time request</th>
                        <th>Action</th>
                    </tr>
                    @foreach($list as $index => $item)
                        <tr>
                            <th>{{ ++$index }}</th>
                            <th>{{ $item->text }}</th>
                            <th>{{ $item->email }}</th>
                            <th>{{ $item->created_at }}</th>
                            <th><a href="{{ route('request.detail', ['id' => $item->id]) }}">Edit</a></th>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="paginate">
                {{ $list->links() }}
            </div>
        </div>
    </body>

