<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel in CodeIgniter 3</title>
</head>

<body>

    <h2>Upload Excel File</h2>
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form action="<?= base_url('ExcelController/upload') ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="excel_file" required>
        <button type="submit">Upload</button>
    </form>

    <h2>Data from Database</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($records as $row): ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['phone']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>