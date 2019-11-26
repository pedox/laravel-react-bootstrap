<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
  <meta name="_csrf" content="{{ csrf_token() }}" />
  <title>Title !</title>
</head>

<body>
  <div id="app">
    <div id="loading">
      Loading...
    </div>
  </div>
  <script src="{{ mix('/js/app.js') }}"></script>
</body>

<script>
  var __DATA__ = {!! json_encode(isset($data) ? $data : (object)[]) !!}
</script>

</html>
