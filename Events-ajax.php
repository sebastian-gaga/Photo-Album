            <?php
                        session_start();
                        $id=$_SESSION['userid'];
                        include 'includes/connect.php';
                        $i=1;
                        $query= "SELECT * From images where user_id='$id'";
                        $run = mysqli_query($link,$query);
                        while($row=mysqli_fetch_array($run)){
                            $id= $row['user_id'];
                            $image= $row['p_name'];

                            ?>
                            <tr>
                                <td style="text-align: center;width:10%;"><?php echo $i?></td>
                                <td style="text-align: center;width:90%;"><img src="uploads/<?php echo $image; ?>" style="width:30%;"></td>
                            </tr>
              <?php       $i++;   }
            ?>