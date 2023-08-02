<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @font-face {
            font-family: 'NotoSansJP';
            src: url('assets/fonts/NotoSansJP-Regular.ttf') format('truetype');
        }

        body {
            font-family: 'NotoSansJP';
            font-size: 12px;
            overflow:visible;
            white-space: pre-line;
        }
    </style>
</head>

<body>
    <table style="width:100%;table-layout:fixed;">
        <thead>
            <tr>
                <!-- <th>S.No</th> -->
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fruits as $fruit)
            <tr>
                <!-- <td>{{$loop->iteration}}</td> -->
                <td style="overflow-wrap: break-word">{{ $fruit->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>