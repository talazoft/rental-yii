<table width="100%" border="0">
    <tbody>
        <tr>
            <td colspan="2">
            A Credit check fee $ 30.00 (per person) to process this Application is required. Money will be given by Applicant to the owner/manager when this Application is turned in processing.			  </td>
        </tr>
        <tr>
            <td>
                <h3>Total Credit Check Fee :&gt;&gt; Pay with
                <select style="width:25%" name="selection3" id="selection3">
                    <option value="">Select </option>
                    <option value="cash">Paypal</option>
                    <option value="credit">Credit</option>
                </select>
                </h3> 
            </td>
            <td align="right">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div id="cash"><!-- <script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script> -->
                    <script src="scripts/jquery.popupWindow.js" type="text/javascript"></script>

                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td align="right">
                                    <a onclick="openCenteredWindow('index.php/credit_check_fee/cash_pdf')">
                                        <img src="images/print_payment.png">
                                    </a>
                                    <script type="text/javascript"> 
                                        var myWindow;
                                        function openCenteredWindow(k) {
                                            var a = document.x.firstname1.value;
                                            var b = document.x.middle1.value;
                                            var c = document.x.lastname1.value;
                                            var sel = document.x.selection3.value;
                                            var kali = document.x.applic.value;
                                            var width = 800;
                                            var height = 400;
                                            var left = parseInt((screen.availWidth/2) - (width/2));
                                            var top = parseInt((screen.availHeight/2) - (height/2));
                                            var windowFeatures = "width=" + width + ",height=" + height + 
                                            ",status,resizable,left=" + left + ",top=" + top + 
                                            ",screenX=" + left + ",screenY=" + top;
                                            myWindow = window.open(k + "?a=" + a  + "&amp;b=" + b + "&amp;c=" + c + "&amp;sel=" + sel +"&amp;kali="+kali, "subWind", windowFeatures);
                                        }
                                    </script> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" border="1" bgcolor="#FFFFFF" style="border-collapse:collapse">
                        <tbody>
                            <tr>
                                <td>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td align="center" colspan="3">PAYMENT RECEIPT</td>
                                            </tr>
                                            <tr>
                                                <td width="15%">______________</td>
                                                <td width="55%"></td>
                                                <td width="30%">Date: <?php echo date("M d, Y"); ?></td>
                                            </tr>
                                            <tr>
                                                <td>______________</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>______________</td>
                                                <td></td>
                                                <td>Number</td>
                                            </tr>
                                            <tr>
                                                <td>Receive Form</td>
                                                <td>fdf23</td>
                                                <td>
                                                    <?php echo $total_fee; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><?php echo Utils::convert_number_to_words($total_fee); ?></td>
                                                <td>Dollars</td>
                                            </tr>
                                            <tr>
                                                <td>For</td>
                                                <td>Rental Application</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Account Balance</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>This Payment</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>New Balance</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Received Balanced</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="0" border="0">
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" name="cekpay" id="cekpay"><strong>I agree to pay the credit check fee </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="credit">
                    <table width="100%" border="1" bgcolor="#FFFFFF" style="border-collapse:collapse">
                        <tbody>
                            <tr>
                                <td>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td width="19%">Order Information</td>
                                                <td width="67%"></td>
                                                <td width="14%">*Required Field</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>Description</td>
                                                <td></td>
                                                <td>Invoice Number</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>Payment Information</td>
                                                <td></td>
                                                <td><h3>Total : $ 30</h3></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center"><img src="images/visa_master.png"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align="center">
                                                    <table width="0" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Card Number</td>
                                                                <td>:</td>
                                                                <td><input type="text" name="cardnumbercc" id="cardnumbercc" maxlength="30">* (Enter number without spaces or dashes)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Expiration Date</td>
                                                                <td>:</td>
                                                                <td><input type="text" name="expirationdatecc" id="expirationdatecc" maxlength="12">*(mmyy)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">Billing Information <br><hr></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="3">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>Customer ID</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>First Name</td>
                                                                <td>:</td>
                                                                <td><input type="text" name="firstnamecc" maxlength="50" id="firstnamecc"> &nbsp; Last Name : <input type="text" name="lastnamecc" id="lastnamecc" maxlength="50"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Company</td>
                                                                <td>:</td>
                                                                <td><input type="text" name="companycc" id="companycc" maxlength="50" style="width:100%"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address</td>
                                                                <td>:</td>
                                                                <td><input type="text" style="width:100%" name="addresscc" id="addresscc"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>City</td>
                                                                <td>:</td>
                                                                <td><input type="text" style="width:100%" name="citycc" id="citycc" maxlength="50"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>State/Province</td>
                                                                <td>:</td>
                                                                <td><input type="text" name="statecc" id="statecc" maxlength="50">&nbsp; Zip/Postal Code : <input type="text" name="zipcc" id="zipcc" maxlength="30"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Country</td>
                                                                <td>:</td>
                                                                <td><input type="text" style="width:100%" name="countrycc" maxlength="50" id="countrycc"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td>:</td>
                                                                <td><input type="text" style="width:100%" name="emailcc" maxlength="50" id="emailcc"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone</td>
                                                                <td>:</td>
                                                                <td><input type="text" style="width:100%" name="phonecc" maxlength="50" id="phonecc"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><!--Shipping Information--></td>
                                                <td></td>
                                                <td>Total</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><hr></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><!--<input type="checkbox" id="cekcc" name="cekcc" />Copy Billing Information to Shipping Information--></td>
                                                <td><!--Total--></td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="3">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="3"><input type="button" value="Submit" name="btncc" id="btncc"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </tbody>
</table>