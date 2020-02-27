<?php
	session_start();
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}
 ?>

 <div  id="prod_detail" >
   <div>
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">Product Details</h4>
       </div>
       <div class="modal-body" id='dynamic_content'>
         ...
       </div>
       <div class="modal-footer">

       </div>
     </div>
   </div>
 </div>

<!-- Modal ends-->
</div>
</div>
