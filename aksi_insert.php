                  <?php 
                      include "config.php";    
                      $mysqli = "INSERT INTO tb_training(DGB,
                                              JS,
                                              K,
                                              M,
                                              Latitude,
                                              Longitude,
                                              Label)
                              VALUES ('$_POST[DGB]',
                                      '$_POST[JS]',
                                      '$_POST[K]',
                                      '$_POST[M]',
                                      '$_POST[Latitude]',
                                      '$_POST[Longitude]',
                                      '$_POST[Label]')";
                      $query = mysqli_query($connect,$sql);
                      header("location:index.php");
                  ?>