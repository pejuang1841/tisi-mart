<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Form Supplier</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form">

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Nama Supplier *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Masukkan Nama Supplier *" required="required" data-error="Nama supplier di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Alamat Supplier *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Masukkan Alamat Supplier *" required="required" data-error="Alamat supplier di perlukan.">
                                                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group mt-2">
                            <label for="form_lastname">No HP Supplier *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Masukkan No HP Supplier *" required="required" data-error="No hp supplier di perlukan.">
                                                            </div>
                    </div>


                    <div class="col-md-12">
                        
                        <input type="submit" class="btn mt-5 btn-success btn-send  pt-2 btn-block
                            " value="Submit" >
                    
                </div>
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

</body>
</html>