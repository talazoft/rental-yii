<html>
<head>
 <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/pdfstyle.css" />
	<title></title>
</head>
<body>
 <div class="maincontent_info">
    
    	<div class="head_content">
            <div class="logo-info">
                <img src="<?php echo Yii::app()->baseUrl; ?>/img/logo.png" />
            </div>
        
        
     	</div><!---head_content end---->
        
        
          <div class="content">
          <div>
          <div class="judul">
          	<div class="judul_luar">VANTAGE  ASSET MANAGEMENT LTD.</div>
         
            </div>
            <div class="judul_alamat">
            	713 west duarte road suite #G-167, arcadia, ca 91007-7564 (626)5747900 fax 382-5572
            </div>
             <div class="judul_dalam">
            	APPLICATION TO RENT APARTMENT
            </div>
          	</div><!---jjudul end---->
            
            <div class="formulir">
           <table width="100%">
           	<tr>
            	<td width="25%"> Today's Date :<input type="text" name="todaydate"></td>
                <td width="40%"> Property Name :<input type="text" name="propertyname"></td>
                <td width="35%"> Unit #   :<input type="text" name="unit"></td>
            
            </tr>
            <tr>
            	<td colspan="2"> Applicant's Work Number :<input type="text" name="apwn"></td>
               <td width="35%"> Applicant's Home Number :<input type="text" name="aphn"></td>            
            </tr>
            
            <tr>
            	<td colspan="2"> Applicant's Cellphone Number :<input type="text" name="apcn"></td>
               	<td width="35%"> Applicant's Email Address :<input type="text" name="apea"></td>            
            </tr>
            </table>
           
           </div>
             <div class="judul_dalam">APPLICANT'S PERSONAL INFORMATION</div>           	         
          <div class="formulir1">
             <table width="100%" >
             <tr>
            	<td width="33%"> First Name :<input type="text" name="fname"></td>
               	<td width="33%"> Middle :<input type="text" name="middle"></td>     
                <td width="34%"> Last :<input type="text" name="last"></td>        
            </tr>
            
            <tr>
            	<td> Date of Birth :<input type="text" name="dob"></td>
               	<td> Driver Lisence No :<input type="text" name="lisence"></td>     
                <td> S.S.No :<input type="text" name="ssno"></td>        
            </tr>
            </table>
            </div>
              <div class="formulir2">
            <table width="100%" >
            <tr>
            	<td colspan="4"> <i>List of Dependants</i> </td> 
            </tr>
            
            <tr>
            	<th width="25%" align="center"> Name</th>
               	<th width="25%" align="center"> Relation</th>
                <th width="25%"align="center"> Age</th>
                <th width="25%" align="center">Stay In Yes/No</th>        
            </tr>
             <tr>
            	<td width="25%" align="center"><input type="text" name="name[]"></td>
               	<td width="25%" align="center"><input type="text" name="name[]"></td>
                <td width="25%" align="center"><input type="text" name="name[]"></td>
                <td width="25%" align="center"><input type="text" name="name[]"></td>        
            </tr>
             <tr>
            	<td width="25%" align="center"><input type="text" name="name[]"></td>
               	<td width="25%" align="center"><input type="text" name="name[]"></td>
                <td width="25%" align="center"><input type="text" name="name[]"></td>
                <td width="25%" align="center"><input type="text" name="name[]"></td>        
            </tr>
             <tr>
            	<td width="25%" align="center"><input type="text" name="name[]"></td>
               	<td width="25%" align="center"><input type="text" name="name[]"></td>
                <td width="25%" align="center"><input type="text" name="name[]"></td>
                <td width="25%" align="center"><input type="text" name="name[]"></td>        
            </tr>
            <tr>
            	<td width="25%">How long you will live here?</td>
                <td width="25%">One years ? <input type="text" name="1"></td>   
                <td width="25%">Two years ? <input type="text" name="2"> </td>
                <td width="25%">Three years ?<input type="text" name="3"> </td> 
            </tr>
             <tr>
            	<td colspan="4"> <i>Vehicle information : </i> </td> 
            </tr>
            <tr>
            	<th> License Plate</th>
               	<th> Make/Model</th>
                <th> Year</th>
                <th>Color</th>        
            </tr>
            <tr>
            	<td width="25%" align="center"><input type="text"></td>
               	<td width="25%" align="center"><input type="text"></td>
                <td width="25%" align="center"><input type="text"></td>
                <td width="25%" align="center"><input type="text"></td>        
            </tr>
            <tr>
            	<td width="25%" align="center"><input type="text"></td>
               	<td width="25%" align="center"><input type="text"></td>
                <td width="25%" align="center"><input type="text"></td>
                <td width="25%" align="center"><input type="text"></td>        
            </tr>
            </table>
             </div>
             <div class="formulir3">
             <table width="100%">
             <div class="judul_dalam">APPLICANT'S RESIDENCY INFORMATION</div>	         
            
             <tr>
            	<td>Current Address :<input type="text"></td>
               	<td>City :<input type="text"></td> 
                <td>State :<input type="text"></td> 
                <td>Zip :<input type="text"></td>   
            </tr>
            <tr>
            	<td>Length of Stay :<input type="text"></td>
               	<td>Land Lord's Name :<input type="text"></td> 
                <td>Phone No. :<input type="text"></td> 
               
            </tr>
             <tr>
            	<td colspan="4"><div class="panjang">Reason for Moving :<input type="text"></div></td>
            </tr>
             <tr>
            	<td colspan="4"> <i>Give previous address if less than 5 years </i> </td> 
            </tr>
              <tr>
            	<td>Previous Address :<input type="text"></td>
               	<td>City :<input type="text"></td> 
                <td>State :<input type="text"></td> 
                <td>Zip :<input type="text"></td>   
            </tr>
             <tr>
            	<td>Length of Stay :<input type="text"></td>
               	<td>Land Lord's Name :<input type="text"></td> 
                <td>Phone No. :<input type="text"></td> 
               
            </tr>
            <tr>
            	<td colspan="4"><div class="panjang"><i>Reason for Moving</i> :<input type="text"></div></td>
            </tr>
            </table>
            </div>
            <table width="100%">
              <div class="judul_dalam">WORK OR BUSINESS ENTITY INFORMATION</div>               	         
           
            <tr>
            	<td>Employed by : <input type="text"></td>
             	<td colspan="2"><div class="panjang">Address : <input type="text"></div></td> 
             </tr>
             <tr>
            	<td width="45%">Phone No : <input type="text"></td>
             	<td width="25%">Department : <input type="text"></td> 
                <td width="35%">Position / Title : <input type="text"></td> 
             </tr>
             
             <tr>
            	<td>Length of Employment : <input type="text"></td>
             	<td>Salary : <input type="text"></td> 
                <td>Supervisor's Name : <input type="text"></td> 
             </tr>
              <tr>
            	<td colspan="3"> <i>Spouse's Employment Information </i> </td> 
            </tr>
            
             <tr>
            	<td>Employed by : <input type="text"></td>
             	<td colspan="2"><div class="panjang">Address : <input type="text"></div></td> 
             </tr>
             <tr>
            	<td>Phone No : <input type="text"></td>
             	<td>Department : <input type="text"></td> 
                <td>Position / Title : <input type="text"></td> 
             </tr>
             
             <tr>
            	<td>Length of Employment : <input type="text"></td>
             	<td>Salary : <input type="text"></td> 
                <td>Supervisor's Name : <input type="text"></td> 
             </tr>
              <tr>
            	<td colspan="3"><i>If Self-employed please fill the following</i></td>
            </tr>
             <tr>
            	<td>Business Name : <input type="text"></td>
             	<td>Type of Business : <input type="text"></td> 
                <td>Years in Business : <input type="text"></td> 
             </tr>
             <tr>
            	<td colspan="2"><div class="panjang">Address : <input type="text"></div></td>
             	<td>Phone No : <input type="text"></td>               
             </tr>
              <tr>
            	 <td>Length of Stay in Current Location : <input type="text"></td> 
                 <td>LandLord : <input type="text"></td> 
                 <td>Phone No : <input type="text"></td>               
             </tr>
             </table>
             <table width="100%">
			<div class="judul_dalam">OTHER CONTACT INFORMATION</div>               	         
         	
              <tr>
            	 <td width="33%"><div class="nofloat">Name : <input type="text"></div></td> 
                 <td width="33%"><div class="nofloat">Relation : <input type="text"></div></td> 
                 <td width="34%"><div class="nofloat">Phone No : <input type="text"></div></td>               
             </tr>
              <tr>
            	 <td><div class="nofloat">Name : <input type="text"></div></td> 
                 <td><div class="nofloat">Relation : <input type="text"></div></td> 
                 <td><div class="nofloat">Phone No : <input type="text"></div></td>               
             </tr>
              <tr>
            	 <td><div class="nofloat">Name : <input type="text"></div></td> 
                 <td><div class="nofloat">Relation : <input type="text"></div></td> 
                 <td><div class="nofloat">Phone No : <input type="text"></div></td>               
             </tr>
            
             </table>
             
             <table>
             <tr>
             	<td><p><font size="-2">The undersigned Applicant hereby offers to rent/lease real property described as PROPERTY NAME
It is understood that this Application is not a Rental Agreement/Lease and that Applicant has no rights to said property until a written or oral Rental Agreement/Lease is duly executed after the
approval of this Application. Applicant is aware of and agrees to all the covenants and conditions in the proposed Rental Agreement/Lease and agrees to timely execute said Rental Agreement/Lease
after notification of the acceptance of this Application and Offer. Time is of the essence.
A credit check fee of $ 30.00 (per person) to process this Application is required. Money will be given by Applicant to the owner/manager when this Application is turned in for
processing.
Applicant represents all information on this Application to be true and accurate and understands that owner/manager will rely upon said information when accepting this Application whether an
independent investigation has been performed or not. Applicant hereby authorizes owner/manager and his/her/its employees and agents to verify said information and make independent
investigations in person, by mail, phone, fax, or otherwise, to determine Applicant's rental, credit, financial and character standing. Applicant hereby releases owner/manager, his/her/its employees
and agents, Vantage Asset Management, Ltd., its employees and agents and any and all other firms or persons investigating or supplying information, from any liability whatsoever concerning the
release and/or use of said information and further, will hold them all harmless from any suit or reprisal whatsoever. All holders, public and private, of any such information are hereby authorized to
release, without limitation, any and all such information they have concerning Applicant and in so doing, will be acting on Applicant's behalf at Applicant's request and will be held blameless and
without any liability whatsoever. A copy or other reproduction of this Authorization shall be as effective as the original.
NOTICE: The rental for which you are applying may be reported to and monitored by various Consumer Credit Reporting Agencies. Your failure to satisfactorily perform your rental obligations
may result in a derogatory entry in your rental and/or credit consumer file and could hamper your ability to obtain housing and/or credit in the future. In addition, owner/manager may report any and
all information to other property owners/managers, credit grantors and/or public agencies</font></p></td>             
             </tr>
           </table>
           <br />
           <br />
           
          <div class="judul_dalam">APPLICATION CHECKLIST</div>          
*** All resident managers must verify the following items prior to calling in the office for all credit
checks.
			<table border="1px"   style=" border:thin ; border-width:medium; border-spacing:0px;"  width="90%">
            <tr>
            	<td width="50%">&nbsp;                </td>
                <td width="25%"><div class="judul_tabel"> Manager</div></td>
                <td width="25%"> <div class="judul_tabel">Supervisor</div></td>
            </tr>
             <tr>
            	<td>Application filled out completely</td>
                <td align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select> 
                </td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
            <tr>
            	<td>Copies of picture I/D for all adult members</td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
             <tr>
            	<td>Copies of Social Security cards for all adult members</td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
            <tr>
            	<td>Current rent receipt</td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
            <tr>
            	<td>Current utility statements (gas, electric or phone)</td>
                <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
            <tr>
            	<td>Current income verified</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
             <tr>
            	<td>Current bank verified (if needed)</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
            <tr>
            	<td>Landlord references verified (5 years)</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
            <tr>
            	<td>Employment verified</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
                 <td  align="center"><select>
                  <option value="Approve">Approve</option>
                  <option value="Denied">Denied</option>                
                </select</td>
            </tr>
           
            </table>
          
            * Income Requirements: (e.g. $800 rent x 3 = $2400.00 (Applicant should earn at least $2400 to
qualify)
            </div><!---formulir end---->
            
             <div class="judul_dalam"><hr>LEASE TERMS</div></div> 
             <div class="terms">
            <table width="100%">
            <tr>
            	<td colspan="2"><div class="panjang2">Name on lease  : <input type="text"></div></td>     
                
            </tr>
            <tr>
             <td colspan="2"><div class="panjang2"><input type="text"></td>
            </tr>
            <tr>
            	<td width="30%">Lease term : <input type="text"></td>
                <td width="30%">Startind date : <input type="text"></td>
            </tr>
            <tr>
            	<td>Monthly rent : <input type="text"></td>
                <td>Security deposit : <input type="text"></td>
            </tr>
              <tr>
            	<td>Increase rate : <input type="text"></td>
                <td>Renew option : <input type="text"></td>
            </tr>
              <tr>
            	<td>Free rent : <input type="text"></td>
                <td>Utilities : <input type="text"></td>
            </tr>
            <tr>
            	<td>Addition fee : <input type="text"></td>
                
            </tr>
             <tr>
            	<td colspan="2"><div class="panjang2">Aditional info  : <input type="text"></div></td>
                
            </tr>
            <tr>
            	<td colspan="2"><div class="panjang2"><input type="text"></div></td>
                
            </tr>
            <tr>
            	<td colspan="2"><div class="panjang2"><input type="text"></div></td>
                
            </tr>
            </table>
            </div>
          
          </div><!---content end---->
</div><!---maincontent_info end---->
</body>
</html>