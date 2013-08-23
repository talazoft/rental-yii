<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".currency").autoNumeric();  
    });
</script>
<form class="step6-form" method="post" name="creditfinance-<?php echo $cnt ?>" id="creditfinance-<?php echo $cnt ?>">
    <table>
        <tbody>
            <tr>
                <td>Credit & Financial Condition of <?php echo Utils::fullname($cnt); ?></td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tbody>
            <?php 
                $this->renderPartial("_credit_info", array('cnt'=>$cnt, 'cnt2'=>$cnt2))
            ?>
            <?php 
                $this->renderPartial("_credit_ref", array('cnt'=>$cnt, 'cnt2'=>$cnt2));
            ?>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td>
                    <b>Financial Condition:</b>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    <?php $this->renderPartial("_monthly_income", array('cnt'=>$cnt, 'cnt2'=>$cnt2)); ?>
                                </td>
                                <td>
                                    <?php $this->renderPartial("_expenditures", array('cnt'=>$cnt, 'cnt2'=>$cnt2)); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        $this->renderPartial("_stock_bonds", array('cnt'=>$cnt, 'cnt2'=>$cnt2));
                    ?>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="6"> <hr class="dashed"></td>
            </tr>
        </tbody>
    </table>
</form>