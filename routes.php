<?php
include 'dbBookings.php';
include 'header.php';
include 'nav.php';
$query="SELECT *from routes";
$result = mysqli_query($conn,$query);

?> 
<div class="main">
<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
</div>

 <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Bus Routes</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Start Location</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Destination</td>
                            </tr>
                        </thead>
                        <tbody>
                       
                    <?php
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                     <tr class="results">
                    <td><?php echo $row['start_location']; ?></td>
                    <td><?php echo $row['destination']; ?></td>
                    <td><?php echo $row['payment']; ?></td>
                    <td> <?php echo $row['price'];?></td>

                    </tr>
                    <?php
                    }
                    ?>

                        </tbody>
                    </table>
                </div>
            </div>
             </div>
             <script>
                const arr = document.querySelectorAll('.results')
                arr.forEach((element,index) => {
                    element.addEventListener('click',(e)=>{
                        const tds = element.querySelectorAll('td')
                        const text = []
                        tds.forEach(tdElement => {
                            text.push(tdElement.textContent)
                        });
                        //alert(text)
                        
                    })
                });
             </script>
                         
            