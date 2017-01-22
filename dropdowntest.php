<?php
	include "includes/header.php";
?>
<select id="conditions" name="conditions">
    <option></option>
<?php
foreach($option in $optionList){
    echo "<option value=$option ";
    if($_REQUEST["conditions"] == $option){
        echo  'selected="selected"';
    }
    echo " > $option </option>";
}
echo "</select>";

if($_REQUEST["conditions"] == "Other"){
    echo '<div id="specify" style="display:block">If Other, Please Specify</div>';
}else{
    echo '<div id="specify" style="display:hidden">If Other, Please Specify</div>';
}
?>

<script>
    $('#conditions').change(function(){
        if($(this).val() == "Other"){
            $('#specify').show();
        }else{
            $('#specify').hide();
        }
    });
</script>
<?php
	include "includes/footer.php";
?>