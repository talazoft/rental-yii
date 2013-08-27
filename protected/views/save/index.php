<div bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <!-- Save for Web Slices (Untitled-4) -->
    <table width="352" height="294">
        <tr>
            <td background="images/Untitled-6.png" align=center><br><br>
                <?php 
                if($code !="update"){
                ?>
                <div style="color:#FFF"><h3>Your From Code : <?php echo $code; ?></h3></div> 
                <div style="color:#FFF"><h3>Your  Password : <?php echo $pass; ?></h3></div> 
                <?php } else { ?>
                <div style="color:#FFF"><h2><?php echo "Your form has been updated." ?></h2></div>
                <?php } ?>
            </td>
        </tr>
    </table>
    <!-- End Save for Web Slices -->
</div>