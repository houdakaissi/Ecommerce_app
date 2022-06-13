 
 @include('layouts.sm')
<style>
table  {
  border:  0.25px  solid;
  border-collapse: collapse;
  height: 6%;
  border-color:gray;
}
</style>
 
       <form style="position:relative;left:50%;top:10%;">   
       
      <h3 style="position:relative;left:90px;color:gray;"> FACTURE DE PAIEMENT</h3>
   
  <h4 style="color:#FF1493;">DETAIL DE COMMANDE</h4>
 
                            <div class="panel-body">
                                <table style="width: 39%;height:60px;">
                                    
                                    <tr style="vertical-align: top;">
                                    <td style="width: 20%">
                                            <b>Identifiant</b>
</td>
                                        <td style="width: 5%">
                                            :
                                        </td>
                                        <td style="width: 75%"> 
                                        {{Auth()->user()->id}}
                                         
                                        
                                        </td>

                                    </tr>
                                    
                                    
                                     
                                
                       
                                    
                                 
                            </div>
                             
                            <div class="panel-body">
                                
                                    
                                    <tr style="vertical-align: top;">
                                        <td style="width: 20%">
                                            <b>Total</b>
                                        </td>
                                        <td style="width: 5%">
                                            :
                                        </td>
                                        <td style="width: 75%"> 
                                        {{  Cart::getSubtotal()}} $
                                         
                                        
                                        </td>

                                    </tr>
                                    
                                    
                                     
                                
                       
                                    
                                </table>
                            </div>
                            <h4 style="color:#FF1493;">DETAIL MARCHAND</h4>
<div class="panel-body">
                                <table style="width: 39%;height:50px;">
                                    
                                    <tr style="vertical-align: top;">
                                        <td style="width: 20%">
                                            <b>Nom du marchand</b>
                                        </td>
                                        <td style="width: 5%">
                                            :
                                        </td>
                                        <td style="width: 75%"> 
                                       Planet computer SARL
                                         
                                        
                                        </td>

                                    </tr>
                                    
                                    
                                     
                                
                       
                                    
                                </table>
                            </div>
                            <h4 style="color:#FF1493;">  INFORMATIONS DU CLIENT</h4>
                            <div class="panel-body">
                                <table style="width: 39%;height:100px;">
                                    
                                    <tr style="vertical-align: top;">
                                        <td style="width: 20%">
                                            <b>Nomn</b>
                                        </td>
                                        <td style="width: 5%">
                                            :
                                        </td>
                                        <td style="width: 75%"> 
                                        {{auth()->user()->name}}
                                         
                                        
                                        </td>

                                    </tr>
                                    
                                    
                                     
                                
                       
                                    
                             
                            </div>
                            <div class="panel-body">
                               
                                    
                                    <tr style="vertical-align: top;">
                                        <td style="width: 20%">
                                            <b>Adresse</b>
                                        </td>
                                        <td style="width: 5%">
                                            :
                                        </td>
                                        <td style="width: 75%"> 
                                        {{auth()->user()->address}}
                                         
                                        
                                        </td>

                                    </tr>
                                    
                                    
                                     
                                
                       
                                    
                              
                            </div>
                            <div class="panel-body">
                                
                                    
                                    <tr style="vertical-align: top;">
                                        <td style="width: 20%">
                                            <b>E-email</b>
                                        </td>
                                        <td style="width: 5%">
                                            :
                                        </td>
                                        <td style="width: 75%"> 
                                        {{auth()->user()->email}}
                                         
                                        
                                        </td>

                                    </tr>
                                    
                                    
                                     
                                
                       
                                    
                               
                            </div>
                            <div class="panel-body">
                                
                                    
                                    <tr style="vertical-align: top;">
                                        <td style="width: 20%">
                                            <b>Ville</b>
                                        </td>
                                        <td style="width: 5%">
                                            :
                                        </td>
                                        <td style="width: 75%"> 
                                        {{auth()->user()->city}}
                                         
                                        
                                        </td>

                                    </tr>
                                    
                                    
                                     
                                
                       
                                    
                                </table>
                            </div>
                             
</form>
<a href="http://127.0.0.1:8000/" style="color:gray;position:relative;left:650px;top:100px;"class="continue-shopping link-colored d-inline-block font-weight-bold my-3"> <span style='font-size:25px;'>&#8598;</span> retourner à la page principale</a>