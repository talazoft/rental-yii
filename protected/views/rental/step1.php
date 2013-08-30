<script>
    $(function(){
        $("#ApplicationInformation_refered_lead").change(function(){
            var sel = $("#ApplicationInformation_refered_lead option:selected").val();
            
            if(sel == "Sign On Property"){
                $("#vreference2").hide();
                $("#venue").removeAttr('required');
                
                $("#vreference3").hide();
                $("#agent_name").removeAttr('required');
                $("#agent_phone").removeAttr('required');
                
                $("#vreference4").hide();
                $("#tenant_name").removeAttr('required');
                
                $("#vreference5").hide();
                $("#other_val").removeAttr('required');
            } else if(sel == "Advertisement"){
                $("#vreference2").show();
                $("#venue").attr('required', 'required');
                
                $("#vreference3").hide();
                $("#agent_name").removeAttr('required');
                $("#agent_phone").removeAttr('required');
                
                $("#vreference4").hide();
                $("#tenant_name").removeAttr('required');
                
                $("#vreference5").hide();
                $("#other_val").removeAttr('required');
            } else if(sel == "Agents"){
                $("#vreference2").hide();
                $("#venue").removeAttr('required');
                
                $("#vreference3").show();
                $("#agent_name").attr('required', 'required');
                $("#agent_phone").attr('required', 'required');
                
                $("#vreference4").hide();
                $("#tenant_name").removeAttr('required');
                
                $("#vreference5").hide();
                $("#other_val").removeAttr('required');
            } else if(sel == "Tenant"){
                $("#vreference2").hide();
                $("#venue").removeAttr('required');
                
                $("#vreference3").hide();
                $("#agent_name").removeAttr('required');
                $("#agent_phone").removeAttr('required');
                
                $("#vreference4").show();
                $("#tenant_name").attr('required', 'required');
                
                $("#vreference5").hide();
                $("#other_val").removeAttr('required');
                
            } else if(sel == "Other"){
                $("#vreference2").hide();
                $("#venue").removeAttr('required');
                
                $("#vreference3").hide();
                $("#agent_name").removeAttr('required');
                $("#agent_phone").removeAttr('required');
                
                $("#vreference4").hide();
                $("#tenant_name").removeAttr('required');
                
                $("#vreference5").show();
                $("#other_val").attr('required', 'required');
                
            } else {
                $("#vreference2").hide();
                $("#venue").removeAttr('required');
                
                $("#vreference3").hide();
                $("#agent_name").removeAttr('required');
                $("#agent_phone").removeAttr('required');
                
                $("#vreference4").hide();
                $("#tenant_name").removeAttr('required');
                
                $("#vreference5").hide();
                $("#other_val").removeAttr('required');
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