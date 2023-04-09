  <table>
                                       
                                                    <tr>
                                                     
                                                      <th scope="col">Name</th>
                                                      <th scope="col">Mob.no</th>
                                                      <th scope="col">Address</th>
                                                       <th scope="col">E-mail</th>
                                                        <th scope="col">Semester</th>
                                                         <th scope="col">Year</th>
                                                    </tr>
                                                 
                                             

                                                       <?php

                                    $connection = mysql_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"collagesystem");


                                    if(isset($_POST['search']))
                                    {

                                        $id1 = $_POST['id'];

                                        $query = "select * from studentdata where name='$id1' ";

                                        $query_run = mysql_query($connection,$db,$query);

                                        while ($row = mysql_fetch_array($query_run)) 
                                        {
                                            ?>


                                                    <td><?php echo $data['name']; ?></td> 
                                                      <td><?php echo $data['mobno']; ?></td>
                                                      <td><?php echo $data['address']; ?></td>
                                                           <td><?php echo $data['email']; ?></td>
                                                                <td><?php echo $data['semester']; ?></td>
                                                                     <td><?php echo $data['year']; ?></td>

                                            <?php
                                        }
                                    } ?>



                                                    
                                                    
                                                
                                                </table>
