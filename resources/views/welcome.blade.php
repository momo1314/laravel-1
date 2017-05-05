<!DOCTYPE html>
<html>
    <head>
        <title>homework</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ URL::asset('css/so.css') }}" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="con">
                    <p>请输入学号：</p>
                    <input type="text" name="stuid" id="stuid" value="10位/暂时无法存入库">
                    <br /><br /><br />
                    <button type="submit" id="button2">提交</button>
                    <div id="stu"></div>
                </div>
                <div class="con">
                    <p>请输入班级：</p>
                    <input type="text" name="classid" id="classid" value="7-8位">
                    <br /><br /><br />
                    <button type="submit" id="button">提交</button>
                    <div id="class"></div>
                </div>
            </div>
            <div>

            </div>
        </div>
    {{--<script type="text/javascript" src="laravel52/public/javascript/jquery-3.2.1.js"></script>--}}
        <script src="{{ URL::asset('javascript/jquery-3.2.1.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
        $(document).ready(function(){
            $("#button").click(function(){
                $.post("Classm",
                    {
                        classid:$("#classid").val()
                    },
                    function(data){
                        $("#class").html(data);
                    });
            });
            $("#button2").click(function(){
                $.post("std",
                    {
                        stuid:$("#stuid").val()
                    },
                    function(data){
                        $("#stu").html(data);
                    });
            });
        });

    </script>
    </body>
</html>
