<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba imagen</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/bootstrap-datetimepicker.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/myStyle.css')!!}
    {!!Html::style('css/ie8.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/bootstrap-responsive.css')!!}
    {!!Html::style('css/bootstrap-timepicker.min.css')!!}
    @yield('style')
</head>

<body>
<div id="page-wrapper2">
    <div class="wrapper">
        @yield('content')

    </div>


{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap-tooltip.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/bootstrap-datetimepicker.min.js')!!}
{!!Html::script('js/bootstrap-timepicker.min.js')!!}
{!!Html::script('js/metisMenu.min.js')!!}
{!!Html::script('js/sb-admin-2.js')!!}
{!!Html::script('js/bootstrap-confirmation.min.js')!!}

@yield('script')

<script>
    $('[data-toggle="confirmation"]').confirmation({
        href: function (elem) {
            return $(elem).attr('href');
        }
    });
</script>

</body>

</html>
