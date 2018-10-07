<?php include_once("header.php") ?>
<div class="container-fluid">

   <div class="col-md-3">

     <div class="container" style="margin-top: 10px">

          <form method="POST" action="<?php echo site_url('Edvizo-page/admin_controller/category')?>">

           <h4> Category </h4>
           <p><a href="<?php echo site_url('Edvizo-page/admin_controller')?>"><span class="glyphicon glyphicon-arrow-left"> Back</span></a></p>
           <input type="radio" name="category" value="Men"> Men <br>
           <input type="radio" name="category" value="Women"> Women <br>
            <br>
           <button type="submit" class="btn btn-default btn-sm">Apply</button>

         </form>

      </div>

     <div class="container" style="margin-top: 10px">

       <form method="POST" action="<?php echo site_url('Edvizo-page/admin_controller/color')?>">

           <h4> Colour </h4>
           <p><a href="<?php echo site_url('Edvizo-page/admin_controller')?>"><span class="glyphicon glyphicon-arrow-left"> Back</span></a></p>
           <input type="radio" name="color" value="Blue"> Blue <br>
           <input type="radio" name="color" value="Black"> Black <br>
           <input type="radio" name="color" value="Gray"> Gray <br>
           <input type="radio" name="color" value="White"> White <br>
           <br>
           <button type="submit" class="btn btn-default btn-sm">Apply</button>

        </form>

      </div>

      <div class="container" style="margin-top: 10px">

        <form method="POST" action="<?php echo site_url('Edvizo-page/admin_controller/size')?>">

            <h4> Size </h4>
            <p><a href="<?php echo site_url('Edvizo-page/admin_controller')?>"><span class="glyphicon glyphicon-arrow-left"> Back</span></a></p>
            <input type="radio" name="size" value="Extra_Large"> Extra_large <br>
            <input type="radio" name="size" value="Large"> Large <br>
            <input type="radio" name="size" value="Medium"> Medium <br>
            <input type="radio" name="size" value="Small"> Small <br>
            <br>
            <button type="submit" class="btn btn-default btn-sm">Apply</button>

         </form>

       </div>

       <div class="container" style="margin-top: 10px">

         <form method="POST" action="<?php echo site_url('Edvizo-page/admin_controller/price')?>">

           <h4> Price </h4>
           <p><a href="<?php echo site_url('Edvizo-page/admin_controller')?>"><span class="glyphicon glyphicon-arrow-left"> Back</span></a></p>
           <input type="radio" name="price" value="low"> low [<500] <br>
           <input type="radio" name="price" value="avg"> average <br>
           <input type="radio" name="price" value="high"> high [>1500] <br>
           <br>
           <button type="submit" class="btn btn-default btn-sm">Apply</button>


        </form>

        </div>
   </div>

   <!-- main content -->
   <div class="col-md-9">
     <div class="row">
       <h2 class="text-center" style="margin-top: 35px">Feature products</h2>

       <?php
       if($fetch_data->num_rows() > 0)
       {
              foreach ($fetch_data->result() as $row) {

           ?>
                   <div class="col-md-3" style="margin-top: 50px">
                   <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row->img ).'" style="width:200px;height:200px"/>'; ?>
                   <h5><?php echo $row->description; ?></h5>
                   </div>


             <?php }
       }
       ?>

     </div>
   </div>

<?php include_once("footer.php") ?>
