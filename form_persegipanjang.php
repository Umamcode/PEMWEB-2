<!DOCTYPE html>
<html>
<head>
    <title>Form Persegi Panjang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container" style = "border: 1px solid black; width: 40%; margin: 10% auto; border-radius:10px; background-color:#EEE4B1;">
        <h2>Form Persegi Panjang</h2>
        <form action="class_persegipanjang.php" method="POST">
            <div class="form-group row">
                <label for="panjang" class="col-sm-4 col-form-label" style='font-size: 20px;'>Panjang :</label> 
                <div class="col-sm-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> 
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div> 
                        <input id="panjang" name="panjang" placeholder="Masukan Panjang" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-sm-4 col-form-label" style='font-size: 20px;'>Lebar:</label> 
                <div class="col-sm-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div> 
                        <input id="lebar" name="lebar" placeholder="Masukan Lebar" type="text" class="form-control">
                    </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button name="submit" type="submit" class="btn btn-primary" style= "padding: 10px 20px; background-color: #294B29; color: #fff; border: none; border-radius: 5px;">Hitung</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
