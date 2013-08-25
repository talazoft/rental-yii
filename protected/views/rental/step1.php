<script>
    $(function(){
        $("#ApplicationInformation_refered_lead").change(function(){
            var sel = $("#ApplicationInformation_refered_lead option:selected").val();
            
            if(sel == "Sign On Property"){
                $("#vreference2").hide();
                $("#vreference3").hide();
                $("#vreference4").hide();
                $("#vreference5").hide();
            } else if(sel == "Advertisement"){
                $("#vreference2").show();
                $("#vreference3").hide();
                $("#vreference4").hide();
                $("#vreference5").hide();
            } else if(sel == "Agents"){
                $("#vreference2").hide();
                $("#vreference3").show();
                $("#vreference4").hide();
                $("#vreference5").hide();
            } else if(sel == "Tenant"){
                $("#vreference2").hide();
                $("#vreference3").hide();
                $("#vreference4").show();
                $("#vreference5").hide();
            } else if(sel == "Other"){
                $("#vreference2").hide();
                $("#vreference3").hide();
                $("#vreference4").hide();
                $("#vreference5").show();
            } else {
                $("#vreference2").hide();
                $("#vreference3").hide();
                $("#vreference4").hide();
                $("#vreference5").hide();
            }
        });
    });
</script>
<div class="step_1 step">
    <div class="titlestep">Rental Information</div>
    <div class="show" id="1"></div>
</div>
<div class="step_content_1 step_content">
    <div id='ri'>
        <?php
            echo $this->renderPartial("_step1_form", '', true);
        ?>
    </div>
</div>