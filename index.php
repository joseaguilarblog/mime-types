<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mime Types PHP</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
<style>
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    border: 1px solid #dadada;
    margin-bottom:  10px;
    padding: 10px;  
}  

.header {
    text-align: center;
    margin-top: 10px;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 header">
            <h1>Mime Types PHP</h1>
        </div>
    </div>
    
    <div class="row">
        <?php
$mime_type_image = array(
    'png' => 'image/png',
    'jpe' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'jpg' => 'image/jpeg',
    'gif' => 'image/gif',
    'bmp' => 'image/bmp',
);

$mime_type_csv = array('csv' => 'text/csv');

if (isset($_POST['submitCSV'])) {

if(!in_array($_FILES['attachment']['type'], $mime_type_csv)) {
echo '<div class="alert alert-danger">El archivo no es correcto. Debe tener extensión ';
foreach ($mime_type_csv as $key => $value) {
    echo '.'.$key;
}
echo '</div>';

}
else {
echo '<div class="alert alert-success">El archivo es correcto.</div>';
}
}

if (isset($_POST['submitImage'])) {
    if(!in_array($_FILES['attachment']['type'], $mime_type_image)) {
        echo '<div class="alert alert-danger">El archivo no es correcto. Debe tener extensión ';
        foreach ($mime_type_image as $key => $value) {
            echo '.'.$key.', ';
        }
        echo '</div>';

    }
    else {
        echo '<div class="alert alert-success">El archivo es correcto.</div>';
    }
}
        ?>  
    </div>
    
    <div class="row">
        <div class="col-xs-12">
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="fileUpload">Archivo CSV</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
        <input type="file" name="attachment" class="form-control" />
    </div>
    <div class="form-group">
        <button type="submit" name="submitCSV" class="btn btn-default button button-medium">
            <span>Subir<i class="icon-chevron-right right"></i></span>
        </button>
    </div>
</form>
        </div>	
    </div>
    
    <div class="row">
        <div class="col-xs-12">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fileUpload">Archivo Imagen</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                    <input type="file" name="attachment" class="form-control" />
                </div>
                <div class="form-group">
                    <button type="submit" name="submitImage" class="btn btn-default button button-medium">
                        <span>Subir<i class="icon-chevron-right right"></i></span>
                    </button>
                </div>
            </form>
        </div>	
    </div>

    <div class="row">
        <div class="col-xs-12">
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FBlog-Jose-Aguilar-Desarrollo-Web%2F269898786396364&send=false&layout=standard&width=450&show_faces=false&font=lucida+grande&colorscheme=light&action=like&height=35&appId=283652475068166" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
        </div>
    </div>
</div>
</body>
</html>
