<?php
    include("config.php");
    if(isset($_POST['input'])){

        $input = $_POST['input'];
        $query = "SELECT * FROM users WHERE username LIKE '{$input}%' OR email LIKE '{$input}%' OR name LIKE '{$input}%' ";

        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result)>0){?>


            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th>Owners name</th>
                        <th>Email</th>
                        <th>Pet Name</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    while($row = mysqli_fetch_assoc($result)){

        
                        $username = $row['username'];
                        $email = $row['email'];
                        $name = $row['name'];


                        ?>

                        <tr>
                            <td><?php echo $username;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $name;?></td>

                        </tr>

                        <?php



                    }

                    ?>
                </tbody>

            </table>


            <?php
        }else{
            echo "<h6 class = 'text-danger text-center' mt-3>NO data found</h6>";
        }
    }
?>