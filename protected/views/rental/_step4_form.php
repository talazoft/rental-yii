<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();
        
        $("#employment_type<?php echo $cnt ?>").change(function(){
            var type = $("#employment_type<?php echo $cnt ?> option:selected").val();
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
    });
</script>
<form method="POST" class="step4-form" id="empinfo-<?php echo $cnt; ?>">
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td colspan="6">
                    <table border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <b> <div id="name<?php echo $cnt; ?>">Employment Status of </div></b> 
                                </td>
                                <td>
                                    <select id="employment_type<?php echo $cnt ?>" name="employment_type<?php echo $cnt ?>">
                                        <option value="fulltime">Full Time</option>
                                        <option value="parttime">Part Time</option>
                                        <option value="selfemployed">Self Employed</option>
                                        <option value="unemployed">Unemployed</option>
                                    </select>						  
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
                            <table width="791px" border="1" style="border-collapse:collapse; border-color:#bebebe" id='tbl-employed<?php echo $cnt; ?>' style="width:790px">
                                <tbody>
                                    <tr>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Employer</th>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Address</th>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Department</th>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Position/Title</th>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Length of Employment</th>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Salary</th>
                                        <th bgcolor="#dddddd" height="36" style="border-collapse:collapse; border-color:#bebebe">Supervisor's Name</th>
                                    </tr>
                                    <?php 
                                    if(!isset(Yii::app()->session['step4']["eiiempl$cnt"])){
                                        echo $this->renderPartial("_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                                    } else {
                                        if(Yii::app()->session['step4']["eiiempl$cnt"] > 1){
                                            $t = Yii::app()->session['step4']["eiiempl$cnt"];
                                            for($i=1;$i<=$t;$i++){
                                                echo $this->renderPartial("_employed_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                                            }
                                        } else {
                                            echo $this->renderPartial("_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="selfemployed<?php echo $cnt; ?>" style="display: none">
                            <table width="791px" border=1 style="border-collapse:collapse; border-color:#bebebe" id='tbl-selfemployed<?php echo $cnt; ?>' style="width:790px; display: none">
                                <tr>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Business Name</th>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Business Type</th>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Years in Business</th>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Address</th>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Stay Length</th>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Landlord Name</th>
                                    <th height="36" bgcolor="#dddddd" style="border-collapse:collapse; border-color:#bebebe">Phone</th>
                                </tr>
                                <?php 
                                    if(!isset(Yii::app()->session['step4']["eiiself$cnt"])){
                                        echo $this->renderPartial("_self_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                                    } else {
                                        if(Yii::app()->session['step4']["eiiself$cnt"] > 1){
                                            $t = Yii::app()->session['step4']["eiiself$cnt"];
                                            for($i=1;$i<=$t;$i++){
                                                echo $this->renderPartial("_self_employed_row", array('cnt' => $cnt, 'cnt2' => $i), true, true);
                                            }
                                        } else {
                                            echo $this->renderPartial("_self_employed_row", array('cnt' => $cnt, 'cnt2' => 1), true, true);
                                        }
                                    }
                                ?>
                            </table>
                        </div>
                    </div>			  
                </td>
            </tr>
        </tbody>
    </table> 
    <div id="plusminuseiiempl<?php echo $cnt; ?>" style="display:none">
        <table width="100%">
            <tbody>
                <tr>
                    <td align="center" colspan="6"> 
                        <a id="pluseiiempl<?php echo $cnt; ?>"> 
                            <img border="0" src="images/plus.png"> 
                        </a>
                        <a id="minuseiiempl<?php echo $cnt; ?>">
                            <img src="images/minus.png">
                        </a>
                    </td>
                    <?php 
                        echo CHtml::hiddenField("eiiempl$cnt", isset(Yii::app()->session['step4']["eiiempl$cnt"]) ? Yii::app()->session['step4']["eiiempl$cnt"] : "", array('id'=>"eiiempl$cnt"));
                    ?>
                </tr>
                <tr>
                    <td align="center" colspan="6"> <hr class="dashed"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="plusminuseiiself<?php echo $cnt; ?>" style="display: none">
        <table width="100%">
            <tbody>
                <tr>
                    <td align="center" colspan="6"> 
                        <a id="pluseiiself<?php echo $cnt; ?>"> 
                            <img border="0" src="images/plus.png"> 
                        </a>
                        <a id="minuseiiself<?php echo $cnt; ?>">
                            <img src="images/minus.png">
                        </a>
                    </td>
                    <?php 
                        echo CHtml::hiddenField("eiiself$cnt", isset(Yii::app()->session['step4']["eiiself$cnt"]) ? Yii::app()->session['step4']["eiiself$cnt"] : "", array('id'=>"eiiself$cnt"));
                    ?>
                </tr>
                <tr>
                    <td align="center" colspan="6"> <hr class="dashed"></td>
                </tr>
            </tbody>
        </table>
    </div>
</form>