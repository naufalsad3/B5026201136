<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <!-- CSS -->
    <style>
      #body {
        padding-top: 1rem;
        padding-bottom: 700px;
      }

      #identitas {
        padding-left: 280px;
      }

      h4 {
        padding-left: 400px;
      }

      #formbuku {
        padding-left: 120px;
      }

      form li {
        list-style: none;
        margin-bottom: 5px;
        text-align: center;
      }

      form ul li label {
        float: left;
        clear: left;
        width: 180px;
        text-align: left;
        margin-left: 200px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 14px;
      }

      form span {
        margin-right: 30px;
      }

      form input {
        width: 200px;
      }

      select {
        width: 200px;
      }

      form ul li input,
      select,
      span {
        float: left;
        margin-bottom: 10px;
      }

      [type="submit"] {
        clear: left;
        margin: 20px 0 0 196px;
        font-size: 16px;
      }

      [type="reset"] {
        clear: center;
        margin: 20px 0 0 30px;
        font-size: 16px;
      }

      p {
        margin-left: 60px;
        font-weight: bold;
      }
    </style>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      function formValidation() {
        var utitle = document.pinjaman.title;
        var unumb = document.pinjaman.number;
        var ubrrw = document.pinjaman.borrow;
        var udate = document.pinjaman.date;

        if (title_validation(utitle)) {
          if (unumb_validation(unumb)) {
            if (brrwselect(ubrrw)) {
              if (datebook(udate)) {
                return true;
              }
            }
          }
          return false;
        }

        function title_validation(utitle) {
          var title_len = utitle.value.length;
          if (title_len == 0) {
            alert("Judul Buku tidak boleh kosong");
            return false;
          } else if (title_len <= 9) {
            alert("Judul Buku minimal 10 karakter");
            return false;
          } else {
            utitle.focus();
            return true;
          }
        }

        function unumb_validation(unumb) {
          var numbers = /^[0-9]+$/;
          var num_len = unumb.value.length;
          if (num_len == 0) {
            alert("No Buku tidak boleh kosong");
            return false;
          } else if (num_len != 5) {
            alert("No Buku harus angka dan 5 digit");
            return false;
          } else if (unumb.value.match(numbers)) {
            unumb.focus();
            return true;
          }
        }

        function brrwselect(ubrrw) {
          if (ubrrw.selectedIndex < 1) {
            alert("Pilih jenis buku");
            ubrrw.focus();
            return false;
          } else {
            return true;
          }
        }

        function datebook(udate) {
          var date_len = udate.value.length;
          if (date_len == 0) {
            alert("Pilih tanggal pengembalian");
            return false;
          } else {
            date.focus();
            return true;
          }
        }
      }
    </script>

    <title>ETS PWEB B | 5026201136</title>
  </head>

  <body id="body">
    <div id="identitas">
      <p>Naufal Sadewa</p>
      <p>Naufal</p>
      <p>5026201136</p>
    </div>

    <p><br /></p>
    <h4>Form Input Peminjaman Buku</h4>
    <form id="formbuku" name="pinjaman" action="">
      <ul>
        <div>
          <li><label for="title">Judul Buku</label></li>
          <span id="titik">:</span>
          <li><input type="text" name="title" size="30" /></li>
        </div>

        <div>
          <li><label for="number">No Buku</label></li>
          <span id="titik">:</span>
          <li><input type="text" name="number" size="5" /></li>
        </div>

        <div>
          <li><label for="borrow">Jenis Peminjaman</label></li>
          <span id="titik">:</span>
          <li>
            <select name="borrow">
              <option hidden></option>
              <option>Biasa</option>
              <option>Kilat</option>
              <option>Lama</option>
            </select>
          </li>
        </div>

        <div>
          <li><label for="date">Tanggal Peminjaman</label></li>
          <span id="titik">:</span>
          <li><input type="date" name="date" /></li>
        </div>

        <div id="tombol">
          <li><input type="submit" name="Simpan" value="Submit" /></li>
          <li><input type="reset" name="Reset" value="Reset" /></li>
        </div>
      </ul>
    </form>
  </body>
</html>
