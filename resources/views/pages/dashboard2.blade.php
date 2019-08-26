<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashbaord</title>
    </head>
    <body>
        <div id="app">
        <router-link to="/dashboard2">Home</router-link>
        <router-link to="/abouts">About</router-link>

        <router-view></router-view>

        </div>


        <script src="/js/app.js"></script>
    
    </body>
</html>