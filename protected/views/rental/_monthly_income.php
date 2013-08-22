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
                                $ <?php echo CHtml::textField("MonthlyIncome[salary_or_wage$cnt]", isset(Yii::app()->session['step6']['MonthlyIncome']["salary_or_wage$cnt"]) ? Yii::app()->session['step6']['MonthlyIncome']["salary_or_wage$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("MonthlyIncome[devidends$cnt]", isset(Yii::app()->session['step6']['MonthlyIncome']["devidends$cnt"]) ? Yii::app()->session['step6']['MonthlyIncome']["devidends$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("MonthlyIncome[rental$cnt]", isset(Yii::app()->session['step6']['MonthlyIncome']["rental$cnt"]) ? Yii::app()->session['step6']['MonthlyIncome']["rental$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("MonthlyIncome[bussiness_income$cnt]", isset(Yii::app()->session['step6']['MonthlyIncome']["bussiness_income$cnt"]) ? Yii::app()->session['step6']['MonthlyIncome']["bussiness_income$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
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
                                $ <?php echo CHtml::textField("MonthlyIncome[other$cnt]", isset(Yii::app()->session['step6']['MonthlyIncome']["other$cnt"]) ? Yii::app()->session['step6']['MonthlyIncome']["other$cnt"] : "", array('style'=>'width:70%', 'class'=>'currency')); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>