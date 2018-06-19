@extends('layouts.default')
@section('content')
        <!DOCTYPE html>
<html >
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table,td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        table,th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        table, tr:nth-child(even) {
            background-color: #dddddd;
        }

        table, input {
            background-color: #dddddd;

        }
    </style>
</head>



<body>
<br>

<h2>Message Table</h2>

<table id="myTable">

    <tr>
        <th>Messages</th>
        <th>Remove</th>
    </tr>
    <tr>
        <td><a href="card">Test Message 1.
                <table src="/pages/card"></table>
            </a></td>
        <td>

            <input type="button" value="Delete"  onclick="deleteRow(this)">


        </td>
    </tr>
    <tr>
        <td><a href="card">I love to fly.
                <table src="/pages/card"></table>
            </a></td>
        <td>

            <input type="button" value="Delete"  onclick="deleteRow(this)">


        </td>
    </tr>
    <tr>
        <td><a href="card">It's a sunny day.
                <table src="/pages/card"></table>
            </a></td>
        <td>

            <input type="button" value="Delete"  onclick="deleteRow(this)">


        </td>
    </tr>
    <tr>
        <td><a href="card">Time to go back to work.
                <table src="/pages/card"></table>
            </a></td>
        <td>

            <input type="button" value="Delete"  onclick="deleteRow(this)">


        </td>
    </tr>
    <tr>
        <td><a href="card">Coding is fun.
                <table src="/pages/card"></table>
            </a></td>
        <td>

            <input type="button" value="Delete"  onclick="deleteRow(this)">


        </td>
    </tr>
</table>

<script>
    function deleteRow(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("myTable").deleteRow(i);
    }
</script>

</body>
</html>


@endsection