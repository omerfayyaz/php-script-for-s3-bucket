<style>
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    label {
        font-weight: bold;
        margin-bottom: 10px;
        display: block;
    }
    input[type="file"] {
        margin-bottom: 10px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    h1 {
        text-align: center;
    }
</style>
<h1>Upload a ZIP file to S3 Bucket</h1>
<form action="upload_to_s3.php" method="post" enctype="multipart/form-data">
    <input type="file" name="zipFile" id="zipFile" accept=".zip">
    <input type="submit" value="Upload ZIP File">
</form>