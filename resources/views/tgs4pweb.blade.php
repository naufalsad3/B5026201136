<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#btn1").click(function () {
          alert("Text: " + $("#test").text());
        });
        $("#btn2").click(function () {
          alert("HTML: " + $("#test").html());
        });
        $("#btn3").click(function () {
          alert($("#w3s").attr("href"));
        });
      });
    </script>

    <!-- CSS -->
    <style>
      #page {
        padding-top: 2rem;
      }
    </style>

    <title>Praktikum JQuery | 5026201136</title>
  </head>
  <div class="container">
    <body id="page" style="text-align: center">
      <h2>Naufal Sadewa (5026201136) / PWEB B</h2>
      <h5>ini adalah hasil praktikum jQuery Naufal Sadewa</h5>
      <h5>jQuery HTML Get Content and Attributes</h5>
      <p id="test">Ini adalah <a href="https://github.com/naufalsad3/PWEB-B.git" id="w3s">link github</a> <b>Naufal Sadewa</b>.</p>

      <button type="button" class="btn btn-outline-primary btn-lg btn-block" id="btn1">Tampilkan Teks</button>
      <button type="button" class="btn btn-outline-danger btn-lg btn-block" id="btn2">Tampilkan HTML</button>
      <button type="button" class="btn btn-outline-warning btn-lg btn-block" id="btn3">Tampilkan nilai href</button>
    </body>
  </div>
</html>
