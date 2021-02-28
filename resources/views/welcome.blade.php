<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .blu {
        background-color: blue;
        color: white;
        margin-bottom: 40px;
        }

            .composant{
            color: #1E88E5;
        }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
           

           <div class="row" style="margin-left: 130px;"  >
           
                   <div class="col-lg-1 blu">Project Name</div>
                   <div class="col-sm-1 whi"></div>
                   <div class="col-sm-1 blu">SAP Number</div>
                   <div class="col-sm-1 whi"></div>
                   <div class="col-sm-2 blu">Date Of Approval</div>
                   <div class="col-sm-1 whi"></div>
                   <div class="col-sm-2 blu">Other Informations</div>
                   <div class="col-sm-1 whi"></div>
                 
           </div>
           <div class="row" >
               <table id="dytable" class="table display"  style="margin: auto; border:1px solid;text-align:center">
                   <thead>
                       <tr>
                           <th>Component</th>
                           <th>Description</th>
                           <th>Sub Component</th>
                           <th >Amount</th>
                           <th>High Five</th>
                           <th>Sub Theme</th>
                           <!--<th>% Sub  high Five</th>-->
                           <th>Source  of Financing</th>
                           <th>SDG</th>
                           <!--<th>%SDG</th>-->
                           <th></th>
                           <th></th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>
                               <button class="addComp">Add</button>
                           </td>
                           <td>
                             
                           </td>
                           <td>
                               <button class="addSubComp">Add</button>
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                           <td>
                               
                           </td>
                           <!--<td></td>-->
                           <td></td>
                           <td></td>
                           <!--<td></td>-->
                           <td></td>
                           <td></td>
                       </tr>
                   </tbody>
                   <tfoot>
                       <tr class="">
                           <th>
                               Total
                           </th>
                           <th>
                           
                           </th>
                           <th>
                          
                           </th>
                           <th>
                               <input class="total" style="font-size: 13px;font-family: Georgia;" type="text">
                           </th>
                           <th>
                               
                           </th>
                           <th>
                               
                           </th>
                           <!--<td></td>-->
                           <th>
                               
                           </th>
                           <th></th>
                           <!--<td></td>-->
                           <th></th>
                           <th></th>
                       </tr>
                   </tfoot>
               </table>
           </div>
        </div>
         <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title left">Add Source of Finance</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        
        <form class="" id="addSF">
            <div class="form-group form-inline">
                <label class="col-5"  for="sof">
                Source of Finance
                </label>
                <select class="form-control col-5" name="sof" id="sof">
                        <option value="ADF">ADF</option>
                        <option value="ADB">ADB</option>
                        <option value="NTF">NTF</option>
                        <option value="PSF">PSF</option>
                        <option value="TSF">TSF</option>
                        <option value="SF">SF</option>
                </select>
            </div>
            <div class="form-group form-inline">
                <label class="col-5"  for="mount">
                Amount 
                </label>
                <input type="text" class="form-control col-5" name="mount" id="mount">
                        
            </div>
            <div class="form-group form-inline">
                <label class="col-5"  for="mount">
                Financing Instrument  
                </label>
                <select class="form-control col-5" name="sof" id="sof">
                        <option value="Loan">Loan</option>
                        <option value="Grant">Grant</option>
                        <option value="Other">Other</option>
                </select>  
            </div>
            <div class="form-group form-inline">
            <label class="col-7"  for="mount">
                  
                </label>
                <input type="submit" class="btn btn-success  form-control  col-3" value="Submit"> 
            </div>     
        </form>
        <table class="table softab">
            <thead>
                <tr>
                <th scope="col">Source of Finance</th>
                <th scope="col">Amount</th>
                <th scope="col">Financing Instrument</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        
            
        
            <div class="modal-footer">
            
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
    </div>
    
    </body>
    <script  src="js/jquery-3.5.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('table').find('.addSubComp').attr("disabled", true);
    var amountSource = {};
    var lastCompId;
    var lastHighId;
    var totalTab=0;
    var sommemontant = 0;
        $('.addComp').on('click',function(){
                $('table').find('.addSubComp').attr("disabled", false);
                var nbRow = parseInt($('table').find('tr').length-2);
                var [idComp, idDesc, idHigh, idSub, idSdg, idAmount, idSdf]= ["Comp-"+nbRow, "Desc-"+nbRow, "High-"+nbRow, "Sub-"+nbRow, "Sdg-"+nbRow, "Amount-"+nbRow, "Sdf-"+nbRow];
                lastHighId=idHigh;
                lastCompId=idComp;
                var newRow = $('<tr class="compo"><td style="width: 40px;"  ><input class="composant" style="width: 50px; margin-top:18px; font-size: 13px; font-family: Georgia; " size="1" type="text" id="'+idComp+'" ></td><td style="width: 180px;"><textarea style="font-size: 13px; margin-top:18px; margin-top:18px;color: #1F4E78; font-family: Georgia; background-color: #DDEBF7;" size="12" id='+idDesc+' type="text"></textarea></td><td ><input class="composant" style="width: 150px; margin-top:18px; font-size: 13px; font-family: Georgia; " size="5" type="text" id="'+idComp+'" value="N/A" ></td><td><input style="width: 160px; margin-top:18px; font-size: 13px; color: #1F4E78; font-family: Georgia; background-color: #DDEBF7;" " id='+idAmount+' class="amountC" type="text"  value=""></td><td><div class="row"><select style=" width: 15px;font-size: 13px; font-family: Georgia;"  id='+idHigh+' class="thever"><option value="">Choose </option><option value="N/A"><label>N/A<label/><option value="1">1: Feed Africa</option><option value="2">2 :Light Up and Power Africa</option><option value="3">3: Industrialize Africa </option><option value="4">4 : Regional integration</option><option value="5">5 : Improve the quality of Life for the People of Africa</option></select><textarea style="width: 150px; margin-right:20px;font-size: 13px; font-family: Georgia;"  type="text"></textarea></div></td><td><div class="row"><select style=" width: 15px;font-size: 13px; font-family: Georgia;"  id="'+idSub+'" class="thevermin '+idHigh+'"></select><textarea style="width: 150px;font-size: 13px; font-family: Georgia;"  type="text"></textarea></div></td> <td><div class="row"><button type="button" class="btn-success btn addFinSrc" data-toggle="modal" data-target="#myModal">Add</button><textarea style="width: 150px; margin-right:20px;font-size: 13px; font-family: Georgia;"  type="text"></textarea></div></td><td><textarea style="width: 150px;margin-top:18px;font-size: 13px; font-family: Georgia;"   class= '+idSdg+' type="text"></textarea></td><td><input type="button" style="margin-top:18px;" class= "rm-rf" value="-" /></td><td><input style="margin-top:18px;" type="button" class= "dd" value="+" /></td></tr>');
       

                $('table').find('tr:eq(-2)').before(newRow);
                
            
        });

        $('table').on('click', '.dd', function(event){
                var nbRow = $('table').find('tr').length-2;
                var theCompId = $(this).closest('tr').find('.composant').attr('id');
                var [idComp, idDesc, idHigh, idSub, idSdg, idAmount, idSdf, idSubCom ]= ["Comp-"+nbRow, "Desc-"+nbRow, "High-"+nbRow, "Sub-"+nbRow, "Sdg-"+nbRow, theCompId+"_"+nbRow, "Sdf-"+nbRow, "SubCom-"+nbRow];
                lastHighId=idHigh;
                var newRow = $('<tr class="'+theCompId+'" ><td  style="width: 80px;"></td><td></td><td  ><textarea class="subcomposant" style="font-size: 13px;margin-top:18px;color: #375623; font-family: Georgia; background-color: #E2EFDA;" size="12" type="text"  ></textarea></td><td><input   style="width: 160px;margin-top:18px; color: #375623; font-family: Georgia; background-color: #E2EFDA;font-size: 13px;" id='+idAmount+' class="amount" type="text"  value=""></td><td><div class="row"><select style=" width: 15px; font-size: 13px; font-family: Georgia;"  id='+idHigh+' class="thever"><option value="">Choose </option><option value="N/A"><label>N/A<label/><option value="1"><label>1: Feed Africa<label/></option><option value="2">2 :Light Up and Power Africa</option><option value="3"> 3: Industrialize Africa </option><option value="4">4 : Regional integration</option><option value="5"><label>5 : Improve the quality of Life for the People of Africa<label/></option></select><textarea style="width: 150px; margin-right:25px;font-size: 13px; font-family: Georgia;"  type="text"></textarea></div></td><td><div class="row"><select style=" width: 15px; font-size: 13px; font-family: Georgia;"  id="'+idSub+'" class="thevermin '+idHigh+'"></select><textarea style="width: 150px;font-size: 13px; font-family: Georgia; "  type="text">N/A</textarea></div></td><td><input style="width: 120px;margin-top:18px;font-size: 13px; font-family: Georgia; " class="percent"  type="" max=100  value=""></td><td><div class="row"><button type="button" class="btn btn-success addFinSrc" data-toggle="modal" data-target="#myModal">Add</button><textarea style="width: 150px; margin-right:20px;font-size: 13px; font-family: Georgia;"  type="text"></textarea></td><td><textarea style="width: 150px;margin-top:18px;font-size: 13px; font-family: Georgia;"   class= '+idSdg+' type="text"></textarea></td><td><input style="width: 120px;margin-top:18px; font-size: 13px; font-family: Georgia;" type="text" id="" name="" value=""></td><td><input type="button" style="margin-top:18px;" class= "rm-rf" value="-" /></td><td><input type="button" style="margin-top:18px;" class= "dd" value="+" /></td></tr>');
                $(this).closest('tr').after(newRow);            
        });

            $('table').on('change', '.thever', function(event) {
                var addSubBtn = $('#addSub');
                var myId= $(this).attr('id');
                if(!$(this).val()){
                  
                    addSubBtn.attr("disabled", true);
                }
                else{
                    addSubBtn.attr("disabled", false);
                    var idata = $(this).val();
                    var sub = "";
                    var data = "";
                   
                    if(idata==1 )
                    {
                        data="1: Feed Africa"
                        sub = "N/A||1:Agricultural Productivity||2:Value addition||3:Investment in infrastructure (hard and soft)||4:Agriculture finance||5:Agribusiness environment||6:Inclusivity and sustainable development (Gender/Jobs/climate)||7:Multi-sector operations (BS)||8:Regional operations in production, value addition and marketing";
                        
                    }
                    else if(idata == 2 )
                    {
                        data="2 :Light Up and Power Africa"
                        sub = "N/A||1:Power generation - Conventional||2:Power generation – Renewable||3:Power transmission||4:Power distribution||5:Off-grid solutions||6:Energy Efficiency||7:Clean Cooking||8:Oil and Gas||9:Utility transformation services||10:Energy sector strengthening and reform||11:Infrastructure for energy sector development||12:Multi-sector operations (BS)||13:Energy financing";
                       
                    }
                    else if(idata == 3 )
                    {
                        data="3: Industrialize Africa"
                        sub = "N/A||1:Industrial business environment||2:Financial sector development||3:Capital markets development||4:Enterprises development||5:Micro, Small and Medium Enterprise support||6:Infrastructure for industry||7:Industry and manufacturing||8:Multi-sector operation (BS)||9:Regional environment improvement";
                        
                        
                    }
                    else if(idata == 4 )
                    {
                        data="4 : Regional integration"
                        sub = "N/A||1:Regional Infrastructure Connectivity (‘Hard’)||2:Regional Infrastructure Connectivity ( ‘Soft”)||3:Trade facilitation and investment||4:Trade finance";
                       
                    }
                    else if(idata == 5 )
                    {
                        data="5 : Improve the quality of Life for the People of Africa"
                        sub = "N/A||1:Access to clean water||2:Sanitation and sewerage||3:Water resources management||4:Water sector strengthening and reform||5:Education sector strengthening and reform||6:Investments for job  creation||7:Innovation programs to scale promising solutions for employment and nutrition||8:Social development, gender and inclusion||9:Other social development||10:National Infrastructure||11:Urban Development||12:Natural disaster management||13:Multisector operations (budget support)||14:Environment and natural resources management||15:Transboundary water resources management||16:Regional education and health initiatives";
                        
                    }
                    var lui = $(this);
                   
                    lui.closest('tr').find('td:eq(4)').find('textarea').val(data);


                    
                    sub = sub.split('||');
                    var subElmts = $('table').find('.'+myId);
                    if(subElmts.length==0){
                        var therow = $(this).closest('tr');
                        var nbRow = myId.split('-')[1];
                        var select = $('<select></select>');;
                        var option = $('<option></option>');
                        option.attr('value', "");
                        option.text("Choose");
                        select.append(option);
                        $.each(sub, function(index, value) {
                            var option = $('<option></option>');
                            option.attr('value', idata+"."+value);
                            option.text(idata+"."+value);
                            select.append(option);
                        });
                        var [idComp3, idDesc3, idHigh3, idSub3, idSdg3, idAmount3, idSdf3]= ["Comp3-"+nbRow, "Desc3-"+nbRow, "High3-"+nbRow, "Sub3-"+nbRow, "Sdg3-"+nbRow, "Amount3-"+nbRow, "Sdf3-"+nbRow];
                        var nbRow3 = $('<tr><td ></td><td ></td><td ></td><td></td><td><select style=" width: 120px;font-size: 13px; font-family: Georgia;"  id="'+idSub3+'" class="thevermin '+myId+'">'+select.html()+'</select></td><td><td><input style="width: 120px; " class="percent"  type="" max=100  value=""></td><td><input style="width: 120px; " class="amount" id='+idAmount3+' type="text"  value=""></td><td></td><td></td><td></td></tr>');
                        therow.after(nbRow3);                        

                    }
                    $.each(subElmts, function(i, select){
                        select = $(this);
                        select.find('option')
                        .remove();
                       var option = $('<option></option>');
                        option.attr('value', "");
                        option.text("Choose");
                        select.append(option);
                        $.each(sub, function(index, value) {
                            var option = $('<option></option>');
                            option.attr('value', idata+"."+value);
                            option.text(idata+"."+value);
                            select.append(option);
                    });                  
                    }); 
                    if(idata=="N/A" )
                    {
                        lui.closest('tr').find('td:eq(4)').find('textarea').val("N/A");
                        lui.closest('tr').find('td:eq(5)').find('textarea').val("N/A");
                        lui.closest('tr').find('td:eq(6)').find('input').css('display', 'none');
                        lui.closest('tr').find('td:eq(8)').find('textarea').css('display', 'none');
                        lui.closest('tr').find('td:eq(9)').find('input').css('display', 'none');
                        lui.closest('tr').addClass('pmp');
                        updateAll();
                       
                    }
                    else{
                        lui.closest('tr').removeClass('pmp');
                    }
                      
                }
            });

            $('table').on('change', '.thevermin', function(event) {
              var lui = $(this);
              var sub = lui.val();
              console.log(sub);
              console.log(sub);
              lui.closest('tr').find('td:eq(5)').find('textarea').val(sub);
              var luiId = $(this).attr('id');
              $('table').find('.'+luiId).remove();
              var nb = luiId.split('-')[1];
              var sdgid= "Sdg-"+nb;
              var amountId = "Amount-"+nb;
              var amount = nb;
              var subDict = {  
                "1.1:Agricultural Productivity":    "2:Zero hunger",
                "1.2:Value addition":   "2:Zero hunger",
                "1.3:Investment in infrastructure (hard and soft)": "2:Zero hunger",
                "1.4:Agriculture finance":  "2:Zero hunger",
                "1.5:Agribusiness environment": "2:Zero hunger",
                "1.6:Inclusivity and sustainable development (Gender/Jobs/climate)":    "5:Gender equality, 13:Climate action",
                "1.7:Multi-sector operations (BS)": "2:Zero hunger",
                "1.8:Regional operations in production, value addition and marketing":  "2:Zero hunger",
                "2.1:Power generation - Conventional":  "7:Affordable and clean energy",
                "2.2:Power generation – Renewable": "7:Affordable and clean energy, 13:Climate action",
                "2.3:Power transmission":   "7:Affordable and clean energy",
                "2.4:Power distribution":   "7:Affordable and clean energy, 4:Quality education, 5:Gender equality, 3:Good health and well-being, 9:Industry, innovation and infrastructure",
                "2.5:Off-grid solutions":   "7:Affordable and clean energy, 4:Quality education, 5:Gender equality, 3:Good health and well-being",
                "2.6:Energy Efficiency":    "7:Affordable and clean energy",
                "2.7:Clean Cooking":    "7:Affordable and clean energy, 5:Gender equality, 3:Good health and well-being",
                "2.8:Oil and Gas":  "7:Affordable and clean energy",
                "2.9:Utility transformation services":  "1:No poverty, 7:Affordable and clean energy",
                "2.10:Energy sector strengthening and reform":  "7:Affordable and clean energy",
                "2.11:Infrastructure for energy sector development":    "7:Affordable and clean energy",
                "2.12:Multi-sector operations (BS)":    "3:Good health and well-being",
                "2.13:Energy financing":    "7:Affordable and clean energy, 13:Climate action",
                "3.1:Industrial business environment":  "8:Decent work and economic growth",
                "3.2:Financial sector development": "8:Decent work and economic growth",
                "3.3:Capital markets development":  "9:Industry, innovation and infrastructure, 8:Decent work and economic growth",
                "3.4:Enterprises development":  "9:Industry, innovation and infrastructure, 12:Responsible consumption and production",
                "3.5:Micro, Small and Medium Enterprise support":   "8:Decent work and economic growth",
                "3.6:Infrastructure for industry":  "9:Industry, innovation and infrastructure",
                "3.7:Industry and manufacturing": "",   
                "3.8:Multi-sector operation (BS)":  "5:Gender equality, 9:Industry, innovation and infrastructure",
                "3.9:Regional environment improvement": "9:Industry, innovation and infrastructure",
                "4.1:Regional Infrastructure Connectivity (‘Hard’)":    "9:Industry, innovation and infrastructure",
                "4.2:Regional Infrastructure Connectivity ( ‘Soft”)":   "9:Industry, innovation and infrastructure, 10:Reduced inequalities, 13:Climate action",
                "4.3:Trade facilitation and investment ":   "9, 8:Decent work and economic growth",
                "4.4:Trade finance":    "9:Industry, innovation and infrastructure, 17:Partnerships for the goals",
                "5.1:Access to clean water":    "6:Clean water and sanitation, 3:Good health and well-being, 5:Gender equality",
                "5.2:Sanitation and sewerage":  "6:Clean water and sanitation, 3:Good health and well-being",
                "5.3:Water resources management":   "2:Zero hunger, 13:Climate action, 14:Life below water",
                "5.4:Water sector strengthening and reform":    "6:Clean water and sanitation",
                "5.5:Education sector strengthening and reform":    "4:Quality education, 5:Gender equality",
                "5.6:Investments for job  creation":    "5:Gender equality",
                "5.7:Innovation programs to scale promising solutions for employment and nutrition":"5:Gender equality",
                "5.8:Social development, gender and inclusion": "5:Gender equality",
                "5.9:Other social development": "3:Good health and well-being, 5:Gender equality",
                "5.10:National Infrastructure": "8:Decent work and economic growth",
                "5.11:Urban Development":   "11:Sustainable cities and communities",
                "5.12:Natural disaster management": "15:Life on land",
                "5.13:Multisector operations (budget support)": "",
                "5.14:Environment and natural resources management":    "15:Life on land",
                "5.15:Regional education and health initiatives":   "6:Clean water and sanitation",
                "5.16:Regional education and health initiatives":   "6:Clean water and sanitation",
              };
              var dar  = subDict[sub].split(',');
              var lengt = dar.length;
              var pivow = 'amount-'+i +'-'+luiId;
              var i = 0;
              
              var theRow =lui.closest('tr');
          
              dar.forEach(elemnt => {
                if(elemnt!=""){
                    i++;
                    if (i==1)
                    {
                        lui.closest('tr').find('td:eq(8)').find('textarea').val(elemnt);
                    }
                    else
                    {
                    var newRowe = $('<tr class="'+luiId+'"><td></td><td ></td><td></td><td></td><td></td><td></td><td></td><td></td><td><textarea  style="width: 150px;"   class='+sdgid+' type="text">'+elemnt+'</textarea></td> <td><input style="width: 120px;" class="percent" id="per-'+i +'-'+luiId+'" id="" type="" max=100  value=""> </td><td><input type="button" class= "rm-rf" value="-" /></td><td><input type="button" class= "dd" value="+" /></td></tr>');             
                    theRow.after(newRowe);
                    theRow=newRowe;
 
                    }
                    }
                
              });
            });

      $('.addSubComp').on('click',function(){
                var nbRow = $('table').find('tr').length-2;
                var [idComp, idDesc, idHigh, idSub, idSdg, idAmount, idSdf, idSubCom ]= ["Comp-"+nbRow, "Desc-"+nbRow, "High-"+nbRow, "Sub-"+nbRow, "Sdg-"+nbRow, "Amount-"+nbRow, "Sdf-"+nbRow, "SubCom-"+nbRow];
                lastHighId=idHigh;
                //$('#'+lastHighId)

                //console.log(lastHighId);
                var newRow = $('<tr class="'+lastCompId+'" ><td  style="width: 80px;"></td><td></td><td  ><textarea class="subcomposant" style="font-size: 13px;margin-top:18px;color: #375623; font-family: Georgia; background-color: #E2EFDA;" size="12" type="text"  ></textarea></td><td><input   style="width: 160px;margin-top:18px; color: #375623; font-family: Georgia; background-color: #E2EFDA;font-size: 13px;" id='+idAmount+' class="amountC" type="text"  value=""></td><td><div class="row"><select style=" width: 15px; font-size: 13px; font-family: Georgia;"  id='+idHigh+' class="thever"><option value="N/A" selected><label>N/A<label/><option value="1"><label>1: Feed Africa<label/></option><option value="2">2 :Light Up and Power Africa</option><option value="3"> 3: Industrialize Africa </option><option value="4">4 : Regional integration</option><option value="5"><label>5 : Improve the quality of Life for the People of Africa<label/></option></select><textarea style="width: 150px; margin-right:25px;font-size: 13px; font-family: Georgia;"  type="text">N/A</textarea></div></td><td><div class="row"><select style=" width: 15px; font-size: 13px; font-family: Georgia;"  id="'+idSub+'" class="thevermin '+idHigh+'"></select><textarea style="width: 150px;font-size: 13px; font-family: Georgia; "  type="text">N/A</textarea></div></td><td><div class="row"><button type="button" class="btn-success btn addFinSrc" data-toggle="modal" data-target="#myModal">Add</button><textarea style="width: 150px; margin-right:20px;font-size: 13px; font-family: Georgia;"  type="text"></textarea></div></td><td><textarea style="width: 150px;margin-top:18px;font-size: 13px; font-family: Georgia;"   class= '+idSdg+' type="text"></textarea></td><td><input type="button" style="margin-top:18px;" class= "rm-rf" value="-" /></td><td><input type="button" style="margin-top:18px;" class= "dd" value="+" /></td></tr>');
                  $('table').find('tr:eq(-2)').before(newRow);
            });

        
        
         
         $('#dytable').on('click', '.rm-rf', function(){
                var childrenClass = $(this).closest('tr').find('.composant').attr('id');
                //console.log(childrenClass);
                var children = $('table').find('.'+childrenClass);
                
                $('table').find('.'+childrenClass).remove();
                $(this).closest ('tr').remove();
                var nbRow = $('table').find('tr').length-3;
                //console.log($('table').find('tr'));
                if(!nbRow){
                    $('table').find('.addSubComp').attr("disabled", true);
                    
                }

            });

            $('#dytable').on('change', '.amount', function(){
                calcTotal();
                //update($(this));
                updateAll();

            });

            function update(ele){
               var amountX = parseInt(ele.val());
               var pmpr = $('table').find('.pmp').find('.amountC');
               var pmpVal = 0;
               var myPercent = 0 ;
               pmpr.each(function(i,v){
                    //console.log($(v).val());
                    if(!Number.isNaN(parseInt($(v).val())))
                    pmpVal += parseInt($(v).val());
                }); 
               // console.log([amountX, pmpVal, totalTab]);
                //alert(((amountX+0)/totalTab)*100);
               // console.log((((pmpVal*amountX/(totalTab-pmpVal))/totalTab)*100).toFixed(2));
               myPercent = parseFloat(((amountX)/totalTab)*100) + parseFloat(((pmpVal*amountX/(totalTab-pmpVal))/totalTab)*100);
               console.log(myPercent);
               ele.closest('tr').find('.percent').val(myPercent.toFixed(2));
               
            }

            function updateAll(){
               var compo = $('table').find('.amountC');
               compo.each(function(i,v){
                update($(v));
                });

                var compo = $('table').find('.amount');
                compo.each(function(i,v){
                update($(v));
                });

            }

            $('#dytable').on('change', '.amountC', function(){
                calcTotal();
                //update($(this));
                updateAll();
            
            });

            

            function calcTotal(){
                var target = $('.total');
                totalTab=0;
                var ac = $('.amountC');
                ac.each(function(i,v){
                    //console.log($(v).val());
                    if(!Number.isNaN(parseInt($(v).val())))
                    totalTab += parseInt($(v).val());
                });

                target.val(totalTab);
          }

          $( "form" ).submit(function( event ) {
            var data = $( this ).serializeArray();
            event.preventDefault();
            console.log(data);
            upTabF(data);
           
            });
            function upTabF(data) {
                var line = "<tr>";//</tr>";
                jQuery.each(data, function(i,v){
                    line = line +'<td >' + v.value +"</td>";
                });
                line = line + "</tr>"
                console.log(line);
                $('.softab').append(line);
            }

            $("#dytable").on('click','.addFinSrc', function (event) {
                $('.softab').find('td').remove();
                console.log($(this).closest('td').find('textarea').val("ASF"));
            });


});
        
</script>
</html>
