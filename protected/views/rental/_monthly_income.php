<table>
    <tbody>
        <tr>
            <td>
                <center>Monthly Income</center>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                Salary or Wage
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("MonthlyIncome[$cnt][salary_or_wage]", isset(Yii::app()->session['step6']['MonthlyIncome'][$cnt]["salary_or_wage"]) ? Yii::app()->session['step6']['MonthlyIncome'][$cnt]["salary_or_wage"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Devidends
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("MonthlyIncome[$cnt][devidends]", isset(Yii::app()->session['step6']['MonthlyIncome'][$cnt]["devidends"]) ? Yii::app()->session['step6']['MonthlyIncome'][$cnt]["devidends"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Rental
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("MonthlyIncome[$cnt][rental]", isset(Yii::app()->session['step6']['MonthlyIncome'][$cnt]["rental"]) ? Yii::app()->session['step6']['MonthlyIncome'][$cnt]["rental"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Business or Professional Income
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                $ <?php echo CHtml::textField("MonthlyIncome[$cnt][bussiness_income]", isset(Yii::app()->session['step6']['MonthlyIncome'][$cnt]["bussiness_income"]) ? Yii::app()->session['step6']['MonthlyIncome'][$cnt]["bussiness_income"] : "", array('style'=>'width:70%', 'class'=>'currency', 'required'=>'required')); ?>
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
                                $ <?php echo CHtml::textField("MonthlyIncome[$cnt][other]", isset(Yii::app()->session['step6']['MonthlyIncome'][$cnt]["other"]) ? Yii::app()->session['step6']['MonthlyIncome'][$cnt]["other"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>