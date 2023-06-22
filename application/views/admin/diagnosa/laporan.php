<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table {
         width: 100%;
         border-collapse: collapse;
      }

      table,
      th,
      td {
         border: 1px solid black;
      }

      th,
      td {
         padding: 5px;
         text-align: left;
      }
   </style>
</head>

<body>
   <table>
      <thead>
         <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Presentase</th>
            <th>Penyakit</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $index => $_data) {
         ?>
            <tr>
               <td><?= $index + 1 ?></td>
               <td><?= $_data->tanggal ?></td>
               <td><?= $_data->nama ?></td>
               <td><?= $_data->alamat ?></td>
               <td><?= $_data->JK ?></td>
               <td><?= $_data->presentase ?></td>
               <td><?= $_data->nama_penyakit ?></td>
            </tr>
         <?php
         }
         ?>
      </tbody>
   </table>
</body>

</html>