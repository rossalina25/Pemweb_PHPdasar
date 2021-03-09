<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Pembeli</label>
                    <input type="text" name="pembeli" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="mesin cuci">
                    <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Tanggal Pemesanan </label>
                    <input type="date" name="date" value="" class="form-control">
                </div>

                <label for="">Tipe Kurir</label>
                <select class="form-select form-control" name='courier_type' class="form-control">
                    <option selected>Pilih Tipe Kurir :</option>
                    <option value="tiki">Tiki</option>
                    <option value="sicepat">Si Cepat</option>
                    <option value="pos">Pos</option>
                    <option value="grab">Grab</option>
                    <option value="gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Alamat Pembeli</label>
                    <textarea class="form-control" name="address" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Biaya Kurir</label>
                    <input type="text" name="courier" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Biaya Asuransi</label>
                    <input type="text" name="assurance" value="" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-sm btn-block">
					Submit
				</button>
                
            </form>

			<?php
			
				$pembeli = $_POST['pembeli'];
				$total_item = $_POST['total_item'];
				$date = $_POST['date'];
				$courier_type = $_POST['courier_type'];
				$address = $_POST['address'];
				$courier_cost = $_POST['courier'];
				$assurance = $_POST['assurance'];
				$harga = $_POST['produk'];

				// $total_cost =  $harga * $total_item + $assurance + $courier;


				if( $harga == "tv" ){
					// echo "total_cost : " . 3000000 * $total_item;
					$hasil = 3000000 * $total_item + $assurance + $courier_cost;     

				}
				
				else if($harga == "kulkas" ){
					$hasil = 6000000 * $total_item + $assurance + $courier_cost;

				}
				else {
					$hasil = 4000000 * $total_item + $assurance + $courier_cost;
				
				}

			?>
        </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Pembeli : <?php echo $pembeli?></li>
                    <li class="list-group-item">Item : <?php echo $harga?></li>
                    <li class="list-group-item">Tanggal Pemesanan : <?php echo $date?> </li>
                    <li class="list-group-item">Tipe Kurir : <?php echo $courier_type?></li>
                    <li class="list-group-item">Alamat Pembeli : <?php echo $address?></li>
                    <li class="list-group-item">Biaya Kurir : <?php echo $courier_cost?></li>
                    <li class="list-group-item">Biaya Asuransi : <?php echo $assurance?></li>
                    <li class="list-group-item">Total : <?php echo $hasil?></li>
                </ul>

                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Kulkas : Rp.6000.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>