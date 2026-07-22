<html>

<body bgcolor="#f7f7f7">

  <center>

    <h1>MENU TERBAIK</h1>

    <hr width="50%">

    <table cellpadding="20">

      @foreach ($menu as $item)
        <tr>
          <td align="center">
            <img src="{{ asset('images/'.$item['gambar']) }}" width="250" border="2" alt="{{ $item['nama'] }}">
            <p>
              <font size="5"><b>{{ $item['nama'] }}</b></font>
            </p>
            <p>
              <font size="3">Harga : Rp {{ number_format($item['harga'], 0, ',', '.') }}</font>
            </p>
            @unless ($loop->last)
              <hr width="30%">
            @endunless
          </td>
        </tr>
      @endforeach

    </table>

  </center>

</body>

</html>
