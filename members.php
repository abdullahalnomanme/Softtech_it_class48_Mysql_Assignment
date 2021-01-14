<!-- Header Link  -->
<?php
require_once('header.php');
?>

<!-- Navbar link  -->
<?php
require_once('nav.php');
?>




<?php

require_once('config.php');
// require_once('functions.php');
// $project->connection();






$query = $connection->query("SELECT * FROM users");

// $query_data_from_db->fetch_assoc();
// $query_data_from_db->fetch_object();
// $data_from_db_after_fetch = mysqli_fetch_object($query);

// print_r($data_from_db_after_fetch);
// $rows = mysqli_fetch_assoc($query);

?>


<section class="content m-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-header text-center bg-info text-white">
                        <h3>Members list</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sl. No.</th>
                                <th scope="col">User id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Password</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $counter = 0; ?>
                                
                                <?php while($row = $query->fetch_object() ):?>
                                <!-- <?php print_r($row);?> -->
                                <tr>
                                <th scope="row"><?php echo ++$counter ?></th>
                                <th scope="row"><?php echo $row->id; ?></th>
            
                                <td><?php echo $row->first_name; ?></td>
                                <td><?php echo $row->last_name; ?></td>
                                <td><?php echo $row->email_address; ?></td>
                                <td><?php echo $row->password; ?></td>
                                </tr>
                                <?php endwhile ;?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>


<!-- Footer Page  -->
<?php
require_once('footer.php');
?>
