<html>

<head>
    <title>Pengajuan Cuti</title>
</head>

<body>
    <h2>Form Pengajuan Cuti</h2>
    <form name="form1" method="get" action="{{ '/home' }}">
        Tanggal :
        <input type="date" date="date"><br>
        Jumlah Hari :
        <input type="text" name="text"><br>
        <select name="select">

        </select>
        Alasan
        <input type="text" name="text"><br>
        <input name="submit" type="submit" value="cancel">
        <input name="submit" href="{{ '/home' }}" type="submit" value="submit">
    </form>
</body>

</html>
