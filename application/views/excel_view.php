<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel in CodeIgniter 3</title>
</head>

<body>

<form method="post" id="import_form" enctype="multipart/form-data">
			<p><label>Select Excel File</label>
			<input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
			<br />
			<input type="submit" name="import" value="Import" class="btn btn-info" />
		</form>

</body>

</html>