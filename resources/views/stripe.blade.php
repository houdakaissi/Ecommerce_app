 @if(  Cart::getSubtotal() > 0)
<!DOCTYPE html>
<html>
 
<head>
<title>DÉTAIL DE PAIEMENT</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style type="text/css">
.panel-title {
display: inline;
font-weight: bold;
}
.display-table {
display: table;
}
.display-tr {
display: table-row;
}
.display-td {
display: table-cell;
vertical-align: middle;
width: 61%;
}
</style>
</head>
@include('layouts.sm')
<body  style= "background-color: #f2f2f2 ;">
 
 
<header> 
<h4 style="margin-top:40px;margin-left:200px;color:#21B6A8;">DEMANDE DE PAIEMENT</h4>
<hr style="color:#21B6A8;">
</header>
 
<div style="  border-radius:10px;display: flex;
   justify-content: center;
  align-items: center;width:400px;height:500px;left:150px;top:7px;"class="card">
  <div style="margin-right:60px; ">
 <strong><span style="margin-right:10px;" >Détails de paiement</span></strong>
 <img style="width:38px;height:30px;margin-left:20px;" src="https://www.cmi.co.ma/sites/default/files/logo-cmi-open.png">
 <img style="width:38px;height:30px;"src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/2560px-Mastercard-logo.svg.png">
    <img style="width:38px;height:30px; " src="https://logos-marques.com/wp-content/uploads/2021/07/Visa-Logo-2005.jpg">
</div>
<hr>
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default credit-card-box">
 
<div class="panel-body">
@if (Session::has('success'))
<div class="alert alert-success text-center">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
<p>{{ Session::get('success') }}</p>
</div>
@endif
<form
role="form"
action=" "
method="post"
class="require-validation"
data-cc-on-file="false"
data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
id="payment-form">
@csrf
<div class='form-row row'>
<div  class='col-xs-12 form-group required'>
<strong><label style="margin-left:20px;" class='control-label'>Nom</label></strong> <input
class='form-control' style="margin-left:20px;width:350px;"size='4' type='text'>
</div>
</div>
<div class='form-row row'>
<div class='col-xs-12 form-group card required'>
<strong><label style="margin-left:20px;"class='control-label'>Numéro du carte</label> </strong><input
autocomplete='off'style="margin-left:20px;width:350px;" class='form-control card-number'  size='20'
type='text'>
</div>
</div>
<div  class='form-row row'>
<div class='col-xs-12 col-md-4 form-group cvc required'>
<strong><label style="margin-left:37px;"class='control-label'>CVC</label></strong> <input style="width:80px;margin-left:20px;margin-top:24px;"autocomplete='off'
class='form-control card-cvc' placeholder='ex. 311' size='4'
type='text'>
</div>
<div style=" "class='col-xs-12 col-md-4 form-group expiration required'>
<strong><label style="margin-left:50px;"class='control-label'>Expiration Month</label></strong> <input style="width:70px;margin-left:60px;"
class='form-control card-expiry-month' placeholder='MM' size='2'
type='text'>
</div>
<div class='col-xs-12 col-md-4 form-group expiration required'>
<strong><label style="margin-left:90px;"class='control-label'>Expiration Year</label></strong> <input style="width:70px;margin-left:85px;"
class='form-control card-expiry-year' placeholder='YYYY' size='4'
type='text'>
</div>
</div>

<div class="row">
<div class="col-xs-12">
<button style="background-color: #21B6A8;width:350px;margin-left:40px;margin-top:10px;"class="btn btn-primary btn-lg btn-block" type="submit">Payer {{ Cart::getSubtotal() }}$ </button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<form style=" position:relative; left:700px;bottom:600px; ">   
       
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
                                            <b>Nom</b>
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
                                        {{auth()->user()->addres}}
                                         
                                        
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
<hr>
<footer style="">
    <img style="width:40px;height:30px;margin-left:300px;"src="https://www.cmi.co.ma/sites/default/files/logo-cmi-open.png">
<a href="https://www.cmi.co.ma/">Centre Monétique interbancaire</a>
<img style="position:relative;bottom:30px; width:40px;height:30px;margin-left:800px; " src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Old_Visa_Logo.svg/2560px-Old_Visa_Logo.svg.png">
<img style="position:relative;bottom:60px;width:40px;height:30px;margin-left:900px;" src="data:image/png;base64,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">
</footer>
</body>
<script type="text/javascript"  src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    
$(function() {
var $form = $(".require-validation");
$('form.require-validation').bind('submit', function(e) {
var $form = $(".require-validation"),
inputSelector = ['input[type=email]', 'input[type=password]',
'input[type=text]', 'input[type=file]',
'textarea'
].join(', '),
$inputs = $form.find('.required').find(inputSelector),
$errorMessage = $form.find('div.error'),
valid = true;
$errorMessage.addClass('hide');
$('.has-error').removeClass('has-error');
$inputs.each(function(i, el) {
var $input = $(el);
if ($input.val() === '') {
$input.parent().addClass('has-error');
$errorMessage.removeClass('hide');
e.preventDefault();
}
});
if (!$form.data('cc-on-file')) {
e.preventDefault();
Stripe.setPublishableKey($form.data('stripe-publishable-key'));
Stripe.createToken({
number: $('.card-number').val(),
cvc: $('.card-cvc').val(),
exp_month: $('.card-expiry-month').val(),
exp_year: $('.card-expiry-year').val()
}, stripeResponseHandler);
}
});
function stripeResponseHandler(status, response) {
if (response.error) {
$('.error')
.removeClass('hide')
.find('.alert')
.text(response.error.message);
} else {
/* token contains id, last4, and card type */
var token = response['id'];
$form.find('input[type=text]').empty();
$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
$form.get(0).submit();
}
}
});
</script>
</html>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
var $form = $(".require-validation");
$('form.require-validation').bind('submit', function(e) {
var $form = $(".require-validation"),
inputSelector = ['input[type=email]', 'input[type=password]',
'input[type=text]', 'input[type=file]',
'textarea'
].join(', '),
$inputs = $form.find('.required').find(inputSelector),
$errorMessage = $form.find('div.error'),
valid = true;
$errorMessage.addClass('hide');
$('.has-error').removeClass('has-error');
$inputs.each(function(i, el) {
var $input = $(el);
if ($input.val() === '') {
$input.parent().addClass('has-error');
$errorMessage.removeClass('hide');
e.preventDefault();
}
});
if (!$form.data('cc-on-file')) {
e.preventDefault();
Stripe.setPublishableKey($form.data('stripe-publishable-key'));
Stripe.createToken({
number: $('.card-number').val(),
cvc: $('.card-cvc').val(),
exp_month: $('.card-expiry-month').val(),
exp_year: $('.card-expiry-year').val()
}, stripeResponseHandler);
}
});
function stripeResponseHandler(status, response) {
if (response.error) {
$('.error')
.removeClass('hide')
.find('.alert')
.text(response.error.message);
} else {
/* token contains id, last4, and card type */
var token = response['id'];
$form.find('input[type=text]').empty();
$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
$form.get(0).submit();
}
}
});
</script>
</html>
<style>
table  {
  border:  0.25px  solid;
  border-collapse: collapse;
  height: 6%;
  border-color:gray;
}
</style>
 
     @endif