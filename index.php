<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
}
include 'header.php';
include 'nav.php';

?>


<!DOCTYPE html>
<html lang="en">


<body>
  
        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
            <!-- data list -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>User Details</h2>
                        
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Admission</td>
                                <td>Phone Number</td>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $_SESSION['username'] ?></td>
                                <td><?php echo $_SESSION['adm_no'] ?></td>
                                <td><?php echo $_SESSION['phone_no'] ?></td>
                               
                            </tr>
                           
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <script>
            let list = document.querySelectorAll('.navigation li');
            let main = document.querySelector('.main');
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            let trArr = document.querySelectorAll('.recentCustomers table tr');
            trArr.forEach(element => {
                var h4 = element.querySelector('td h4');
                var span = h4.querySelector('span');

                element.querySelector('td').childNodes[1].childNodes[0].nextElementSibling.setAttribute('src',
                    `https://ui-avatars.com/api/?name=${h4.textContent}+${span.textContent}&background=0D8ABC&color=fff`
                )
            })

            toggle.onclick = () => {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }

            function activeLink() {
                list.forEach(item => {
                    item.classList.remove('hovered');
                    this.classList.add('hovered')
                })
            }
            list.forEach(item => {
                item.addEventListener('mouseover', activeLink)
            }
            )
        </script
</body>

</html>