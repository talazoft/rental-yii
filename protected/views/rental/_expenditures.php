<table>
    <tbody>
        <tr>
            <td>
                <center>Expenditures</center>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                Property Taxes & Assessment
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("Expenditures[prop_tax_asses$cnt]", isset(Yii::app()->session['step6']['Expenditures']["prop_tax_asses$cnt"]) ? Yii::app()->session['step6']['Expenditures']["prop_tax_asses$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Federal & State Income Taxes
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("Expenditures[fed_state_income_tax$cnt]", isset(Yii::app()->session['step6']['Expenditures']["fed_state_income_tax$cnt"]) ? Yii::app()->session['step6']['Expenditures']["fed_state_income_tax$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Real Estate Loan Payment
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("Expenditures[realestate_loan_payment$cnt]", isset(Yii::app()->session['step6']['Expenditures']["realestate_loan_payment$cnt"]) ? Yii::app()->session['step6']['Expenditures']["realestate_loan_payment$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Payment on Contract/Note
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("Expenditures[payment_contract$cnt]", isset(Yii::app()->session['step6']['Expenditures']["payment_contract$cnt"]) ? Yii::app()->session['step6']['Expenditures']["payment_contract$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Estimated Living Expenses
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("Expenditures[living_expenses$cnt]", isset(Yii::app()->session['step6']['Expenditures']["living_expenses$cnt"]) ? Yii::app()->session['step6']['Expenditures']["living_expenses$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Other(alimony, child support, etc.)
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("Expenditures[other$cnt]", isset(Yii::app()->session['step6']['Expenditures']["other$cnt"]) ? Yii::app()->session['step6']['Expenditures']["other$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>