<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
        
        $("#employment_type<?php echo $cnt ?>").change(function(){
            var type = $("#employment_type<?php echo $cnt ?> option:selected").val();
            unemployed(type);
            if(type == "fulltime" || type == "parttime"){
                $("#employed<?php echo $cnt; ?>").show();
                $("#selfemployed<?php echo $cnt; ?>").hide();
                $("#plusminuseiiempl<?php echo $cnt; ?>").show();
                $("#plusminuseiiself<?php echo $cnt; ?>").hide();
            } else if(type == "selfemployed"){
                $("#employed<?php echo $cnt; ?>").hide();
                $("#selfemployed<?php echo $cnt; ?>").show();
                $("#plusminuseiiempl<?php echo $cnt; ?>").hide();
                $("#plusminuseiiself<?php echo $cnt; ?>").show();
            } else {
                $("#employed<?php echo $cnt; ?>").hide();
                $("#selfemployed<?php echo $cnt; ?>").hide();
                $("#plusminuseiiempl<?php echo $cnt; ?>").hide();
                $("#plusminuseiiself<?php echo $cnt; ?>").hide();
            }
        });
        
        var eiinewrowurl = "<?php echo Yii::app()->createUrl('/rental/eiinewrow'); ?>";
        
        /* action for selfemployment */
        var eiicntself = <?php echo isset(Yii::app()->session['step4']["eiiself$cnt"]) && !empty(Yii::app()->session['step4']["eiiself$cnt"]) ? Yii::app()->session['step4']["eiiself$cnt"] : 2 ?>;
        $("#pluseiiself<?php echo $cnt; ?>").unbind("click").click(function(event){
            var type = $("#employment_type<?php echo $cnt ?> option:selected").val();
            $.post(eiinewrowurl, {cnt: <?php echo $cnt; ?>, cnt2:eiicntself, type:type}, function(response){
                $("#tbl-selfemployed<?php echo $cnt; ?> tbody:last").append(response);
            });
            
            $("#eiiself<?php echo $cnt; ?>").val(eiicntself);
            
            eiicntself++;
            
            if(eiicntself > 2){
                $("#minuseiiself<?php echo $cnt; ?>").show();  
            }
            
            event.stopPropagation();
            
            return false;
        });
        
        $("#minuseiiself<?php echo $cnt; ?>").unbind("click").click(function(event){
            $("#tbl-selfemployed<?php echo $cnt; ?> tr:last").remove();
            
            $("#eiiself<?php echo $cnt; ?>").val(eiicntempl);
            
            eiicntself--;
            
             if(eiicntself == 2){
                $(this).hide();
            }
            
            event.stopPropagation();
            
            return false;
        });
        
        if(eiicntself == 2){
            $("#minuseiiself<?php echo $cnt; ?>").hide();
        }
        /* end action for selfemployment */
        
        
        /* action for fulltime and parttime (employment) */
        var eiicntempl = <?php echo isset(Yii::app()->session['step4']["eiiempl$cnt"]) && !empty(Yii::app()->session['step4']["eiiempl$cnt"]) ? Yii::app()->session['step4']["eiiempl$cnt"]+1 : 2 ?>;
        $("#pluseiiempl<?php echo $cnt; ?>").click(function(){
            var type = $("#employment_type<?php echo $cnt ?> option:selected").val();
            $.post(eiinewrowurl, {cnt: <?php echo $cnt; ?>, cnt2:eiicntempl, type:type}, function(response){
                $("#tbl-employed<?php echo $cnt; ?> tbody:last").append(response);
            });

            $("#eiiempl<?php echo $cnt; ?>").val(eiicntempl);

            eiicntempl++;

            if(eiicntempl > 2){
                $("#minuseiiempl<?php echo $cnt; ?>").show();  
            }
        });
        
        $("#minuseiiempl<?php echo $cnt; ?>").click(function(){
            $("#tbl-employed<?php echo $cnt; ?> tr:last").remove();
            
            $("#eiiempl<?php echo $cnt; ?>").val(eiicntempl);
            
            eiicntempl--;
            
            if(eiicntempl == 2){
                $(this).hide();
            }
            
            return false;
        });
        
        if(eiicntempl == 2){
            $("#minuseiiempl<?php echo $cnt; ?>").hide();
        }
        /* end action for fulltime and parttime (employment) */
        
        var typ = $("#employment_type<?php echo $cnt ?> option:selected").val();
        if(typ == "fulltime" || typ == "parttime"){
            $("#employed<?php echo $cnt; ?>").show();
            $("#plusminuseiiempl<?php echo $cnt; ?>").show();
        } else if(typ == "selfemployed"){
            $("#selfemployed<?php echo $cnt; ?>").show();
            $("#plusminuseiiself<?php echo $cnt; ?>").show();
        } else {
            $("#employed<?php echo $cnt; ?>").hide();
            $("#selfemployed<?php echo $cnt; ?>").hide();
            $("#plusminuseiiempl<?php echo $cnt; ?>").show();
            $("#plusminuseiiself<?php echo $cnt; ?>").show();
        }
        
        $("#skip-empinfo").change(function(){
            skipemp();     
        });
        
        skipemp();     
        
        function skipemp(){
            for(var i=2;i<=<?php echo $cnt ?>;i++){
                var form = $("#empinfo-"+i);
                if($("#skip-empinfo").is(":checked")){
                    form.find("input[required='required']").each(function(){
                         var elem = $(this);
                         if(elem.hasAttr('required')){
                             elem.removeAttr("required");
                             elem.attr("notrequired","notrequired");
                         }
                    });
                } else {
                    form.find("input[notrequired='notrequired']").each(function(){
                        var elem = $(this);
                        if(elem.hasAttr('notrequired')){
                            elem.removeAttr("notrequired");
                            elem.attr('required', 'required');
                        }
                    });
                }
            }
        }
        
        unemployed($("#employment_type<?php echo $cnt ?> option:selected").val());
        
        function unemployed(sel){
            var form = $("#empinfo-<?php echo $cnt; ?>");
            if(sel == "unemployed" || sel == ""){
                form.find("input[required='required']").each(function(){
                     var elem = $(this);
                     if(elem.hasAttr('required')){
                         elem.removeAttr("required");
                         elem.attr("notrequired","notrequired");
                     }
                });
                
            } else if(sel == "selfemployed"){
                var ep = $("#selfemployed<?php echo $cnt; ?>");
                ep.find("input").each(function(){
                    var elem = $(this);
                    elem.attr("required","required");
                    elem.removeAttr("notrequired");
                });
                
                var el = $("#employed<?php echo $cnt; ?>");
                el.find("input").each(function(){
                    var elem = $(this);
                    elem.attr("notrequired","notrequired");
                    elem.removeAttr("required");
                });
            } else if((sel == "fulltime") || (sel = "parttime")){
                var el = $("#employed<?php echo $cnt; ?>");
                el.find("input").each(function(){
                    var elem = $(this);
                    elem.attr("required","required");
                    elem.removeAttr("notrequired");
                }); 
                
                var ep = $("#selfemployed<?php echo $cnt; ?>");
                ep.find("input").each(function(){
                    var elem = $(this);
                    elem.attr("notrequired","notrequired");
                    elem.removeAttr("required");
                });
            }
        }
    });
</script>
<form method="POST" class="step4-form" id="empinfo-<?php echo $cnt; ?>" postable>
    <table width="100%" border="0">
        <tbody>
            <?php if($cnt == 2){ ?>
            <tr>
                <td valign="top" colspan="8">
                <?php echo CHtml::checkbox("skip-empinfo", isset(Yii::app()->session['step4']['skip-empinfo']) ? true : false, array('id'=>'skip-empinfo'))." skip to continue"; ?>
                </td>
            </tr> <?php
                }
            ?> 
            <tr>
                <td colspan="6">
                    <table border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <b> <div id="name<?php echo $cnt; ?>">Employment Status of <?php echo Utils::fullname($cnt); ?></div></b> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php 
                                    $empType = array(
                                        "fulltime" => "Full Time",
                                        "parttime" => "Part Time",
                                        "selfemployed" => "Self Employed",
                                        "unemployed" => "Unemployed",
                                    );
                                    
                                    echo CHtml::dropdownList("EmploymentInfo[$cnt][employment_type]", isset(Yii::app()->session['step4']['EmploymentInfo'][$cnt]['employment_type']) ? Yii::app()->session['step4']['EmploymentInfo'][$cnt]['employment_type'] : "", $empType, array('id'=>"employment_type$cnt"));
                                    ?>
                                    <?php echo CHtml::image('images/star.png', 'required'); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <div id="subeii1">
                        <div id="employed<?php echo $cnt; ?>" style="display: none">
                            <?php $this->renderPartial("_employed_form", array('cnt'=>$cnt), false, true); ?>
                        </div>
                        <div id="selfemployed<?php echo $cnt; ?>" style="display: none">
                            <?php $this->renderPartial("_self_employed_form", array('cnt'=>$cnt), false, true); ?>
                        </div>
                    </div>
                    <?php 
                        echo CHtml::hiddenField("eiiempl$cnt", isset(Yii::app()->session['step4']["eiiempl$cnt"]) ? Yii::app()->session['step4']["eiiempl$cnt"] : "", array('id'=>"eiiempl$cnt"));
                    ?>
                    <?php 
                        echo CHtml::hiddenField("eiiself$cnt", isset(Yii::app()->session['step4']["eiiself$cnt"]) ? Yii::app()->session['step4']["eiiself$cnt"] : "", array('id'=>"eiiself$cnt"));
                    ?>
                </td>
            </tr>
        </tbody>
    </table> 
</form>