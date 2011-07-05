<?php
	include("header.php");
?>

<div class="grid_14 push_1">
<a href="tel:+18008920827" class="phone-link">Call Now</a>
</div>
<!--Buy billion -->
<div class="grid_14 push_1 buy_table margin_top_20"> <div class="table_title"><span>M</span> Contact Us </div> 

<div id="contact_form">
<form name="contact"  method="post" action="">
	<fieldset>  
    <label for="name" id="name_label">Name</label>  
    <input autofocus type="text" name="name" id="name" size="30" value="" class="text-input" />  
    <label class="error" for="name" id="name_error">This field is required.</label>  
  
    <label for="email" id="email_label">Email</label>  
    <input type="text" name="email" id="email" size="30" value="" class="text-input" />  
    <label class="error" for="email" id="email_error">This field is required.</label>  
  
    <label for="phone" id="phone_label">Phone</label>  
    <input type="text" name="phone" id="phone" size="30" value="" class="text-input" />  
    <label class="error" for="phone" id="phone_error">This field is required.</label>  
  
    <br />  
    <input type="submit" name="submit" class="button" id="submit_btn" value="Send" />  
  </fieldset>  
</form>
</div>

</div>
<div class="clear"></div>
</body>
</html>
<?php include("footer.php"); ?>
