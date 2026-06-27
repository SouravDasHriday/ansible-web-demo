<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ansible Web Server</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f4f4;
            margin:0;
            padding:0;
        }

        .container{
            width:800px;
            margin:60px auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,.15);
            text-align:center;
        }

        h1{
            color:#2c3e50;
        }

        .success{
            color:green;
            font-size:22px;
            font-weight:bold;
        }

        table{
            width:100%;
            margin-top:25px;
            border-collapse:collapse;
        }

        table,th,td{
            border:1px solid #ddd;
        }

        th,td{
            padding:12px;
        }

        th{
            background:#2c3e50;
            color:white;
        }

        footer{
            margin-top:30px;
            color:#666;
        }
    </style>
</head>
<body>

<div class="container">

<h1>🚀 Apache Web Server Successfully Deployed</h1>

<p class="success">
This server was configured automatically using Ansible.
</p>

<table>
<tr>
<th>Component</th>
<th>Status</th>
</tr>

<tr>
<td>Apache (httpd)</td>
<td>Installed ✅</td>
</tr>

<tr>
<td>PHP</td>
<td>Installed ✅</td>
</tr>

<tr>
<td>Ansible Deployment</td>
<td>Successful ✅</td>
</tr>

<tr>
<td>Terraform</td>
<td>Installed ✅</td>
</tr>

</table>

<h3>Server Information</h3>

<p><strong>Hostname:</strong> <?php echo gethostname(); ?></p>

<p><strong>Current Time:</strong>
<?php
date_default_timezone_set("Asia/Dhaka");
echo date("d-m-Y H:i:s");
?>
</p>

<p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>

<footer>
Created for DevOps & Ansible Portfolio
</footer>

</div>

</body>
</html>
