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
                                $ <?php echo CHtml::textField("Expenditures[$cnt][prop_tax_asses]", isset(Yii::app()->session['step6']['Expenditures'][$cnt]["prop_tax_asses"]) ? Yii::app()->session['step6']['Expenditures'][$cnt]["prop_tax_asses"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("Expenditures[$cnt][fed_state_income_tax]", isset(Yii::app()->session['step6']['Expenditures'][$cnt]["fed_state_income_tax"]) ? Yii::app()->session['step6']['Expenditures'][$cnt]["fed_state_income_tax"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("Expenditures[$cnt][realestate_loan_payment]", isset(Yii::app()->session['step6']['Expenditures'][$cnt]["realestate_loan_payment"]) ? Yii::app()->session['step6']['Expenditures'][$cnt]["realestate_loan_payment"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("Expenditures[$cnt][payment_contract]", isset(Yii::app()->session['step6']['Expenditures'][$cnt]["payment_contract"]) ? Yii::app()->session['step6']['Expenditures'][$cnt]["payment_contract"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("Expenditures[$cnt][living_expenses]", isset(Yii::app()->session['step6']['Expenditures'][$cnt]["living_expenses"]) ? Yii::app()->session['step6']['Expenditures'][$cnt]["living_expenses"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("Expenditures[$cnt][other]", isset(Yii::app()->session['step6']['Expenditures'][$cnt]["other"]) ? Yii::app()->session['step6']['Expenditures'][$cnt]["other"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>