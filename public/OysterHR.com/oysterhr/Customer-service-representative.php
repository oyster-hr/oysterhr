<?php

$fname = '$_POST[q11_fullName[first]]';
$mname = '$_POST[q11_fullName[middle]]';
$lname = '$_POST[q11_fullName[last]]';


$fullname = $fname." ".$mname." ".$lname;


$addr1 = '$_POST[q16_currentAddress[addr_line1]]';
$addr2 = '$_POST[q16_currentAddress[addr_line2]]';
$city = '$_POST[q16_currentAddress[city]]';
$state = '$_POST[q16_currentAddress[state]]';
$postal = '$_POST[q16_currentAddress[postal]]';


$fulladdr = $addr1." ".$addr2." ".$city." ".$state." ".$postal;


$month = '$_POST[q18_birthDate[month]]';
$day = '$_POST[q18_birthDate[day]]';
$year = '$_POST[q18_birthDate[year]]';


$dob = $month." ".$day." ".$year;




$db = pg_connect("host=ec2-34-228-248-175.compute-1.amazonaws.com 
port=5432 dbname=d99ks42n3sk1hp user=hznzjpspwcrsct password=db0868e7afd1ede53ed2e8205029380050026a303644bd387740fbbd442eebba");


if ($_SERVER["REQUEST_METHOD"]=="POST"){
$query = "INSERT INTO jotform (fullname,fulladdr,dob,emailaddress,phonenumber,positionapplied,fullorpart,socialsecurity,coverletter,howyouheard,timecol,ip,identity1,identity2,linkedin) VALUES ($fullname,$fulladdr,$dob,'$_POST[emailaddress]','$_POST[phonenumber]','$_POST[positionapplied]','$_POST[fullorpart]','$_POST[socialsecurity]','$_POST[coverletter]','$_POST[howyouheard]',NOW(),'$_POST[ip]','$_POST[identity1]','$_POST[identity2]','$_POST[linkedin]')";

$result = pg_query($query);

header("Location:https://oysterrhr-093475921380.herokuapp.com/OysterHR.com/oysterhr/thankyou.html");
exit;
}
?>










<!DOCTYPE html><!-- Last Published: Mon Jun 26 2023 14:50:01 GMT+0000 (Coordinated Universal Time) --><html data-wf-domain="www.oysterhr.com" data-wf-page="63f509a3b45387ae7914ddf9" data-wf-site="5ffc74fef1579006dc588807">
  




<head><meta charset="utf-8"/><title>Careers at Oyster® | Mission-driven, Work From Anywhere Jobs</title><meta content="Change the world with us! We’re on a mission to make it easier than ever for growing companies to hire brilliant people—wherever they are in the world." name="description"/><meta content="Careers at Oyster® | Mission-driven, Work From Anywhere Jobs" property="og:title"/><meta content="Change the world with us! We’re on a mission to make it easier than ever for growing companies to hire brilliant people—wherever they are in the world." property="og:description"/><meta content="Careers at Oyster® | Mission-driven, Work From Anywhere Jobs" property="twitter:title"/><meta content="Change the world with us! We’re on a mission to make it easier than ever for growing companies to hire brilliant people—wherever they are in the world." property="twitter:description"/><meta property="og:type" content="website"/><meta content="summary_large_image" name="twitter:card"/><meta content="width=device-width, initial-scale=1" name="viewport"/><meta content="lSP15_w7YF7fw4DjrQfJhUKXbVaUY-JZA3qpZJnN1qQ" name="google-site-verification"/><link href="../assets-global.website-files.com/5ffc74fef1579006dc588807/css/oyster-1b8c58.c45e15b93.min.css" rel="stylesheet" type="text/css"/><link href="https://fonts.googleapis.com" rel="preconnect"/><link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/><script src="../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script><script src="../use.typekit.net/hyj8mow.js" type="text/javascript"></script><script type="text/javascript">try{Typekit.load();}catch(e){}</script><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script><link href="../assets-global.website-files.com/5ffc74fef1579006dc588807/64218c214836e43c41989648_Oyster_favicon_32x32.png" rel="shortcut icon" type="image/x-icon"/><link href="../assets-global.website-files.com/5ffc74fef1579006dc588807/64218c25e8b86a1146226a56_Oyster_favicon_256x256.png" rel="apple-touch-icon"/><link href="careers.html" rel="canonical"/><style>.anti-flicker-hide { opacity: 0 !important}</style><script type="text/javascript">(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;})(window,document.documentElement,'anti-flicker-hide','dataLayer',4000,{'OPT-KL7B7TK':true});</script><script async="" src="../www.googletagmanager.com/gtag/js%EF%B9%96id=UA-163932892-1.js"></script><script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-163932892-1', {'anonymize_ip': false, 'optimize_id': 'OPT-KL7B7TK'});</script><script async="" src="../www.googletagmanager.com/gtag/js%EF%B9%96id=G-9FRSWD0BX1.js"></script><script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('set', 'developer_id.dZGVlNj', true);gtag('config', 'G-9FRSWD0BX1', {'optimize_id': 'OPT-KL7B7TK'});</script><!--  Delay scripts with Google Tag Manager -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  /** init gtm after 3500 seconds - this could be adjusted */
  setTimeout(initGTM, 3500);
});
document.addEventListener('scroll', initGTMOnEvent);
document.addEventListener('mousemove', initGTMOnEvent);
document.addEventListener('touchstart', initGTMOnEvent);
function initGTMOnEvent(event) {
  initGTM();
  event.currentTarget.removeEventListener(event.type, initGTMOnEvent); // remove the event listener that got triggered
}
function initGTM() {
  if (window.gtmDidInit) {
    return false;
  }
  window.gtmDidInit = true; // flag to ensure script does not get added to DOM more than once.
  const script = document.createElement('script');
  script.type = 'text/javascript';
  script.async = true;
  // ensure PageViews is always tracked (on script load)
  script.onload = () => {
    dataLayer.push({ event: 'gtm.js', 'gtm.start': new Date().getTime(), 'gtm.uniqueEventId': 0 });
  };
  script.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-5BMJ5KS';
  document.head.appendChild(script);
}
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5BMJ5KS');</script>
<!-- End Google Tag Manager -->
<!-- Qualified -->
<script>
(function(w,q){w['QualifiedObject']=q;w[q]=w[q]||function(){
(w[q].q=w[q].q||[]).push(arguments)};})(window,'qualified')

</script>

<script async src="https://js.qualified.com/qualified.js?token=SdHXQ6g7jKn23UD7"></script>
<!-- End Qualified -->
















<link rel='dns-prefetch' href='../../../js.hs-scripts.com/index.html' />
<link rel='dns-prefetch' href='../../../www.google.com/index.html' />
<link rel='dns-prefetch' href='../../../api.fontshare.com/index.html' />



<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>










<link rel='stylesheet' id='parent-style-css'  href='../../wp-content/themes/papayamp/style271b.css?ver=5.9' type='text/css' media='all' />
<link rel='stylesheet' id='papaya_styles-css'  href='../../wp-content/themes/papaya/dist/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='dearpdf-style-css'  href='../../wp-content/plugins/dearpdf-lite/assets/css/dearpdf.min3438.css?ver=1.2.62' type='text/css' media='all' />
<link rel='stylesheet' id='tablepress-default-css'  href='../../wp-content/plugins/tablepress/css/default.mind50e.css?ver=1.14' type='text/css' media='all' />




<style id='tablepress-default-inline-css' type='text/css'>
.tablepress{box-shadow:0 0 17px 0 rgba(218,218,218,0.50);border-radius:2px}.tablepress td{padding:15px 25px}.tablepress th{padding:30px 12px}.tablepress th:not(:last-child),.tablepress td:not(:last-child){border-right:1px solid #EDEDED}.tablepress tfoot th,.tablepress thead th{background-color:#fff;text-align:center;vertical-align:bottom;font-size:14px;border-bottom:0}.tablepress tbody td{font-size:13px;color:#000;border-top:0}.tablepress tbody td:not(:first-child){text-align:center}.tablepress .odd td{background-color:#fff}.tablepress .even td{background-color:#F9F9F9}.table-benefits-papaya-model thead tr th:last-child,.table-benefits-papaya-model tbody tr td:last-child{position:relative;z-index:1}.table-benefits-papaya-model thead tr th:last-child::before,.table-benefits-papaya-model tbody tr td:last-child::before{content:'';position:absolute;z-index:0;top:0;left:0;width:.5px;height:100%;box-shadow:-2px 0 5px 0 rgba(0,0,0,0.18)}.table-benefits-papaya-model thead tr th:last-child::after,.table-benefits-papaya-model tbody tr td:last-child::after{content:'';position:absolute;z-index:0;top:0;right:0;width:.6px;height:100%;box-shadow:2px 0 5px 0 rgba(0,0,0,0.18)}
</style>


            
			  <script>
    
  </script>


<script data-cfasync="false"> var dearPdfLocation = "../../wp-content/plugins/dearpdf-lite/assets/index.html"; var dearpdfWPGlobal = {"maxTextureSize":""};</script><link rel="icon" href="../../wp-content/uploads/2019/09/cropped-Favicon-256x256-32x32.png" sizes="32x32" />
<link rel="icon" href="../../wp-content/uploads/2019/09/cropped-Favicon-256x256-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../../wp-content/uploads/2019/09/cropped-Favicon-256x256-180x180.png" />
<meta name="msapplication-TileImage" content="https://www.papayaglobal.com/wp-content/uploads/2019/09/cropped-Favicon-256x256-270x270.png" />
		<style type="text/css" id="wp-custom-css">
			.single-post figure{
	max-width:100%;
	margin-bottom:24px;
}

.single-abm figure{
	max-width:100%;
	margin-bottom:24px;
}

.single-post .wp-caption-text{
	color: rgba(14,17,84,.7);
}

.single-abm .wp-caption-text{
	color: rgba(14,17,84,.7);
}		</style>
		















<!-- Importing script for validation email domains -->
<!--<script id="std-import-blocked-domais" defer src="https://cdn.jsdelivr.net/gh/EricBrovko/oyster-cdn@main/res.js"></script> -->
<!-- Override styles for hubspot embedded forms   -->
<style>.onetrust-pc-dark-filter.ot-fade-in { 
    	background-color: transparent;
    pointer-events:none;
  	}
</style>
<style>.hs-error-msg {   
           color: red !important;
        }
     
      .hs-main-font-element { 
        color: red !important;
        }
     
      @media (max-width: 767px) {
        
       .hs-main-font-element { 
         font-size: 15px !important;
        }
        
         .hs-error-msg { 
         font-size: 15px !important;
           color: red !important;
        }
        
      .w-lightbox-view {
      width: auto !important;
     }
     }
     .w-lightbox-close {
     
    padding-top: 200px;
       }
</style>

<style>label {
  font-weight: 400;
     }
        .hbspt-form .hs-input {
            width: 100% !important;
        }
  
        .hbspt-form .hs-form fieldset {
            max-width: inherit !important;
        }
  
  		.hs-form-booleancheckbox {
          font-size: 1rem; 
          padding-top: 15px;
  		}
  
        .hbspt-form .hs-form-checkbox-display {
            display: flex !important;
            align-items: center !important;
        }

        .hbspt-form .hs-form-checkbox-display input {
            width: 20px !important;
            height: 20px !important;
            margin: 0 !important;
            margin-right: 10px !important;
            cursor: pointer;
        }

        .hbspt-form .hs-form-checkbox-display span {
            cursor: pointer;
        }
  
        .hbspt-form .hs-submit .actions input {
            cursor: pointer;
        }
        .hbspt-form .hs-form fieldset .input input[type="file"] {
            cursor: pointer;
        }
  
  	   .hbspt-form .hs-form-booleancheckbox-display {
    		display: flex !important;
    		align-items: center !important;
		}

		.hbspt-form .hs-form-booleancheckbox-display input[type="checkbox"] {
            width: 20px !important;
            height: 20px !important;
			margin: 0 !important;
            margin-right: 10px !important;
    		cursor: pointer;
		}

		.hbspt-form .hs-form-booleancheckbox-display span {
    	cursor: pointer;
		}
  
  .hs-richtext{margin-top:1.5rem !important;
  margin-bottom:1.5rem !important;
  }
</style>

<style>.hbspt-form input[name=email],
    .hbspt-form input[name=company], .hbspt-form input[name=phone] {
        width: 100% !important;
    }
  
    .hs-input {
    width: 100% !important;
  	}
  
    .hbspt-form .inputs-list {
        list-style: none;
        padding-left: 0;
    }

    .hs-form-booleancheckbox label {
        display: flex;
        align-items: center;
    }

    .hs-form-booleancheckbox label input {
        margin: 0;
        margin-right: 10px;
    }
  
   .grid-34 {
    height: auto!important;
    }
      
    .hbspt-form .hs-form-booleancheckbox-display {
      
    /* margin-left: -40px;    */
  	}
      
    .hs-error-msg {
           /* margin-left: -40px !important; */
    }
      
      
    .hs-main-font-element {
         /*   margin-left: -40px !important; */
        
    }

/*unsetting properties*/
  
.input{width:unset}
.input{border:unset}
.input{background-color:unset}
.hs-input{margin-bottom:unset}

</style>

<style>/* Button Arrow Hover Interaction */
        .button-secondary:hover{
        border-bottom:1px solid #323232;
    }
  .button-secondary p{display:inline-block !important;}
  
    .button-secondary:hover .arrow-right-embed{
        transform:translateX(5px);
    }
      .button-secondary:hover .button__icon{
        transform:translateX(5px);
    }
  
  .banner-link-wrapper-2:hover .right-arrow--embed{
      transform:translateX(5px);
  }
      /* End Button Arrow Hover Interaction */
  
  

/** Hubspot Form CSS **/
#hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .hs_submit.hs-submit input{
padding: 12px 53px !important;
border: 1px solid #323232 !important;
border-radius: 8px !important;
background-color:#323232 !important;
color:white !important;
}
#hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .hs_submit.hs-submit input:hover{
background-color: #464646 !important;
font-weight: 600 !important;
color:white !important;
}
  
  
 /** Arrow added **/
  /* Top banner unicode */
.announcement-bar__text:after{
content:"\2192";
display:inline-block;
margin-left:8px;
transition: transform .5s ease;
}
.announcement-bar:hover .announcement-bar__text:after{
transform:translateX(6px);

}
  
  /** Cookie banner CSS */
       #onetrust-consent-sdk #onetrust-banner-sdk{
            background-color: #323232 !important;
       
        }
        #onetrust-banner-sdk .ot-sdk-row{
            max-width: 1440px !important;
            margin: 0 auto !important
        }
        #onetrust-banner-sdk .onetrust-policy-title{
            display:none !important;
        }
        #onetrust-consent-sdk #onetrust-button-group button{
            padding:12px 36px !important;
            text-decoration:none !important;
            border-radius: 8px !important;
        }
        #onetrust-consent-sdk #onetrust-button-group button:hover{
            font-weight: 600 !important;
        }
        #onetrust-consent-sdk #onetrust-button-group #onetrust-pc-btn-handler{
            background-color: white !important;
            color:#323232 !important;
        }
  
  		#onetrust-consent-sdk #onetrust-button-group #onetrust-pc-btn-handler:hover{
           background-color: #DFDFDF !important;
           font-weight:600;
        }
  
        #onetrust-consent-sdk #onetrust-button-group #onetrust-accept-btn-handler{
            background-color: transparent !important;
            color:white !important;
          border:1px solid white !important;
        }
  
  		#onetrust-consent-sdk #onetrust-button-group #onetrust-accept-btn-handler:hover{
            background-color:#DFDFDF !important;
            color:#323232 !important;
            font-weight:600;
        }
  
  #onetrust-policy-title{color:white !important;}
  #onetrust-banner-sdk #onetrust-policy-title, #onetrust-banner-sdk #onetrust-policy-text{
  color:white !important;}
  
</style>

<script type="text/javascript">
!function(e,t){var r=e.madkudu=e.madkudu||[];if(!r.initialize)if(r.invoked)e.console&&console.error&&console.error("MadKudu snippet included twice.");
else{r.invoked=!0,r.methods=["identify","reset","group","ready","page","track","once","on","smart_form"],r.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);
return t.unshift(e),r.push(t),r}};for(var o=0;o<r.methods.length;o++){var n=r.methods[o];
r[n]=r.factory(n)}r.load=function(r){var o=("https:"===t.location.protocol?"https://":"http://")+"cdn.madkudu.com/madkudu.js/v1/"+r+"/madkudu.min.js";
if("function"==typeof e.define&&e.define.amd)e.require([o]);else{var n=t.createElement("script");
n.type="text/javascript",n.async=!0,n.src=o;var a=t.getElementsByTagName("script")[0];
a.parentNode.insertBefore(n,a)}}}}(window,document);
madkudu.SNIPPET_VERSION = "0.4.0";
madkudu.load("b2440cfd231e9e411c8fa428a5319734");
madkudu.page();
</script>

<script>
(function (m, a, z, e) {
  var s, t;
  try {
    t = m.sessionStorage.getItem('maze-us');
  } catch (err) {}
  if (!t) {
    t = new Date().getTime();
    try {
      m.sessionStorage.setItem('maze-us', t);
    } catch (err) {}
  }
  s = a.createElement('script');
  s.src = z + '?t=' + t + '&apiKey=' + e;
  s.async = true;
  a.getElementsByTagName('head')[0].appendChild(s);
  m.mazeUniversalSnippetApiKey = e;
})(window, document, 'https://snippet.maze.co/maze-universal-loader.js', 'c897138f-363f-4624-8370-a31117161799');
</script>

<!-- Jetboost script used for filtering -->
<!--<script id="jetboost-script" type="text/javascript"> window.JETBOOST_SITE_ID = "cl1ro1f9h08vq0nx81vxqak0i"; (function(d) { var s = d.createElement("script"); s.src = "https://cdn.jetboost.io/jetboost.js"; s.async = 1; d.getElementsByTagName("head")[0].appendChild(s); })(document); </script> -->








<!-- New HS FORM CSS -->
<style><style>
/* Container Modal */
.form-modal .hs_submit.hs-submit{
text-align:center !important;

}
/*
.form-modal fieldset.form-columns-2{
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-gap: 24px;
}
*/
.form-modal .fieldset.form-columns-2 .hs-form-field{
float:none !important;
width:100% !important;
}
.form-modal .fieldset.form-columns-2 .hs-form-field input{
margin-right:0 !important;
}

.form-modal label{
margin-bottom:0px !important;
}
.form-modal .hs-error-msg{
margin-left:0 !important !important;
}
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 fieldset.form-columns-2,
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 fieldset.form-columns-1:nth-child(1),
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 fieldset.form-columns-1:nth-child(2){
margin-bottom:24px !important;
}
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .input{
margin-right:0 !important;
}
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 fieldset.form-columns-1:nth-of-child(3){
margin-bottom:40px !important;
}

.hs-form-ae55bdea-7392-41e5-b6c5-e38d23774cd2_313a858e-0d3d-4c4c-b250-aefe4f136e5e fieldset.form-columns-2 .hs-form-field{
width:100% !important;
float:none !important;
}

.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .form-columns-2 div:first-child .input{
margin-right:24px !important;
} 


.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .legal-consent-container p{
font-size:12px;
color:#323232 !important;
}
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .legal-consent-container p a{
font-weight:600 !important;
color:#323232 !important;
}
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .hs_submit.hs-submit input{
padding: 12px 53px !important;
border: 1px solid #323232 !important;
border-radius: 8px !important;
background-color:#323232 !important;
color:white !important;
}
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .hs_submit.hs-submit input:hover{
background-color: #464646 !important;
font-weight: 600 !important;
color:white !important;
}
  
  .form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .hs_submit.hs-submit{
  text-align:center !important}

@media screen and (max-width:768px){
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .hs_submit.hs-submit input{
width:100% !important;
padding: 12px 16px !important;
} 
}
  .form-modal .hbspt-form input{
  background:white !important}

@media screen and (max-width:480px){
.form-modal #hsForm_ae55bdea-7392-41e5-b6c5-e38d23774cd2 .form-columns-2 div:first-child .input{
margin-right:0px !important;
margin-bottom:24px !important;
} 
}
  
  a{color:inherit;
  }
  
  .hs-main-font-element{
  margin-left:0px !important;
  color:#323232 !important;
  }
  
  /* Form Modal */
  .form-modal{
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center
  }
  
  
  /**Popular pricing package spin */
  
  .pricing-item__badge{
		animation: rotate-animation 10s infinite linear;
}
@keyframes rotate-animation {
	0% {
		transform: rotate(0deg);
  }
  50% {
		transform: rotate(180deg);
	}
	100% {
		transform: rotate(360deg);
	}
}
/* Accordion CSS */
  .plus__line.plus__line--rotate{
transition:transform .5s ease
}

.faq__header.active .plus__line.plus__line--rotate{
transform:rotate(180deg);
}
  .faq__body{
  max-height:0;
  }  
  
  
  
</style>

<script>
  window.markerConfig = {
    project: '6453d60fb9598115e78c33b5', 
    source: 'snippet'
  };
</script>
<!-- Marker.io -->
<script>
  window.markerConfig = {
    project: '648b32a06f86d93e9f1b11ca', 
    source: 'snippet'
  };
</script>

<script>
!function(e,r,a){if(!e.__Marker){e.__Marker={};var t=[],n={__cs:t};["show","hide","isVisible","capture","cancelCapture","unload","reload","isExtensionInstalled","setReporter","setCustomData","on","off"].forEach(function(e){n[e]=function(){var r=Array.prototype.slice.call(arguments);r.unshift(e),t.push(r)}}),e.Marker=n;var s=r.createElement("script");s.async=1,s.src="https://edge.marker.io/latest/shim.js";var i=r.getElementsByTagName("script")[0];i.parentNode.insertBefore(s,i)}}(window,document);
</script>
    
    







<style>.department-filter-item:hover {
    text-decoration: underline;
  }
  
  .department-filter-item {
  	background: #E1F8DE;
  }
  #department-filter-list {
    -moz-appearance:none; /* Firefox */
    -webkit-appearance:none; /* Safari and Chrome */
    appearance:none;
	}
  #department-filter-name {
    overflow: hidden;
    text-overflow: ellipsis;
	}
  .department-filter-item.active {
    font-weight: bold;
  }
</style>







<script>
  var favicon = document.querySelector('link[rel="shortcut icon"]');
  window.isDarkMode = (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches);
  if(favicon && window.isDarkMode) {
      favicon.href = favicon.href.replaceAll('favicon-2021-light%402x.png', 'favicon-2021-dark%402x.png');
  }



 </script><link rel="canonical" href="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Oyster Job Application Form</title>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/form-common.css?v=3ba882e
"/>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.46215&themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.46215" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.46215" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/stylebuilder/donationBox.css?v=3.3.46215">
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */

/* 17 - INPUT WIDTHS */
/*  20 - FORM PADDING */
.form-section {
  padding: 0px 38px;
}
.form-textbox,
.form-textarea,
li[data-type=control_fileupload] .qq-upload-button,
.signature-wrapper {
  border-color: rgba(50, 31, 22, 0.75);
}
.form-textarea:hover,
.form-textbox:hover,
li[data-type=control_fileupload] .qq-upload-button:hover,
.signature-wrapper:hover {
  border-color: rgba(50, 31, 22, 0.5);
  box-shadow: 0 0 0 2px rgba(50, 31, 22, 0.25);
}
.form-textarea:focus,
.form-textbox:focus,
li[data-type=control_fileupload] .qq-upload-button:focus,
.signature-wrapper:focus {
  border-color: #321f16;
  box-shadow: 0 0 0 3px rgba(50, 31, 22, 0.25);
}
/* Heights */
li[data-type="control_textbox"] div[data-layout="half"],
li[data-type="control_dropdown"] div[data-layout="half"],
li[data-type="control_email"] div[data-layout="half"],
li[data-type="control_number"] div[data-layout="half"],
li[data-type="control_phone"] div[data-layout="half"],
li[data-type="control_datetime"] div[data-layout="half"],
li[data-type="control_signature"] div[data-layout="half"] {
  width: 100% !important;
  max-width: 380px;
}
.form-label {
  margin-right: 14px;
  margin-bottom: 0;
}
/* 11 - LINE PADDING */
/* LABEL STYLE */
.form-dropdown:first-child {
  border-color: rgba(50, 31, 22, 0.75);
  background-color: #ffffff;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_birthdate"] .form-input,
[data-type="control_time"] .form-input,
[data-type="control_dropdown"] .form-input-wide,
[data-type="control_birthdate"] .form-input-wide,
[data-type="control_time"] .form-input-wide {
  width: 100% !important;
  max-width: 380px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 380px;
}
/* 12 - ROUNDED INPUTS */
.supernova .form-all,
.form-all {
  border-radius: 3px;
}
.form-section:first-child {
  border-radius: 3px 3px 0 0;
}
.form-section:last-child {
  border-radius: 0 0 3px 3px;
}
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 20px;
  height: 20px;
}
.form-checkbox-item input,
.form-radio-item input {
  margin-top: 2px;
}
.form-checkbox:checked + label:before,
.form-checkbox:checked + span:before {
  background-color: rgba(50, 31, 22, 0.75);
  border-color: rgba(50, 31, 22, 0.75);
}
.form-radio:checked + label:before,
.form-radio:checked + span:before {
  border-color: rgba(50, 31, 22, 0.75);
}
.form-radio:checked + label:after,
.form-radio:checked + span:after {
  background-color: rgba(50, 31, 22, 0.75);
}
.form-checkbox:hover + label:before,
.form-checkbox:hover + span:before,
.form-radio:hover + label:before,
.form-radio:hover + span:before {
  border-color: rgba(50, 31, 22, 0.5);
  box-shadow: 0 0 0 2px rgba(50, 31, 22, 0.25);
}
.form-checkbox:focus + label:before,
.form-checkbox:focus + span:before,
.form-radio:focus + label:before,
.form-radio:focus + span:before {
  border-color: #321f16;
  box-shadow: 0 0 0 3px rgba(50, 31, 22, 0.25);
}
.submit-button {
  font-size: 16px;
  font-weight: normal;
  font-family: inherit;
  border-color: rgba(50, 31, 22, 0.75);
}
.submit-button {
  min-width: 180px;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-family: "Verdana", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  min-width: 128px;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.header-large h1.form-header {
  font-size: 2em;
}
.header-large h2.form-header {
  font-size: 1.5em;
}
.header-large h3.form-header {
  font-size: 1.17em;
}
.header-large h1 + .form-subHeader {
  font-size: 1em;
}
.header-large h2 + .form-subHeader {
  font-size: .875em;
}
.header-large h3 + .form-subHeader {
  font-size: .75em;
}
.header-default h1.form-header {
  font-size: 2em;
}
.header-default h2.form-header {
  font-size: 1.5em;
}
.header-default h3.form-header {
  font-size: 1.17em;
}
.header-default h1 + .form-subHeader {
  font-size: 1em;
}
.header-default h2 + .form-subHeader {
  font-size: .875em;
}
.header-default h3 + .form-subHeader {
  font-size: .75em;
}
.header-small h1.form-header {
  font-size: 2em;
}
.header-small h2.form-header {
  font-size: 1.5em;
}
.header-small h3.form-header {
  font-size: 1.17em;
}
.header-small h1 + .form-subHeader {
  font-size: 1em;
}
.header-small h2 + .form-subHeader {
  font-size: .875em;
}
.header-small h3 + .form-subHeader {
  font-size: .75em;
}
.form-header-group {
  text-align: left;
}
.form-header-group {
  font-family: "false", sans-serif;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  margin: 0px -38px;
}
div.form-header-group.header-large,
div.form-header-group.hasImage {
  padding: 40px 52px;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: #321f16;
}
.form-line-error {
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffd6d6;
}
.form-line-error .form-error-message {
  background-color: #f23a3c;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #f23a3c;
  box-shadow: 0 0 3px #f23a3c;
}
.form-line-error {
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffd6d6;
}
.form-header-group .form-header,
.form-header-group .form-subHeader {
  color: #321f16;
}
.form-line-active {
  background-color: #f1f5ff;
}
/* 29 - FORM COLUMNS */


  /*PREFERENCES STYLE*/
  /* NEW THEME STYLE */

  /* colors */

  .form-textbox, .form-textarea {
    color: undefined;
  }
  .FITB-inptCont .form-textbox, .FITB-inptCont .form-dropdown,
  span.FITB-inptCont[data-type=selectbox] select,
  span.FITB-inptCont[data-type=timebox] select {
    color: #FFFFFF;
  }
  .rating-item input:hover+label {
    color: rgba(17, 17, 27, 0.75);
  }
  li[data-type=control_fileupload] .qq-upload-button,
  .until-text,
  .form-submit-reset {
    color: #FFFFFF;
  }

  .stageEmpty,
  .btn-barebone,
  .formPage-stuff,
  .scrollToTop .scrollToTop-text {
    color: #FFFFFF;
  }
  .scrollToTop svg {
    fill: #FFFFFF;
  }
  .rating-item label {
    color: rgba(17, 17, 27, 0.75);
  }
  .currentDate,
  .pickerItem select,
  .appointmentCalendar .calendarDay,
  .calendar.popup th,
  .calendar.popup table tbody td,
  .calendar-new-header>*,
  .form-collapse-table {
    color: #FFFFFF;
  }
  .appointmentCalendar .dayOfWeek {
    color: #FFFFFF;
  }
  .appointmentSlotsContainer > * {
    color: rgba(17, 17, 27, 0.75);
  }
  li[data-type=control_fileupload] .jfUpload-heading,
  ::placeholder,
  .form-dropdown.is-active,
  .form-dropdown:first-child,
  .form-spinner-input {
    color: #1A1F2F;
  }
  .appointmentCalendar .calendarWeek .calendarDay.isUnavailable,
  .calendar tr.days td.otherDay,
  .calendar tr.days td:hover:not(.unselectable) {
    color: #1A1F2F;
  }
  span.form-sub-label, label.form-sub-label, div.form-header-group .form-subHeader,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container * {
    color: #838895;
  }
  .form-pagebreak-back{
    color: #FFFFFF;
  }
  .rating-item input:checked+label,
  .rating-item input:focus+label {
    color: #FFFFFF;
  }
  .clear-pad-btn {
    color: #FFFFFF;
  }
  .form-textbox::placeholder,
  .form-dropdown:not(.time-dropdown):not(:required),
  .form-dropdown:not(:required),
  .form-dropdown:required:invalid {
    color: #1A1F2F;
  }
  /* border-colors */
  .form-dropdown,
  .form-textarea,
  .form-textbox,
  li[data-type=control_fileupload] .qq-upload-button,
  .rating-item label,
  .rating-item input:focus+label,
  .rating-item input:checked+label,
  .jf-form-buttons,
  .form-checkbox+label:before, .form-checkbox+span:before, .form-radio+label:before, .form-radio+span:before,
  .signature-pad-passive,
  .signature-wrapper,
  .appointmentCalendarContainer,
  .appointmentField .timezonePickerName,
  .appointmentDayPickerButton,
  .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem,
  .appointmentCalendarContainer .monthYearPicker,
  .appointmentCalendar .calendarDay.isActive .calendarDayEach, .appointmentCalendar .calendarDay.isToday .calendarDayEach, .appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach,
  .calendar.popup:before,
  .calendar-new-month,
  .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child,
  .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group])+tr[role=group] th,
  .form-matrix-headers.form-matrix-column-headers,
  .isSelected .form-matrix-column-headers:nth-last-of-type(2),
  li[data-type=control_inline] input[type=email], li[data-type=control_inline] input[type=number],
  li[data-type=control_inline] input[type=tel], li[data-type=control_inline] input[type=text] {
    border-color: rgba(17, 17, 27, 0.75);
  }
  .stageEmpty,
  .form-page-break:before,
  .welcome-page-break:before,
  .thankyou-page-break:before,
  .form-cover-break:before,
  .form-page-break:after,
  .welcome-page-break:after,
  .thankyou-page-break:after,
  .form-cover-break:after {
    border-color: rgba(17, 17, 27, 0.75);
  }

  .rating-item input:hover+label {
    border-color: rgba(17, 17, 27, 0.75);
  }
  .appointmentSlot,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio:checked+label:before, .form-radio:checked+span:before,
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover {
    border-color: rgba(17, 17, 27, 0.75);
  }

  .calendar tr.days td:hover:not(.unselectable):after {
    border-color: #1A1F2F;
  }
  .form-header-group,
  .form-buttons-wrapper, .form-pagebreak, .form-submit-clear-wrapper,
  .form-pagebreak-next,
  .form-pagebreak-back,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .divider {
    border-color: #11111B;
  }
  .form-pagebreak-back:focus, .form-pagebreak-next:focus, .form-submit-button:focus {
    border-color: rgba(17, 17, 27, 1);
  }
  /* background-colors */
  .form-line-active {
    background-color: #4F5B77;
  }
  .stageEmpty {
    background-color:  #11111B;
  }
  .form-line-error {
    background-color: #642733;
  }
  .form-matrix-column-headers, .form-matrix-row-headers,
  .form-spinner-button-container>*,
  .form-collapse-table,
  .form-collapse-table:hover,
  .appointmentDayPickerButton {
    background-color: #1A1F2F;
  }
  .calendar.popup, .calendar.popup table,
  .calendar.popup table tbody td:after{
    background-color: #424756;
  }

  .appointmentCalendar .calendarDay.isActive .calendarDayEach,
  .appointmentFieldRow.forSelectedDate,
  .calendar.popup tr.days td.selected:after,
  .calendar.popup:after,
  .submit-button,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio+label:after, .form-radio+span:after,
  .rating-item input:checked+label,
  .appointmentCalendar .calendarDay:after,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .rating-item input:focus+label,
  .formPage-removePage:hover,
  .btn-barebone:hover, .btn-barebone:active {
    background-color: #2E69FF;
  }
  .appointmentSlot.active {
    background-color: #2E69FF !important;
  }
  .clear-pad-btn,
  .appointmentCalendar .dayOfWeek,
  .calendar.popup th {
    background-color: #11111B !important;
  }
  .appointmentField .timezonePicker:hover+.timezonePickerName,
  .form-spinner-button-container>*:hover {
    background-color: #96B4FF;
  }
  .form-matrix-values,
  .form-matrix-values,
  .signature-wrapper,
  .signature-pad-passive,
  .rating-item label,
  .form-checkbox+label:before, .form-checkbox+span:before,
  .form-radio+label:before, .form-radio+span:before {
    background-color: #838895;
  }
  li[data-type=control_fileupload] .qq-upload-button {
    background-color: #838895;
  }
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected
  .questionLine-editButton.forRemove:after,
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before {
    background-color: #FFFFFF;
  }
  .appointmentCalendarContainer, .appointmentSlot,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container *,
  .calendar-opened {
    background-color: transparent;
  }
  .page-section li.form-line-active[data-type="control_button"] {
    background-color: #4F5B77;
  }
  .appointmentCalendar .calendarDay.isSelected:after {
    color: #838895;
  }
  /* shadow */
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover,
  .calendar.popup:before,
  .jSignature:hover,
  li[data-type=control_fileupload] .qq-upload-button-hover,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-line[data-payment="true"] .form-product-item .p_checkbox:hover .select_border,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .calendar.popup:before {
    border-color: rgba(17, 17, 27, 0.5);
    box-shadow: 0 0 0 2px rgba(17, 17, 27, 0.25);
  }
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  li[data-type=control_fileupload] .qq-upload-button-focus,
  .form-checkbox:focus+label:before, .form-checkbox:focus+span:before, .form-radio:focus+label:before, .form-radio:focus+span:before,
  .calendar.popup:before {
    border-color: rgba(17, 17, 27, 1);
    box-shadow: 0 0 0 3px rgba(17, 17, 27, 0.25);
  }
  .calendar.popup table tbody td{
    box-shadow: none;
  }

  /* button colors */
  .submit-button {
    background-color: #2E69FF;
    border-color: #2E69FF;
  }
  .submit-button:hover {
    background-color: #1C3F99;
    border-color: #1C3F99;
  }
  .form-pagebreak-next {
    background-color: #11111B;
  }
  .form-pagebreak-back {
    background-color: #11111B;
  }
  .form-pagebreak-back:hover {
    background-color: #11141C;
    border-color: #11141C;
  }
  .form-pagebreak-next:hover {
    background-color: #11141C;
    border-color: #11141C;
  }
  .form-sacl-button, .form-submit-print {
    background-color: transparent;
    color: rgba(17, 17, 27, 0.75);
    border-color: rgba(17, 17, 27, 0.75);
  }
  .form-sacl-button:hover, .form-submit-print:hover,
  .appointmentSlot:not(.disabled):not(.active):hover,
  .appointmentDayPickerButton:hover,
  .rating-item input:hover+label {
    background-color: #96B4FF;
  }

  /* payment styles */

  .form-line[data-payment=true] .form-textbox,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] #coupon-container input,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .form-product-category-item:after,
  .form-line[data-payment=true] .filter-container .dropdown-container .select-content,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .select_border,
  .form-line[data-payment="true"] .form-product-item .form-product-container .form-sub-label-container span.select_cont,
  .form-line[data-payment=true] select.form-dropdown,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    border-color: rgba(17, 17, 27, 0.75);
    border-color: rgba(17,17,27,.7);
  }
  .form-line[data-payment="true"] hr,
  .form-line[data-payment=true] .p_item_separator,
  .form-line[data-payment="true"] .payment_footer.new_ui,
  .form-line.card-3col .form-product-item.new_ui,
  .form-line.card-2col .form-product-item.new_ui {
    border-color: rgba(17, 17, 27, 0.75);
    border-color: rgba(17,17,27,.4);
  }
  .form-line[data-payment=true] .form-product-category-item {
    border-color: rgba(17, 17, 27, 0.75);
    border-color: undefined;
  }
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] .custom_quantity,
  .form-line[data-payment=true] .filter-container .select-content,
  .form-line[data-payment=true] .p_checkbox .select_border,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    background-color: #838895;
  }
  .form-line[data-payment=true] .form-product-category-item.title_collapsed.has_selected_product .selected-items-icon {
   background-color: #11111B;
   border-color: #11111B;
  }
  .form-line[data-payment=true].form-line.card-3col .form-product-item,
  .form-line[data-payment=true].form-line.card-2col .form-product-item {
   background-color: rgba(0,0,0,.05);
  }
  .form-line[data-payment=true] .payment-form-table input.form-textbox,
  .form-line[data-payment=true] .payment-form-table input.form-dropdown,
  .form-line[data-payment=true] .payment-form-table .form-sub-label-container > div,
  .form-line[data-payment=true] .payment-form-table span.form-sub-label-container iframe,
  .form-line[data-type=control_square] .payment-form-table span.form-sub-label-container iframe {
    border-color: rgba(17, 17, 27, 0.75);
  }

  /* icons */
  .appointmentField .timezonePickerName:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDcuOTYwMkMwIDMuNTY2MTcgMy41NTgyMSAwIDcuOTUyMjQgMEMxMi4zNTQyIDAgMTUuOTIwNCAzLjU2NjE3IDE1LjkyMDQgNy45NjAyQzE1LjkyMDQgMTIuMzU0MiAxMi4zNTQyIDE1LjkyMDQgNy45NTIyNCAxNS45MjA0QzMuNTU4MjEgMTUuOTIwNCAwIDEyLjM1NDIgMCA3Ljk2MDJaTTEuNTkzNzUgNy45NjAyQzEuNTkzNzUgMTEuNDc4NiA0LjQ0MzUgMTQuMzI4NCA3Ljk2MTkxIDE0LjMyODRDMTEuNDgwMyAxNC4zMjg0IDE0LjMzMDEgMTEuNDc4NiAxNC4zMzAxIDcuOTYwMkMxNC4zMzAxIDQuNDQxNzkgMTEuNDgwMyAxLjU5MjA0IDcuOTYxOTEgMS41OTIwNEM0LjQ0MzUgMS41OTIwNCAxLjU5Mzc1IDQuNDQxNzkgMS41OTM3NSA3Ljk2MDJaIiBmaWxsPSIjODM4ODk1Ii8+CjxwYXRoIGQ9Ik04LjM1ODA5IDMuOTc5OThINy4xNjQwNlY4Ljc1NjFMMTEuMzQzMiAxMS4yNjM2TDExLjk0MDIgMTAuMjg0NUw4LjM1ODA5IDguMTU5MDhWMy45Nzk5OFoiIGZpbGw9IiM4Mzg4OTUiLz4KPC9zdmc+Cg==);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.prev:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik04LjU5NzgyIDUuMzM2NjRDOC45MzMxMiA1LjY0MDE4IDkuNDM5MzkgNS42MzM2IDkuNzU2MTMgNS4zMTY2OUMxMC4wODEzIDQuOTkxMzYgMTAuMDgxMyA0LjQ2MzU0IDkuNzU2MTMgNC4xMzgyMUM5LjYwOTA0IDQuMDAwMjYgOS42MDkwMyA0LjAwMDI2IDkuMDg5NDkgMy41MTUwOUM4LjQzNzQyIDIuOTA2MDkgOC40Mzc0MyAyLjkwNjA5IDcuNjU1MTEgMi4xNzU0N0M2LjA4OTU2IDAuNzEzMzUzIDYuMDg5NTYgMC43MTMzNTIgNS41Njc3MyAwLjIyNjAwN0M1LjI0MTA0IC0wLjA3MDYwMDUgNC43NTA4NSAtMC4wNjk1OTY3IDQuNDMyMzUgMC4yMjU4MzVMMC4yNjI1NCA0LjExODE1Qy0wLjA4MDU0NTkgNC40NTkzNiAtMC4wODcxNzExIDQuOTg3ODggMC4yNDE0NjggNS4zMTY2OUMwLjU1OTU1OCA1LjYzNDk2IDEuMDY5NzUgNS42NDA1OSAxLjM5NzAzIDUuMzM2NTNMNC45OTg5MSAxLjk3NTIyTDguNTk3ODIgNS4zMzY2NFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.next:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xLjQwMjE4IDAuMjI2OTE1QzEuMDY2ODcgLTAuMDc2Njg0OSAwLjU2MDYwMiAtMC4wNzAwODQ5IDAuMjQzODY5IDAuMjQ2ODE1Qy0wLjA4MTI4OTggMC41NzIxMTUgLTAuMDgxMjg5OCAxLjEwMDAyIDAuMjQzODY5IDEuNDI1MzJDMC4zOTA5NTYgMS41NjMyMiAwLjM5MDk2NiAxLjU2MzIyIDAuOTEwNTEgMi4wNDg0MkMxLjU2MjU3IDIuNjU3NDIgMS41NjI1NiAyLjY1NzQxIDIuMzQ0ODggMy4zODgwMkMzLjkxMDQ0IDQuODUwMTEgMy45MTA0MyA0Ljg1MDEyIDQuNDMyMjcgNS4zMzc1MkM0Ljc1ODk1IDUuNjM0MTIgNS4yNDkxNSA1LjYzMzEyIDUuNTY3NjQgNS4zMzc3Mkw5LjczNzQ2IDEuNDQ1NDJDMTAuMDgwNSAxLjEwNDEyIDEwLjA4NzEgMC41NzU2MTUgOS43NTg1MyAwLjI0NjgxNUM5LjQ0MDQ0IC0wLjA3MTQ4NDkgOC45MzAyNCAtMC4wNzcwODQ5IDguNjAyOTcgMC4yMjcwMTVMNS4wMDEwOCAzLjU4ODMyTDEuNDAyMTggMC4yMjY5MTVaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K);
  }
  .appointmentField .timezonePickerName:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDFMNSA1TDkgMSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg==);
    width: 11px;
  }
  li[data-type=control_datetime] [data-wrapper-react=true].extended>div+.form-sub-label-container .form-textbox:placeholder-shown,
  li[data-type=control_datetime] [data-wrapper-react=true]:not(.extended) .form-textbox:not(.time-dropdown):placeholder-shown,
  .appointmentCalendarContainer .currentDate {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNyAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1Ljk0ODkgNVYxNS4wMjZDMTUuOTQ4OSAxNS41NjM5IDE1LjUwMjYgMTYgMTQuOTUyMSAxNkgwLjk5NjgwNUMwLjQ0NjI4NSAxNiAwIDE1LjU2MzkgMCAxNS4wMjZWNUgxNS45NDg5Wk00LjE5MjQ1IDExLjQxNjdIMi4zNzQ3NEwyLjI4NTE1IDExLjQyNDdDMi4xMTA3OCAxMS40NTY1IDEuOTY4MDEgMTEuNTc5MiAxLjkwNzUyIDExLjc0MjJMMS44ODQzNyAxMS44MjY4TDEuODc2MzQgMTEuOTE2N1YxMy42NjY3TDEuODg0MzcgMTMuNzU2NUMxLjkxNjAyIDEzLjkzMTUgMi4wMzg0IDE0LjA3NDcgMi4yMDA4MyAxNC4xMzU0TDIuMjg1MTUgMTQuMTU4NkwyLjM3NDc0IDE0LjE2NjdINC4xOTI0NUw0LjI4MjAzIDE0LjE1ODZDNC40NTY0MSAxNC4xMjY5IDQuNTk5MTggMTQuMDA0MSA0LjY1OTY3IDEzLjg0MTFMNC42ODI4MiAxMy43NTY1TDQuNjkwODUgMTMuNjY2N1YxMS45MTY3TDQuNjgyODIgMTEuODI2OEM0LjY1MTE3IDExLjY1MTkgNC41Mjg3OSAxMS41MDg2IDQuMzY2MzUgMTEuNDQ3OUw0LjI4MjAzIDExLjQyNDdMNC4xOTI0NSAxMS40MTY3Wk04Ljg4MzI5IDExLjQxNjdINy4wNjU1OUw2Ljk3NiAxMS40MjQ3QzYuODAxNjIgMTEuNDU2NSA2LjY1ODg1IDExLjU3OTIgNi41OTgzNyAxMS43NDIyTDYuNTc1MjIgMTEuODI2OEw2LjU2NzE5IDExLjkxNjdWMTMuNjY2N0w2LjU3NTIyIDEzLjc1NjVDNi42MDY4NyAxMy45MzE1IDYuNzI5MjUgMTQuMDc0NyA2Ljg5MTY4IDE0LjEzNTRMNi45NzYgMTQuMTU4Nkw3LjA2NTU5IDE0LjE2NjdIOC44ODMyOUw4Ljk3Mjg4IDE0LjE1ODZDOS4xNDcyNiAxNC4xMjY5IDkuMjkwMDMgMTQuMDA0MSA5LjM1MDUxIDEzLjg0MTFMOS4zNzM2NyAxMy43NTY1TDkuMzgxNyAxMy42NjY3VjExLjkxNjdMOS4zNzM2NyAxMS44MjY4QzkuMzQyMDIgMTEuNjUxOSA5LjIxOTY0IDExLjUwODYgOS4wNTcyIDExLjQ0NzlMOC45NzI4OCAxMS40MjQ3TDguODgzMjkgMTEuNDE2N1pNNC4xOTI0NSA2LjgzMzMzSDIuMzc0NzRMMi4yODUxNSA2Ljg0MTM5QzIuMTEwNzggNi44NzMxNCAxLjk2ODAxIDYuOTk1OTEgMS45MDc1MiA3LjE1ODg3TDEuODg0MzcgNy4yNDM0NkwxLjg3NjM0IDcuMzMzMzNWOS4wODMzM0wxLjg4NDM3IDkuMTczMjFDMS45MTYwMiA5LjM0ODE1IDIuMDM4NCA5LjQ5MTM3IDIuMjAwODMgOS41NTIwNUwyLjI4NTE1IDkuNTc1MjhMMi4zNzQ3NCA5LjU4MzMzSDQuMTkyNDVMNC4yODIwMyA5LjU3NTI4QzQuNDU2NDEgOS41NDM1MyA0LjU5OTE4IDkuNDIwNzUgNC42NTk2NyA5LjI1NzhMNC42ODI4MiA5LjE3MzIxTDQuNjkwODUgOS4wODMzM1Y3LjMzMzMzTDQuNjgyODIgNy4yNDM0NkM0LjY1MTE3IDcuMDY4NTIgNC41Mjg3OSA2LjkyNTI5IDQuMzY2MzUgNi44NjQ2MUw0LjI4MjAzIDYuODQxMzlMNC4xOTI0NSA2LjgzMzMzWk04Ljg4MzI5IDYuODMzMzNINy4wNjU1OUw2Ljk3NiA2Ljg0MTM5QzYuODAxNjIgNi44NzMxNCA2LjY1ODg1IDYuOTk1OTEgNi41OTgzNyA3LjE1ODg3TDYuNTc1MjIgNy4yNDM0Nkw2LjU2NzE5IDcuMzMzMzNWOS4wODMzM0w2LjU3NTIyIDkuMTczMjFDNi42MDY4NyA5LjM0ODE1IDYuNzI5MjUgOS40OTEzNyA2Ljg5MTY4IDkuNTUyMDVMNi45NzYgOS41NzUyOEw3LjA2NTU5IDkuNTgzMzNIOC44ODMyOUw4Ljk3Mjg4IDkuNTc1MjhDOS4xNDcyNiA5LjU0MzUzIDkuMjkwMDMgOS40MjA3NSA5LjM1MDUxIDkuMjU3OEw5LjM3MzY3IDkuMTczMjFMOS4zODE3IDkuMDgzMzNWNy4zMzMzM0w5LjM3MzY3IDcuMjQzNDZDOS4zNDIwMiA3LjA2ODUyIDkuMjE5NjQgNi45MjUyOSA5LjA1NzIgNi44NjQ2MUw4Ljk3Mjg4IDYuODQxMzlMOC44ODMyOSA2LjgzMzMzWk0xMy41NzQxIDYuODMzMzNIMTEuNzU2NEwxMS42NjY4IDYuODQxMzlDMTEuNDkyNSA2Ljg3MzE0IDExLjM0OTcgNi45OTU5MSAxMS4yODkyIDcuMTU4ODdMMTEuMjY2MSA3LjI0MzQ2TDExLjI1OCA3LjMzMzMzVjkuMDgzMzNMMTEuMjY2MSA5LjE3MzIxQzExLjI5NzcgOS4zNDgxNSAxMS40MjAxIDkuNDkxMzcgMTEuNTgyNSA5LjU1MjA1TDExLjY2NjggOS41NzUyOEwxMS43NTY0IDkuNTgzMzNIMTMuNTc0MUwxMy42NjM3IDkuNTc1MjhDMTMuODM4MSA5LjU0MzUzIDEzLjk4MDkgOS40MjA3NSAxNC4wNDE0IDkuMjU3OEwxNC4wNjQ1IDkuMTczMjFMMTQuMDcyNSA5LjA4MzMzVjcuMzMzMzNMMTQuMDY0NSA3LjI0MzQ2QzE0LjAzMjkgNy4wNjg1MiAxMy45MTA1IDYuOTI1MjkgMTMuNzQ4IDYuODY0NjFMMTMuNjYzNyA2Ljg0MTM5TDEzLjU3NDEgNi44MzMzM1oiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTEzLjA1NDIgMS4xMjVIMTUuMDQ3OEMxNS41OTgzIDEuMTI1IDE2LjA0NDYgMS42MDA3IDE2LjA0NDYgMi4xODc1VjRIMC4wOTU3MDMxVjIuMTg3NUMwLjA5NTcwMzEgMS42MDA3IDAuNTQxOTg4IDEuMTI1IDEuMDkyNTEgMS4xMjVIMy4wODYxMlYxLjA2MjVDMy4wODYxMiAwLjQ3NTY5NyAzLjUzMjQgMCA0LjA4MjkyIDBDNC42MzM0NCAwIDUuMDc5NzMgMC40NzU2OTcgNS4wNzk3MyAxLjA2MjVWMS4xMjVIMTEuMDYwNlYxLjA2MjVDMTEuMDYwNiAwLjQ3NTY5NyAxMS41MDY4IDAgMTIuMDU3NCAwQzEyLjYwNzkgMCAxMy4wNTQyIDAuNDc1Njk3IDEzLjA1NDIgMS4wNjI1VjEuMTI1WiIgZmlsbD0iIzQyNDc1NiIvPgo8L3N2Zz4K);
  }
  .form-star-rating-star.Stars {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAAeCAYAAACrDxUoAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAA2jSURBVHgBzZx9cBTlHcd/u3uXQLgjF8SSV7JYkgiV5GSoxCTgXV8UglBagWrtNIGBDh3bGdTa+o/k4rROZ3yB9E2cEYnjaEew0wIDip1poigEm9ELI1jANm8kOSqQe8nLkeT26e+35ImXy25yt3e5+J3Z2WQ3ud9vn/083+fZ53n2AAwqJ29Zdc7C4iqYIc10/K9CDll5yzZm5Zc03Crb7TBD8peVVfeVrzZcBgIYUKZsl/Nzslp9/gB4A32LPG3uNkiiKH7GvKzW4EAABoPJj89zMM3KamXDAQiFZiaH7PyS1tzcbLnzcndjT3uLE5Ks3tJS2Zyd28r6+mDE712U0dTUBjFKBAMSFMW1ZdMG2L7tYRAVVgNJFsUvWbkBVn5rZuLzHGblboDZi2YmB3Jf3MllpSsAN0dmrt0BSZYoSC5z5Vow/3AzSKKUnDKgmr+yfC3r7OxiPp+f3b6sgtExSJIo1pLla9kzr3axFw752aLbkxuf55B7+1p2R3UXW7bdz3K+nvwcyP1uK3+K7Xr8KXbq9L8YNcWQRJH79f1gE1O6e5gSCLDAvWsYHYMYFbMDcvdD64e5c61Jd0HufrZbsmHWbOuMuCB3P3F2Nghma9JdkNzPfMsK2TRvhfr73TPggtz9hKxMECwWwy4YE4BUywVBqCIAuXYggHPTrdXJcAAev7j0y/h3OR+G1LTkxA/PgQDkmi0/TCAmLQcmijVpi3eOO/b4rp0gSMmpBOR0VAbmysqxYylbtiCI1upYXTAmAMPdj4u7IJ7bBdMsik/wkftxcRdMRnyeQ+qo+40dG3XBZOTA3Q+3cceT6YLh7sfFXVAUTTGVQdQA8ppPNS1S5IIZtvQqm2y3wTSJx19dOTE+ueDsOdMbPzyHOQUTcyAXlFKmPwct9+NKhgty90vdtm3COXJB0WKt6nU4oi6DqAHUcj8ucsFtW39kS5tGB9ByPy5ywbuc0xuf5xDpfmPn0AVnydObg577cSXDBbXcj+umC26yiUMjUZeBSe+EWttDYMdSz8dfFy3My9F0Py5ywYNvHcHaJ+QzYG6miC0hBt4vutxuMKDI+Lb5OZrux0Uu2NKUuPhaOUhpOZrux0UuGLx8pCZ7Yfw5kJOah0GWRLCLgiLjnc8Hae7GOUuemPT/6B6dbtr+N3xKbgTGWhgT3QxzCJrA7W1zeyFGqX06s9luGmH5ioBlkJmp6X5c5ILDx96u8ZeV5wtMcI9I0AKK4s04dUqzDIQcHEUPYSELgoIbFRz+jNePTmf7xtIiSEd3o/2ae52a7hcuHBCFE+82qPtz5y+o+8u4oSh4G2OsHfet2Iwc5gO3evHR6WxfyylS3W1BXhEUFTs13S9c3mvdcOFsA/hwf+XyBfBd71aPTRZ/shzEtGybyVoEIrqbhPvUTKem+4VLGeyGG54GUILdODh7AUL4uzIwdRkwRdmoQsaAZjVkwWS1SWnZYJpbpMakLXWBU3VaLoQdKgubYc9zT0+4D+ex/D/Fje6DHycMRvdevDY3XpuX4FREsRFzaKT/6f1mmR3MCDuIdO1YBgLumQ2dziYtXqy6m1hYCOZVqzTdb1wZ9Hhg5ORJ3PeAcukSKB4PMDzGBIzNsAwA2kUGrSNs5LCANaX3vnudNhrQzEPACDZqUmlLlOjiCUQqmFNNzQSpt7u9JYPOUXyEy7awcIUK2IJR6GalJS6+JwzGjovNBOlYfJ5DSqbTZs5YAepNR9joRoff7HgVGoUxhDAOX2+GoSvjyuCTlAVOO25gHgUumth6AOopDER4B40CW6yxHPxlFb2mVRU2aflyEBEwgg4sWAZWCyRKHEYCNPTxxwjpB14TCEIdwlFD/btEQhcugpo2unC8aKx8wqtjJzE+wlFTgv07Am86lJlbpG40dXe2KSL+aA4IRo1l2QbV7aZDEoJFm4JTd8Gu8TkoGB/d8gA1r1QBpkt0f6mfSEaw++ln8YlGqOPn0JXqFM+VmlnUv7MkDrpwiQUF6kZTd8PHj1PMV6WA19MYHDELje996Pje+jWQmpoK0yGCb9OD2+HcuYu1PR3uJ/lxii9IZuG/5z90LF2xBkzm6YlP8L1Wtx2udI6Pz3OwpJmFoS8+dKRmrcEnyenJgeDzndkOId/4HPq8HneaxdI+fKVhIz1giKnzo/o8auILbulWu0fRiuCj+3C5s6e2u8Pt4sd/19nR+Os5FiF05iOH+TvfBiElBaZDBN/Az38BoUuf16af+uBJiQ6GQ+i8pzzhThgOX/hFc4VDeNvS8oQ2v6Rw+LTi8xw4hCnzyxPuhOHwaeXAIRzqeWdjyq3lUUEYK4B68HGNg7B0ZcKdMAI+Fx2T+EkOIfbPHHRBiYKQLvrHVY/owhcenyDE/pmDHjgSBSH1+/7y50cmhS88BxXCKw0O6o8lCkLq9/mbH9GFj4sgtMyd1zLcfWKN+dayWVNBGAuAHL6urp6t3e3uvXp/NwbhyZMO8+rVCYOQ+n6Djz0+Dj6SFP5HdAOYZFEhvO+7DkhPnwvxqKOzCzY/tAP+83n7lDefx09JtdyEcJkDIYwvvvdqF7z2+x1wzRNdfJ6DxWIZhdCBEMaXA8FHzqf0RZcDQvhva/q8E0PdJx6cCsJoAaQHj/Xf/wlcvXp9a1ebux6mkAphxryEQUjwkfMp7R3j4CNJkX+cKAg5fHp2r6dxEBYbh9B77SZ8vquxxec5JALCMfgGYi4DTzQQRgMgwbfloR1ef6DvZ9HAx5UoCMfg6/FMgI+kORPS3eZ2Xe7sqnv0CeOzOnvqXooZvvD4/qtddUdfMx7//eMvGYIvPAc20FXXd9Z4DgOX9sUMHxfC4mahgJMAjkfbfvoo+PwBZyzwcREwoR5P3eBvngGjGtr/ii58JP2pOFGsp4cHo6KaNyzC38GoMH5w0Hh8GoiOK/5oDsqI8Rxo7C+eHFQIhwNeeoAxKhp/pc8Bg1JAqWd9cZQBjf0NK7ploAugEgrJU818TCYa90sJhQy/q0DxbfOMx6cB7Xji8xziGZeT0uPLQZ0KNFtt8TwM0T2MZ5mYxCRZzMwCo5Jw3E8yg24Z6AIoCoKDIDKqpfi/OMBquPAp/oJc4/Fp+i6e+DwHmhUxKrM17hxkmoqLR3QPpVDIAQbFBOYQCxaDUdH/Mpze0z2vdwILruSOOABciDUP5xRlMCiKHw+ANK0XT3yegxQHADiXHFcOAij2RAAYTyUQBCiRCgvAqMSsLASQybrntQ7Ksp0Kzpaj0wTjFAr4fH51w8l1zb8hB8TsS2xy7NfO40/WBAf7/ep2M5uJoibYaPzwHKRJFh9Q32yy/pkKD+YABiUw4R5pCgf2TdFPz4vTCAQGNiFTf/EBDS7TpidxcQFBplsGeg5ow4Fou5YDEnQunEdcWrK6l7bH8Em5E4dcIkHMu/nOiEyfBbHLhvPCdmpGI0XQvfvWs/Dcr1b30nYEn5R7cbwvEkRywNTZhuOrH4H9L00HIuj6zz8L1/+xyktboGW3OuQSKXVRgckqG12kyiapALQQgZ6yaWFHaUWlOseuJZr7NVoJ1IWlFoud+nETckPognV/gMB9a720BX/7DDAccomUqL4zYpX1FqlqAhgEsEf2/wi85/fug7LV9/e+fOCN2gFBuA2tffnBvx6tLV21jnEQw0UQmg3UPoof2fwSeO8f2wd/dN3f+1Hjl/HPnjla+6eadYxA9F4dH58gNBus/ZRDJHwEHt303oZ13sF2NYdFmMOdN7qP1vY2VoIWiASQ0RzQuRyRXYDha81wvQFjnd3dNhLscdJqlvauHueuX+5u1AKRG4GhSjAyYo/s/xF4N/YfgP4HtniHDh6sVVJMixRl5M6h42/X9j2wGbRAVJdv9Q/JWiFM2heu2PlUHIGHwMHLr7zOfL6+ukERasMWNtLehU9Z9W8eOlxzuqm5avOmDcKWB9ZDXl6O2v84/+ln1AbGNAxA8fnKGAIPgYMzja+zYL9+/JbTh2vaLzVXlazcIBSvXA+2+TlqM/y/jtjj8xz4kihlGJv7tjdgsPV1/FnNwaWVQ/DyYdfw9Wb1haXUnA3qyhb1SdgXew60RlC0Fo5NBxJ4BP/Q9eY2JgguT3vL2Gqa0TV9jXi8GkGseWHvPvmxXTuBvzxGEF777KIcaw5iiNnRvdSfCbyhNw/B8KGDoAT66hA8V8apD8aVQW9paT07dtwV+uSTKtPaSkhZtxao+SYHVS5d1CwDTQBFBeSlS4pUxyPw/L5AvSIKT3s6tN/+H11YuZWJYu3ze16sOfTWkSosAGHJkkJDHWCKTw5Ijkfg3eiPPv57x16saTlzhFZPCwvyCqGlyVgHnHIwWYrUm47gMRyPiyaH6kxZdPVffNGFTWRVWsFO9Uk4aKAMaAjIhPBx8BBsLwJW29PeojuP67k52FzPQUQ3lGmFtFEjwKZbJgckxyPwWCBQH1JCtXrfgDB6nN6Mc4X273eNvH28KmXbtimfhCcoWy52ZeeXKFn5Jf/Emu2AGEXjTlkLiw+on7GweA/EqJmOn8Ac6vEzGO73xvr/WbJ9I73wTotls2W7y0gTijlUY/6t9EUC+HPM39/iK6tw+csqmP/uiobe0goHxChazu+7u7yePgM/K7YySMQ7rvG8ITbT8b8KORD4iXjLLieOLy8y8m0HEz5jkrfk/g8dwbKEpr6WCwAAAABJRU5ErkJggg==) !important;
  }
  .signature-pad-passive, .signature-placeholder:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTk4IDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzQuMTA0NCA2LjM0NTA4SDc1LjU4NTlDNzUuNTQxMiA0LjcxNDQgNzQuMDk5NCAzLjUzMTE2IDcyLjAzMTIgMy41MzExNkM2OS45ODc5IDMuNTMxMTYgNjguNDIxOSA0LjY5OTQ4IDY4LjQyMTkgNi40NTQ0NkM2OC40MjE5IDcuODcxMzYgNjkuNDM2MSA4LjcwMTYyIDcxLjA3MTcgOS4xNDQwOUw3Mi4yNzQ5IDkuNDcyMjFDNzMuMzYzNiA5Ljc2MDU2IDc0LjIwMzggMTAuMTE4NSA3NC4yMDM4IDExLjAyMzNDNzQuMjAzOCAxMi4wMTc3IDczLjI1NDMgMTIuNjczOSA3MS45NDY3IDEyLjY3MzlDNzAuNzYzNSAxMi42NzM5IDY5Ljc3OTEgMTIuMTQ2OSA2OS42ODk2IDExLjAzODNINjguMTQ4NEM2OC4yNDc5IDEyLjg4MjcgNjkuNjc0NyAxNC4wMjEyIDcxLjk1NjcgMTQuMDIxMkM3NC4zNDggMTQuMDIxMiA3NS43MjUxIDEyLjc2MzQgNzUuNzI1MSAxMS4wMzgzQzc1LjcyNTEgOS4yMDM3NSA3NC4wODk1IDguNDkyODEgNzIuNzk2OSA4LjE3NDYzTDcxLjgwMjYgNy45MTYxQzcxLjAwNzEgNy43MTIyNyA2OS45NDgyIDcuMzM5NCA2OS45NTMxIDYuMzY0OTdDNjkuOTUzMSA1LjQ5OTkxIDcwLjc0MzYgNC44NTg1OCA3MS45OTY0IDQuODU4NThDNzMuMTY0OCA0Ljg1ODU4IDczLjk5NSA1LjQwNTQ1IDc0LjEwNDQgNi4zNDUwOFoiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTc3LjQ0MTYgMTMuODUyMkg3OC45MjgxVjYuMjE1ODJINzcuNDQxNlYxMy44NTIyWk03OC4xOTIzIDUuMDM3NTVDNzguNzA0NCA1LjAzNzU1IDc5LjEzMTkgNC42Mzk4MyA3OS4xMzE5IDQuMTUyNjFDNzkuMTMxOSAzLjY2NTM5IDc4LjcwNDQgMy4yNjI3IDc4LjE5MjMgMy4yNjI3Qzc3LjY3NTIgMy4yNjI3IDc3LjI1MjcgMy42NjUzOSA3Ny4yNTI3IDQuMTUyNjFDNzcuMjUyNyA0LjYzOTgzIDc3LjY3NTIgNS4wMzc1NSA3OC4xOTIzIDUuMDM3NTVaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik04NC4xMjk2IDE2Ljg2Qzg2LjA3MzUgMTYuODYgODcuNTc0OSAxNS45NzAxIDg3LjU3NDkgMTQuMDIxMlY2LjIxNTgySDg2LjExODNWNy40NTM3NUg4Ni4wMDg5Qzg1Ljc0NTQgNi45ODE0NSA4NS4yMTg0IDYuMTE2MzkgODMuNzk2NSA2LjExNjM5QzgxLjk1MjEgNi4xMTYzOSA4MC41OTQ4IDcuNTczMDYgODAuNTk0OCAxMC4wMDQyQzgwLjU5NDggMTIuNDQwMyA4MS45ODE5IDEzLjczNzggODMuNzg2NiAxMy43Mzc4Qzg1LjE4ODYgMTMuNzM3OCA4NS43MzA1IDEyLjk0NzQgODUuOTk4OSAxMi40NjAxSDg2LjA5MzRWMTMuOTYxNkM4Ni4wOTM0IDE1LjEzOTggODUuMjczMSAxNS42NjE4IDg0LjE0NDUgMTUuNjYxOEM4Mi45MDY2IDE1LjY2MTggODIuNDI0NCAxNS4wNDA0IDgyLjE2MDkgMTQuNjE3OEw4MC44ODMyIDE1LjE0NDhDODEuMjg1OSAxNi4wNjQ1IDgyLjMwNSAxNi44NiA4NC4xMjk2IDE2Ljg2Wk04NC4xMTQ3IDEyLjUwNDlDODIuNzg3MyAxMi41MDQ5IDgyLjA5NjIgMTEuNDg1NyA4Mi4wOTYyIDkuOTg0MjlDODIuMDk2MiA4LjUxNzY3IDgyLjc3MjQgNy4zNzkxNyA4NC4xMTQ3IDcuMzc5MTdDODUuNDEyMyA3LjM3OTE3IDg2LjEwODMgOC40MzgxMiA4Ni4xMDgzIDkuOTg0MjlDODYuMTA4MyAxMS41NjAzIDg1LjM5NzQgMTIuNTA0OSA4NC4xMTQ3IDEyLjUwNDlaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik05MS4wNTUgOS4zMTgwOUM5MS4wNTUgOC4xMDAwNSA5MS44MDA4IDcuNDA0MDMgOTIuODM0OSA3LjQwNDAzQzkzLjg0NDEgNy40MDQwMyA5NC40NTU2IDguMDY1MjUgOTQuNDU1NiA5LjE3MzkyVjEzLjg1MjJIOTUuOTQyMVY4Ljk5NDk0Qzk1Ljk0MjEgNy4xMDU3NCA5NC45MDMxIDYuMTE2MzkgOTMuMzQyIDYuMTE2MzlDOTIuMTkzNSA2LjExNjM5IDkxLjQ0MjggNi42NDgzNSA5MS4wODk4IDcuNDU4NzJIOTAuOTk1NFY2LjIxNTgySDg5LjU2ODVWMTMuODUyMkg5MS4wNTVWOS4zMTgwOVoiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTEwMS43NiAxMy44NTIySDEwMy4yOTZWOS40MTI1NUgxMDguMzcyVjEzLjg1MjJIMTA5LjkxNFYzLjY3MDM3SDEwOC4zNzJWOC4wOTUwOEgxMDMuMjk2VjMuNjcwMzdIMTAxLjc2VjEzLjg1MjJaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik0xMTUuMzIzIDE0LjAwNjNDMTE2Ljk4OCAxNC4wMDYzIDExOC4xNjYgMTMuMTg2IDExOC41MDQgMTEuOTQzMUwxMTcuMDk3IDExLjY4OTVDMTE2LjgyOSAxMi40MTA0IDExNi4xODMgMTIuNzc4MyAxMTUuMzM4IDEyLjc3ODNDMTE0LjA2NSAxMi43NzgzIDExMy4yMSAxMS45NTMgMTEzLjE3IDEwLjQ4MTRIMTE4LjU5OVY5Ljk1NDQ2QzExOC41OTkgNy4xOTUyMiAxMTYuOTQ4IDYuMTE2MzkgMTE1LjIxOCA2LjExNjM5QzExMy4wOSA2LjExNjM5IDExMS42ODggNy43MzcxMyAxMTEuNjg4IDEwLjA4MzdDMTExLjY4OCAxMi40NTUyIDExMy4wNyAxNC4wMDYzIDExNS4zMjMgMTQuMDA2M1pNMTEzLjE3NSA5LjM2NzgxQzExMy4yMzUgOC4yODQgMTE0LjAyIDcuMzQ0MzcgMTE1LjIyOCA3LjM0NDM3QzExNi4zODIgNy4zNDQzNyAxMTcuMTM3IDguMTk5NDkgMTE3LjE0MiA5LjM2NzgxSDExMy4xNzVaIiBmaWxsPSIjNDI0NzU2Ii8+CjxwYXRoIGQ9Ik0xMjAuMjQ4IDEzLjg1MjJIMTIxLjczNVY5LjE4ODgzQzEyMS43MzUgOC4xODk1NCAxMjIuNTA1IDcuNDY4NjYgMTIzLjU1OSA3LjQ2ODY2QzEyMy44NjggNy40Njg2NiAxMjQuMjE2IDcuNTIzMzUgMTI0LjMzNSA3LjU1ODE1VjYuMTM2MjdDMTI0LjE4NiA2LjExNjM5IDEyMy44OTIgNi4xMDE0NyAxMjMuNzAzIDYuMTAxNDdDMTIyLjgwOSA2LjEwMTQ3IDEyMi4wNDMgNi42MDg1OCAxMjEuNzY1IDcuNDI4ODlIMTIxLjY4NVY2LjIxNTgySDEyMC4yNDhWMTMuODUyMloiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTEyOC42MzkgMTQuMDA2M0MxMzAuMzA1IDE0LjAwNjMgMTMxLjQ4MyAxMy4xODYgMTMxLjgyMSAxMS45NDMxTDEzMC40MTQgMTEuNjg5NUMxMzAuMTQ1IDEyLjQxMDQgMTI5LjQ5OSAxMi43NzgzIDEyOC42NTQgMTIuNzc4M0MxMjcuMzgxIDEyLjc3ODMgMTI2LjUyNiAxMS45NTMgMTI2LjQ4NiAxMC40ODE0SDEzMS45MTVWOS45NTQ0NkMxMzEuOTE1IDcuMTk1MjIgMTMwLjI2NSA2LjExNjM5IDEyOC41MzUgNi4xMTYzOUMxMjYuNDA3IDYuMTE2MzkgMTI1LjAwNSA3LjczNzEzIDEyNS4wMDUgMTAuMDgzN0MxMjUuMDA1IDEyLjQ1NTIgMTI2LjM4NyAxNC4wMDYzIDEyOC42MzkgMTQuMDA2M1pNMTI2LjQ5MSA5LjM2NzgxQzEyNi41NTEgOC4yODQgMTI3LjMzNiA3LjM0NDM3IDEyOC41NDUgNy4zNDQzN0MxMjkuNjk4IDcuMzQ0MzcgMTMwLjQ1NCA4LjE5OTQ5IDEzMC40NTkgOS4zNjc4MUgxMjYuNDkxWiIgZmlsbD0iIzQyNDc1NiIvPgo8cGF0aCBkPSJNMSAzNi4wMjI5QzEyLjI0NjEgMzkuMjIwNSAyMy4xODIgMzUuMDMyOCAzMi41MDg0IDI4Ljg1MTFDMzcuNDQwNCAyNS41ODIyIDQyLjMzNDEgMjEuNjY4NyA0NS4zMzI5IDE2LjUxMDFDNDYuNTI4MyAxNC40NTM5IDQ3Ljk4OTMgMTAuODg0NCA0NC4yMjcxIDEwLjg1MjhDNDAuMTMzNyAxMC44MTgzIDM3LjA4NjQgMTQuNTE0MiAzNS41NTg4IDE3Ljg3NDRDMzMuMzY4MSAyMi42OTMzIDMzLjI5MSAyOC40MDA0IDM1Ljk2NTYgMzMuMDQ0MUMzOC40OTcxIDM3LjQzOTYgNDIuNzQ0NSAzOS41MTg0IDQ3LjgxMTQgMzguNjYzOUM1My4xMDM3IDM3Ljc3MTMgNTcuNzMwNCAzNC4xNTYyIDYxLjU3NjUgMzAuNjc4NUM2Mi45OTMgMjkuMzk3NiA2NC4zMjA5IDI4LjA0NzUgNjUuNTQyIDI2LjU4NTdDNjUuNjg0MiAyNi40MTU1IDY2LjE4NDIgMjUuNTc5OCA2Ni41MDggMjUuNTIxOEM2Ni42Mjg0IDI1LjUwMDIgNjYuODA2NCAyOS4xNjQ1IDY2LjgzODUgMjkuMzY0M0M2Ny4xMjU1IDMxLjE1NDMgNjguMDI5NCAzMy4xNzA2IDcwLjE0MzEgMzMuMjMxOEM3Mi44MzMyIDMzLjMwOTcgNzUuMDgyNiAzMS4wNTkxIDc2Ljg5MjIgMjkuNDAxOEM3Ny41MDI2IDI4Ljg0MjggNzkuNDQyNSAyNi4xNjAxIDgwLjQ3NjQgMjYuMTYwMUM4MC45MDE0IDI2LjE2MDEgODEuNzI0OSAyOC4zMDM4IDgxLjkxMjcgMjguNTg4M0M4NC4zOTcyIDMyLjM1MjMgODguMDQ0NiAzMC45ODk0IDkwLjg3MzMgMjguMzUwNUM5MS4zOTM0IDI3Ljg2NTMgOTQuMTc4MSAyMy45ODM5IDk1LjMwOTEgMjQuNjgzMkM5Ni4yMjAzIDI1LjI0NjYgOTYuNjIxNyAyNi41NzY1IDk3LjA4ODYgMjcuNDYxOEM5Ny44NDg0IDI4LjkwMjkgOTguODEwNyAyOS45Mjk0IDEwMC40MTkgMzAuNDY1N0MxMDMuOTEyIDMxLjYzMSAxMDcuNjggMjguMzYzIDExMS4yMjIgMjguMzYzQzExMi4yNTUgMjguMzYzIDExMi43ODMgMjguOTMxNiAxMTMuMzMyIDI5LjcxNDhDMTE0LjA4MSAzMC43ODIzIDExNC44NTMgMzEuNTI3NiAxMTYuMjA1IDMxLjgxNzVDMTIwLjM5MyAzMi43MTU1IDEyMy44MjIgMjguNzM5OSAxMjcuODcyIDI5LjA4ODlDMTI5LjA1MyAyOS4xOTA3IDEyOS45MzUgMzAuMzgxNiAxMzAuODIxIDMxLjAxNjRDMTMyLjYwOSAzMi4yOTY5IDEzNC43NTkgMzMuMTgzNiAxMzYuOTQ4IDMzLjQ5NDdDMTQwLjQ1NyAzMy45OTM0IDE0My45NzUgMzMuMzMyNiAxNDcuMzk1IDMyLjU5MzVDMTUzLjMgMzEuMzE3NCAxNTkuMTQ3IDI5Ljc5NTggMTY1LjA2MiAyOC41NjMzIiBzdHJva2U9IiM0MjQ3NTYiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE5Ni41MTUgMTUuMDc3OEwxODQuNDkyIDAuNTUxNzk1QzE4NC4yNTcgMC4yNjc4MSAxODMuODM4IDAuMjI4MjYgMTgzLjU1NCAwLjQ2MzMwN0wxODAuNjQ5IDIuODY3ODhDMTgwLjM2NSAzLjEwMjkzIDE4MC4zMjUgMy41MjI0IDE4MC41NiAzLjgwNjM4TDE5Mi41ODMgMTguMzMyNEMxOTIuNyAxOC40NzQxIDE5Mi44NjQgMTguNTU1MSAxOTMuMDM0IDE4LjU3MTJDMTkzLjIwNCAxOC41ODcyIDE5My4zOCAxOC41MzgyIDE5My41MjIgMTguNDIwOUwxOTYuNDI3IDE2LjAxNjRDMTk2LjcxMSAxNS43ODEzIDE5Ni43NSAxNS4zNjE4IDE5Ni41MTUgMTUuMDc3OFoiIGZpbGw9IiM0MjQ3NTYiLz4KPHBhdGggZD0iTTE4MS40MzYgNi45NTcyTDE3MC44NTUgOS44MjU5M0MxNzAuNjIyIDkuODg5MDEgMTcwLjQ0MSAxMC4wNzI5IDE3MC4zODMgMTAuMzA3MUwxNjYuMTU1IDI3LjEwMTdMMTczLjk3NSAyMC42MjkxQzE3My4yNDUgMTkuMjYxMiAxNzMuNTUgMTcuNTE4OSAxNzQuNzkgMTYuNDkyMUMxNzYuMjA2IDE1LjMxOTggMTc4LjMxMiAxNS41MTkxIDE3OS40ODMgMTYuOTM0NkMxODAuNjU1IDE4LjM1MDggMTgwLjQ1NiAyMC40NTYxIDE3OS4wNDEgMjEuNjI3OEMxNzguMzMzIDIyLjIxMzkgMTc3LjQ1MiAyMi40NTc3IDE3Ni42MDMgMjIuMzc3NkMxNzUuOTY0IDIyLjMxNzQgMTc1LjM0MyAyMi4wNzQgMTc0LjgyNSAyMS42NTY4TDE2Ny4wMDUgMjguMTI4NkwxODQuMjk0IDI3LjExMzdDMTg0LjUzNCAyNy4wOTk2IDE4NC43NDkgMjYuOTU3MSAxODQuODU0IDI2Ljc0MDFMMTg5LjY1IDE2Ljg4MTRMMTgxLjQzNiA2Ljk1NzJaIiBmaWxsPSIjNDI0NzU2Ii8+Cjwvc3ZnPgo=);
  }
  .form-spinner-button.form-spinner-up:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjUgMTIuNUw3LjUgNy41TDEyLjUgNy41QzEyLjc3NiA3LjUgMTMgNy4yNzYgMTMgN0MxMyA2LjcyNCAxMi43NzYgNi41IDEyLjUgNi41TDcuNSA2LjVMNy41IDEuNUM3LjUgMS4yMjQgNy4yNzYgMSA3IDFDNi43MjQgMSA2LjUgMS4yMjQgNi41IDEuNUw2LjUgNi41TDEuNSA2LjVDMS4yMjQgNi41IDEgNi43MjQgMSA3QzEgNy4yNzYgMS4yMjQgNy41IDEuNSA3LjVMNi41IDcuNUw2LjUgMTIuNUM2LjUgMTIuNzc2IDYuNzI0IDEzIDcgMTNDNy4yNzYgMTMgNy41IDEyLjc3NiA3LjUgMTIuNVoiIGZpbGw9IiM4QTk0QUEiIHN0cm9rZT0iIzhBOTRBQSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KPC9zdmc+Cg==);
  }
  .form-spinner-button.form-spinner-down:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMiIgdmlld0JveD0iMCAwIDE0IDIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMi41IDEuNUw3LjUgMS41TDEuNSAxLjVDMS4yMjQgMS41IDEgMS4yNzYgMSAwLjk5OTk5OUMxIDAuNzIzOTk5IDEuMjI0IDAuNDk5OTk5IDEuNSAwLjQ5OTk5OUw2LjUgMC41TDEyLjUgMC41QzEyLjc3NiAwLjUgMTMgMC43MjQgMTMgMUMxMyAxLjI3NiAxMi43NzYgMS41IDEyLjUgMS41WiIgZmlsbD0iIzhBOTRBQSIgc3Ryb2tlPSIjOEE5NEFBIiBzdHJva2Utd2lkdGg9IjAuNSIvPgo8L3N2Zz4K);
  }
  .form-collapse-table:after{
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOCAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yOCAxNEMyOCA2LjI2ODAxIDIxLjczMiAtOS40OTkzNWUtMDcgMTQgLTYuMTE5NTllLTA3QzYuMjY4MDEgLTIuNzM5ODRlLTA3IC05LjQ5OTM1ZS0wNyA2LjI2ODAxIC02LjExOTU5ZS0wNyAxNEMtMi43Mzk4NGUtMDcgMjEuNzMyIDYuMjY4MDEgMjggMTQgMjhDMjEuNzMyIDI4IDI4IDIxLjczMiAyOCAxNFpNOC4wMDI0IDExLjcwMDNDNy45OTI0NCAxMS41ODEzIDguMDEzNjMgMTEuNDYxNyA4LjA2MzU5IDExLjM1NDlDOC4xMTM0NyAxMS4yNDgyIDguMTkwMDUgMTEuMTU4NSA4LjI4NDc5IDExLjA5NTlDOC4zNzk1MiAxMS4wMzMyIDguNDg4NjUgMTEgOC41OTk5OSAxMUwxOS40IDExQzE5LjUxMTMgMTEgMTkuNjIwNSAxMS4wMzMyIDE5LjcxNTIgMTEuMDk1OUMxOS44MDk5IDExLjE1ODUgMTkuODg2NSAxMS4yNDgyIDE5LjkzNjQgMTEuMzU0OUMxOS45Nzc5IDExLjQ0NDQgMTkuOTk5NiAxMS41NDI5IDIwIDExLjY0MjlDMjAgMTEuNzgyIDE5Ljk1NzkgMTEuOTE3MyAxOS44OCAxMi4wMjg2TDE0LjQ4IDE5Ljc0MjlDMTQuNDI0MSAxOS44MjI3IDE0LjM1MTYgMTkuODg3NSAxNC4yNjgzIDE5LjkzMjFDMTQuMTg1IDE5Ljk3NjggMTQuMDkzMSAyMCAxNCAyMEMxMy45MDY4IDIwIDEzLjgxNSAxOS45NzY4IDEzLjczMTcgMTkuOTMyMUMxMy42NDg0IDE5Ljg4NzUgMTMuNTc1OSAxOS44MjI3IDEzLjUyIDE5Ljc0MjlMOC4xMTk5OSAxMi4wMjg2QzguMDUzMDggMTEuOTMzIDguMDEyMzYgMTEuODE5MyA4LjAwMjQgMTEuNzAwM1oiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=);
  }
  li[data-type=control_fileupload] .qq-upload-button:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAzOSAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyLjM3NSAxMi4xODc1QzMxLjUgNS42ODc1IDI2IDAuODc1IDE5LjM3NSAwLjg3NUMxMy42ODc1IDAuODc1IDguNzUgNC40Mzc1IDYuOTM3NSA5LjgxMjVDMi44NzUgMTAuNjg3NSAwIDE0LjE4NzUgMCAxOC4zNzVDMCAyMi45Mzc1IDMuNTYyNSAyNi43NSA4LjEyNSAyNy4xMjVIMzEuODc1SDMxLjkzNzVDMzUuNzUgMjYuNzUgMzguNzUgMjMuNSAzOC43NSAxOS42MjVDMzguNzUgMTUuOTM3NSAzNiAxMi43NSAzMi4zNzUgMTIuMTg3NVpNMjYuMDYyNSAxNS42ODc1QzI1LjkzNzUgMTUuODEyNSAyNS44MTI1IDE1Ljg3NSAyNS42MjUgMTUuODc1QzI1LjQzNzUgMTUuODc1IDI1LjMxMjUgMTUuODEyNSAyNS4xODc1IDE1LjY4NzVMMjAgMTAuNVYyMi43NUMyMCAyMy4xMjUgMTkuNzUgMjMuMzc1IDE5LjM3NSAyMy4zNzVDMTkgMjMuMzc1IDE4Ljc1IDIzLjEyNSAxOC43NSAyMi43NVYxMC41TDEzLjU2MjUgMTUuNjg3NUMxMy4zMTI1IDE1LjkzNzUgMTIuOTM3NSAxNS45Mzc1IDEyLjY4NzUgMTUuNjg3NUMxMi40Mzc1IDE1LjQzNzUgMTIuNDM3NSAxNS4wNjI1IDEyLjY4NzUgMTQuODEyNUwxOC45Mzc1IDguNTYyNUMxOSA4LjUgMTkuMDYyNSA4LjQzNzUgMTkuMTI1IDguNDM3NUMxOS4yNSA4LjM3NSAxOS40Mzc1IDguMzc1IDE5LjYyNSA4LjQzNzVDMTkuNjg3NSA4LjUgMTkuNzUgOC41IDE5LjgxMjUgOC41NjI1TDI2LjA2MjUgMTQuODEyNUMyNi4zMTI1IDE1LjA2MjUgMjYuMzEyNSAxNS40Mzc1IDI2LjA2MjUgMTUuNjg3NVoiIGZpbGw9IiM0MjQ3NTYiLz4KPC9zdmc+Cg==);
  }
  .appointmentDayPickerButton {
    
  }
  .FITB:not(.formRender) .qb-datebox input:not([data-labelid]), .FITB:not(.formRender) .qb-selectbox input:not([data-labelid]),
  .FITB:not(.formRender) .qb-signaturebox input:not([data-labelid]), .FITB:not(.formRender) .qb-textbox input:not([data-labelid]),
  .FITB:not(.formRender) .qb-timebox input:not([data-labelid]), span.FITB-inptCont[data-type=datebox] label,
  span.FITB-inptCont[data-type=signaturebox] label, span.FITB-inptCont[data-type=textbox] label, span.FITB-inptCont[data-type=timebox] label,
  span.FITB-inptCont[data-type=datebox] input:focus~label, span.FITB-inptCont[data-type=datebox] input:valid~label,
  span.FITB-inptCont[data-type=signaturebox] input:focus~label, span.FITB-inptCont[data-type=signaturebox] input:valid~label,
  span.FITB-inptCont[data-type=textbox] input:focus~label, span.FITB-inptCont[data-type=textbox] input:valid~label,
  span.FITB-inptCont[data-type=timebox] input:focus~label, span.FITB-inptCont[data-type=timebox] input:valid~label {
    color: #1A1F2F;
  }

  /* NEW THEME STYLE */
  /*PREFERENCES STYLE*//*PREFERENCES STYLE*/
    .form-all {
      font-family: Verdana, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 16px;
      margin-bottom: 16px;
      padding-top: 0;
      padding-bottom: 0;
    }
  
    .form-all {
      max-width: 1000px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #2d3752;
    }
  
    .form-all {
      color: #FFFFFF;
    }
    .form-header-group .form-header {
      color: #FFFFFF;
    }
    .form-header-group .form-subHeader {
      color: #FFFFFF;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label,
    span.FITB .qb-checkbox-label,
    span.FITB .qb-radiobox-label,
    span.FITB .form-radio label,
    span.FITB .form-checkbox label,
    [data-blotid][data-type=checkbox] [data-labelid],
    [data-blotid][data-type=radiobox] [data-labelid],
    span.FITB-inptCont[data-type=checkbox] label,
    span.FITB-inptCont[data-type=radiobox] label {
      color: #FFFFFF;
    }
    .form-sub-label {
      color: #ffffff;
    }
  
  .supernova {
    background-color: rgba(255,255,255,0);
  }
  .supernova body {
    background: transparent;
  }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #838895;
    }
  
      
    .supernova {
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      background-position: center top;
    }

      .supernova, #stage {
        background-image: none;
      }
    
      .form-all {
        background-image: none;
      }
    .form-all:before { content: none; } .form-all { margin-top: 72px; }/*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-label.form-label-auto {
    display : inline-block;
    float : left;
    text-align : left;
}


    /* Injected CSS Code */
</style>

<script src="https://cdn03.jotfor.ms/static/prototype.forms.js?3.3.46215" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?3.3.46215" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms//js/punycode-1.4.1.min.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.46215" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.46215" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.46215" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.46215" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.46215"></script>
<script src="https://cdn02.jotfor.ms/js/payments/validategateways.js?v=3.3.46215" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/s/umd/6eb0b9cf4bd/for-form-branding-footer.js?v=3.3.46215" type="text/javascript" defer></script>



<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.texts = {"confirmEmail":"E-mail does not match","pleaseWait":"Please wait...","validateEmail":"You need to validate this e-mail","confirmClearForm":"Are you sure you want to clear the form","lessThan":"Your score should be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","required":"This field is required.","requireOne":"At least one field required.","requireEveryRow":"Every row is required.","requireEveryCell":"Every cell is required.","email":"Enter a valid e-mail address","alphabetic":"This field can only contain letters","numeric":"This field can only contain numeric values","alphanumeric":"This field can only contain letters and numbers.","cyrillic":"This field can only contain cyrillic characters","url":"This field can only contain a valid URL","currency":"This field can only contain currency values.","fillMask":"Field value must fill mask.","uploadExtensions":"You can only upload following files:","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","gradingScoreError":"Score total should only be less than or equal to","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","maxDigitsError":"The maximum digits allowed is","minCharactersError":"The number of characters should not be less than the minimum value:","freeEmailError":"Free email accounts are not allowed","minSelectionsError":"The minimum required number of selections is ","maxSelectionsError":"The maximum number of selections allowed is ","pastDatesDisallowed":"Date must not be in the past.","dateLimited":"This date is unavailable.","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","ageVerificationError":"You must be older than {minAge} years old to submit this form.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","chooseAFile_infoMessage":"Choose a file","maxFileSize_infoMessage":"Max. file size","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","ccInvalidNumber":"Credit Card Number is invalid.","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidExpireMonth":"Expiration month is invalid.","ccInvalidExpireYear":"Expiration year is invalid.","ccMissingDetails":"Please fill up the credit card details.","ccMissingProduct":"Please select at least one product.","ccMissingDonation":"Please enter numeric values for donation amount.","disallowDecimals":"Please enter a whole number.","restrictedDomain":"This domain is not allowed","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","requiredLegend":"All fields marked with * are required and must be filled.","geoPermissionTitle":"Permission Denied","geoPermissionDesc":"Check your browser's privacy settings.","geoNotAvailableTitle":"Position Unavailable","geoNotAvailableDesc":"Location provider not available. Please enter the address manually.","geoTimeoutTitle":"Timeout","geoTimeoutDesc":"Please check your internet connection and try again.","appointmentSelected":"You’ve selected {time} on {date}","noSlotsAvailable":"No slots available","slotUnavailable":"{time} on {date} has been selected is unavailable. Please select another slot.","multipleError":"There are {count} errors on this page. Please correct them before moving on.","oneError":"There is {count} error on this page. Please correct it before moving on.","doneMessage":"Well done! All errors are fixed.","doneButton":"Done","reviewSubmitText":"Review and Submit","nextButtonText":"Next","prevButtonText":"Previous","seeErrorsButton":"See Errors","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","soldOut":"Sold Out","justSoldOut":"Just Sold Out","selectionSoldOut":"Selection Sold Out","subProductItemsLeft":"({count} items left)","startButtonText":"START","submitButtonText":"Submit"};
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":[{"id":"action_1671532872264","visibility":"Show","isError":false,"field":"23"}],"id":"1671533029534","index":"0","link":"Any","priority":"0","terms":[{"id":"term_1671532872264","field":"21","operator":"equals","value":"Other","isError":false}],"type":"field"}]);	JotForm.submitError="jumpToFirstError";
	
	JotForm.init(function(){
	/*INIT-START*/
      JotForm.setPhoneMaskingValidator( 'input_13_full', '\u0028\u0023\u0023\u0023\u0029 \u0023\u0023\u0023\u002d\u0023\u0023\u0023\u0023' );
if (window.JotForm && JotForm.accessible) $('input_19').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_22').setAttribute('tabindex',0);
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,{"name":"_nbsp_","qid":"9","text":"Apply","type":"control_button"},{"name":"clickTo","qid":"10","text":"JOB APPLICATION","type":"control_head"},{"name":"fullName","qid":"11","text":"Full Name","type":"control_fullname"},{"name":"emailAddress","qid":"12","subLabel":"example@example.com","text":"Email Address","type":"control_email"},{"name":"phoneNumber13","qid":"13","text":"Phone Number","type":"control_phone"},{"name":"positionApplied","qid":"14","text":"Position Applied","type":"control_dropdown"},null,{"name":"currentAddress","qid":"16","text":"Current Address","type":"control_address"},{"name":"uploadYour","qid":"17","subLabel":"Upload FRONT image of ID (DRIVER'S LICENSE ONLY) -NOTE: OUR SYSTEM IS PROGRAMMED TO AUTO DELETE THE IMAGES OF YOUR ID AFTER 24 HOURS. SIMPLY MEANS, YOUR PRIVACY IS NOT AT RISK.","text":"Identity Verification","type":"control_fileupload"},{"name":"birthDate","qid":"18","text":"Date of Birth","type":"control_birthdate"},{"name":"linkedin","qid":"19","text":"LinkedIn","type":"control_textbox"},null,{"name":"howDid21","qid":"21","text":"Job Type","type":"control_dropdown"},{"name":"coverLetter","qid":"22","text":"Cover Letter (if any)","type":"control_textarea"},null,{"description":"","name":"howDid","qid":"24","text":"How did you hear about us?","type":"control_radio"},{"description":"","name":"identityVerification","qid":"25","subLabel":"Upload BACK image of ID (DRIVER'S LICENSE ONLY) -NOTE: OUR SYSTEM IS PROGRAMMED TO AUTO DELETE THE IMAGES OF YOUR ID AFTER 24 HOURS. SIMPLY MEANS, YOUR PRIVACY IS NOT AT RISK.","text":"Identity Verification","type":"control_fileupload"},{"description":"","name":"socialSecurity","qid":"26","subLabel":"","text":"Social Security Number (SSN)","type":"control_number"},{"name":"backgroundCheck","qid":"27","text":"Background Check \u002F Identity Verification","type":"control_head"}]);}, 20); 
</script>






</head>















<body><div class="navigation-wrapper"><div data-w-id="abd70e3e-7bdc-c70f-0e26-66396fbde1b1" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-main w-nav"><div class="c-base c-base--nav"><div class="nav__items"><a href="index.html" class="nav__logo-wrapper w-nav-brand"><img src="../assets-global.website-files.com/5ffc74fef1579006dc588807/63f732c3808191d357bf36e0_Oyster_NewLogo%201.svg" loading="lazy" alt="This is an image of the Oyster HR company logo. " class="nav__logo-img"/></a><nav role="navigation" class="nav__menu-wrapper w-nav-menu"><div class="nav__menu-content"><ul role="list" class="nav__menu-list"><li class="nav__menu-li"><div data-hover="false" data-delay="0" class="nav__dropdown w-dropdown"><div class="nav__dropdown-toggle w-dropdown-toggle"><div class="nav__link-wrapper"><div class="nav__dropdown-text">Product</div><img src="../assets-global.website-files.com/5ffc74fef1579006dc588807/63f742250135b43344e1411f_chevron%20down.svg" loading="lazy" alt="This is an image of an arrow pointing downwards." class="nav__dropdown-icon"/></div></div><nav class="nav__dropdown-list-wrap w-dropdown-list"><div class="nav__dropdown-list-contents"><div id="w-node-abd70e3e-7bdc-c70f-0e26-66396fbde1c2-6fbde1b1" class="nav__dropdown-list-col"><div class="nav__dropdown-list-header"><div class="nav__dropdown-list-heading">Solutions</div></div><ul role="list" class="nav__dropdown-list"><li class="nav__dropdown-li"><a href="how-it-works.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.15 1.36001C18.7679 0.970572 18.2835 0.697227 17.7526 0.571584C17.2217 0.445941 16.6661 0.473131 16.15 0.65001L1.99999 5.38001C1.4293 5.56681 0.930677 5.92616 0.572941 6.40845C0.215206 6.89073 0.0160042 7.47218 0.00283413 8.07251C-0.0103359 8.67285 0.163175 9.26247 0.499416 9.75998C0.835656 10.2575 1.31804 10.6384 1.87999 10.85L7.11999 12.85C7.23931 12.8956 7.34795 12.9654 7.43913 13.0548C7.53032 13.1443 7.6021 13.2516 7.64999 13.37L9.64999 18.62C9.85357 19.174 10.223 19.6518 10.708 19.9882C11.1929 20.3246 11.7698 20.5033 12.36 20.5H12.43C13.031 20.4891 13.6135 20.2903 14.0959 19.9317C14.5783 19.573 14.9364 19.0724 15.12 18.5L19.85 4.33001C20.022 3.81895 20.0476 3.26995 19.9239 2.7451C19.8002 2.22024 19.5321 1.74046 19.15 1.36001ZM18 3.70001L13.22 17.88C13.1645 18.0595 13.053 18.2165 12.9019 18.328C12.7507 18.4396 12.5678 18.4999 12.38 18.5C12.1932 18.5031 12.01 18.4492 11.8546 18.3456C11.6992 18.242 11.579 18.0936 11.51 17.92L9.50999 12.67C9.36499 12.2885 9.14138 11.9418 8.85367 11.6524C8.56596 11.363 8.22059 11.1373 7.83999 10.99L2.58999 8.99001C2.41288 8.92511 2.26064 8.80621 2.15477 8.6501C2.0489 8.49399 1.99476 8.30856 1.99999 8.12001C2.00014 7.93215 2.0604 7.74928 2.17196 7.59813C2.28352 7.44699 2.44052 7.33551 2.61999 7.28001L16.8 2.55001C16.9628 2.48366 17.1413 2.46588 17.314 2.49883C17.4867 2.53179 17.6462 2.61406 17.7731 2.7357C17.9 2.85734 17.989 3.01314 18.0293 3.18427C18.0695 3.3554 18.0594 3.53453 18 3.70001Z" fill="currentColor"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">How Oyster Works </div><p class="nav__dropdown-subcopy">New to Oyster? Start here</p></div></a></li><li class="nav__dropdown-li"><a href="how-it-works/global-employment.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2692_112421)">
<path d="M19.41 7.14C19.41 7.14 19.41 7.14 19.41 7.09C18.7054 5.16623 17.4269 3.50529 15.7475 2.33187C14.0681 1.15845 12.0688 0.529175 10.02 0.529175C7.97126 0.529175 5.97195 1.15845 4.29252 2.33187C2.6131 3.50529 1.33461 5.16623 0.630012 7.09C0.630012 7.09 0.630012 7.09 0.630012 7.14C-0.156863 9.3109 -0.156863 11.6891 0.630012 13.86C0.630012 13.86 0.630012 13.86 0.630012 13.91C1.33461 15.8338 2.6131 17.4947 4.29252 18.6681C5.97195 19.8416 7.97126 20.4708 10.02 20.4708C12.0688 20.4708 14.0681 19.8416 15.7475 18.6681C17.4269 17.4947 18.7054 15.8338 19.41 13.91C19.41 13.91 19.41 13.91 19.41 13.86C20.1969 11.6891 20.1969 9.3109 19.41 7.14ZM2.26001 12.5C1.91324 11.1892 1.91324 9.81079 2.26001 8.5H4.12001C3.96004 9.82854 3.96004 11.1715 4.12001 12.5H2.26001ZM3.08001 14.5H4.48001C4.71473 15.3918 5.05022 16.2541 5.48001 17.07C4.49931 16.4019 3.67951 15.5241 3.08001 14.5ZM4.48001 6.5H3.08001C3.67088 5.47909 4.4802 4.60147 5.45001 3.93C5.03057 4.74725 4.70515 5.60942 4.48001 6.5ZM9.00001 18.2C7.77178 17.2987 6.90916 15.9852 6.57001 14.5H9.00001V18.2ZM9.00001 12.5H6.14001C5.9534 11.1732 5.9534 9.82681 6.14001 8.5H9.00001V12.5ZM9.00001 6.5H6.57001C6.90916 5.01477 7.77178 3.70132 9.00001 2.8V6.5ZM16.92 6.5H15.52C15.2853 5.60816 14.9498 4.74594 14.52 3.93C15.5007 4.59807 16.3205 5.47594 16.92 6.5ZM11 2.8C12.2282 3.70132 13.0909 5.01477 13.43 6.5H11V2.8ZM11 18.2V14.5H13.43C13.0909 15.9852 12.2282 17.2987 11 18.2ZM13.86 12.5H11V8.5H13.86C14.0466 9.82681 14.0466 11.1732 13.86 12.5ZM14.55 17.07C14.9798 16.2541 15.3153 15.3918 15.55 14.5H16.95C16.3505 15.5241 15.5307 16.4019 14.55 17.07ZM17.74 12.5H15.88C15.9613 11.8365 16.0014 11.1685 16 10.5C16.0011 9.83151 15.961 9.16357 15.88 8.5H17.74C18.0868 9.81079 18.0868 11.1892 17.74 12.5Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2692_112421">
<rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Global Employment</div><p class="nav__dropdown-subcopy">Hire full-timers compliantly</p></div></a></li><li class="nav__dropdown-li"><a href="how-it-works/global-contractor.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.9615 8.12825C16.8319 6.77008 16.3772 5.46307 15.636 4.31767C14.8947 3.17227 13.8886 2.22214 12.7027 1.54757C11.5168 0.872996 10.1859 0.493803 8.82252 0.442035C7.45916 0.390266 6.10337 0.667443 4.86972 1.25014C3.63607 1.83284 2.56081 2.70394 1.73481 3.78983C0.908808 4.87571 0.356333 6.14448 0.124073 7.48891C-0.108188 8.83333 -0.0134082 10.2139 0.400402 11.514C0.814212 12.8141 1.53489 13.9954 2.50154 14.9582L7.80154 20.2682C7.89451 20.362 8.00511 20.4364 8.12697 20.4871C8.24883 20.5379 8.37953 20.564 8.51154 20.564C8.64355 20.564 8.77426 20.5379 8.89612 20.4871C9.01798 20.4364 9.12858 20.362 9.22154 20.2682L14.5015 14.9582C15.3927 14.0737 16.0759 13.0019 16.5014 11.8205C16.9269 10.6392 17.0841 9.3779 16.9615 8.12825ZM13.1015 13.5482L8.50154 18.1482L3.90154 13.5482C3.22363 12.8703 2.70434 12.0506 2.38101 11.148C2.05768 10.2454 1.93833 9.28244 2.03154 8.32825C2.12536 7.35935 2.43331 6.42341 2.93311 5.58809C3.43292 4.75277 4.1121 4.03895 4.92154 3.49825C5.98249 2.79348 7.22785 2.41754 8.50154 2.41754C9.77524 2.41754 11.0206 2.79348 12.0815 3.49825C12.8885 4.03686 13.5662 4.74753 14.0659 5.57918C14.5656 6.41084 14.8749 7.34285 14.9715 8.30825C15.0678 9.26567 14.9499 10.2325 14.6265 11.1388C14.3031 12.0451 13.7822 12.8681 13.1015 13.5482ZM10.2915 4.74825C10.1986 4.65452 10.088 4.58012 9.96612 4.52935C9.84426 4.47859 9.71355 4.45245 9.58154 4.45245C9.44953 4.45245 9.31882 4.47859 9.19697 4.52935C9.07511 4.58012 8.96451 4.65452 8.87154 4.74825L5.29154 8.32825C5.1068 8.51451 5.00265 8.76591 5.00154 9.02825V11.4982C5.00154 11.7635 5.1069 12.0178 5.29444 12.2054C5.48197 12.3929 5.73633 12.4982 6.00154 12.4982H8.42154C8.55315 12.499 8.68361 12.4738 8.80545 12.424C8.92729 12.3743 9.0381 12.3009 9.13154 12.2082L12.7115 8.62825C12.8978 8.44088 13.0023 8.18743 13.0023 7.92325C13.0023 7.65906 12.8978 7.40561 12.7115 7.21825L10.2915 4.74825ZM8.01154 10.4982H7.01154V9.49825L9.59154 6.91825L10.5915 7.91825L8.01154 10.4982Z" fill="currentColor"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Global Contractors</div><p class="nav__dropdown-subcopy">Hire contractors instantly</p></div></a></li><li class="nav__dropdown-li"><a href="contractor-to-employee.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 5.73928C20.0008 5.60768 19.9756 5.47722 19.9258 5.35538C19.876 5.23354 19.8027 5.12272 19.71 5.02928L15.47 0.789284C15.3766 0.696603 15.2658 0.623278 15.1439 0.573513C15.0221 0.523748 14.8916 0.498523 14.76 0.499284C14.6284 0.498523 14.4979 0.523748 14.3761 0.573513C14.2543 0.623278 14.1435 0.696603 14.05 0.789284L11.22 3.61928L0.290017 14.5493C0.197335 14.6427 0.12401 14.7535 0.0742455 14.8754C0.0244809 14.9972 -0.000744179 15.1277 1.67143e-05 15.2593V19.4993C1.67143e-05 19.7645 0.105374 20.0189 0.29291 20.2064C0.480446 20.3939 0.7348 20.4993 1.00002 20.4993H5.24002C5.37994 20.5069 5.51991 20.485 5.65084 20.4351C5.78176 20.3851 5.90073 20.3082 6.00002 20.2093L16.87 9.27928L19.71 6.49928C19.8013 6.40237 19.8757 6.29082 19.93 6.16928C19.9397 6.08957 19.9397 6.00899 19.93 5.92928C19.9347 5.88273 19.9347 5.83583 19.93 5.78928L20 5.73928ZM4.83002 18.4993H2.00002V15.6693L11.93 5.73928L14.76 8.56928L4.83002 18.4993ZM16.17 7.15928L13.34 4.32928L14.76 2.91928L17.58 5.73928L16.17 7.15928Z" fill="currentColor"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Contractor Conversion</div><p class="nav__dropdown-subcopy">Transition folks to full time</p></div></a></li><li class="nav__dropdown-li"><a href="how-it-works/global-payroll.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.71 16.79C10.6608 16.7448 10.6072 16.7046 10.55 16.67C10.4989 16.6304 10.4414 16.6 10.38 16.58C10.3205 16.5496 10.2562 16.5293 10.19 16.52C9.99842 16.4795 9.79895 16.5005 9.62 16.58C9.4959 16.6249 9.3832 16.6966 9.28989 16.7899C9.19657 16.8832 9.12491 16.9959 9.08 17.12C9.02402 17.2387 8.99662 17.3688 9 17.5C8.99841 17.63 9.02218 17.7591 9.07 17.88C9.12798 17.9995 9.202 18.1105 9.29 18.21C9.38344 18.3027 9.49426 18.376 9.61609 18.4258C9.73793 18.4755 9.86839 18.5008 10 18.5C10.1312 18.5034 10.2613 18.476 10.38 18.42C10.5012 18.3694 10.6128 18.2983 10.71 18.21C10.8027 18.1166 10.876 18.0057 10.9258 17.8839C10.9755 17.7621 11.0008 17.6316 11 17.5C10.9984 17.3693 10.9712 17.2402 10.92 17.12C10.8724 16.9972 10.801 16.8851 10.71 16.79ZM6.55 12.67C6.49895 12.6304 6.44143 12.6 6.38 12.58C6.32176 12.5426 6.25747 12.5155 6.19 12.5C6.06172 12.4701 5.92828 12.4701 5.8 12.5L5.62 12.56L5.44 12.65L5.29 12.77C5.10253 12.9667 4.99858 13.2283 5 13.5C4.99924 13.6316 5.02446 13.7621 5.07423 13.8839C5.12399 14.0057 5.19732 14.1166 5.29 14.21C5.3872 14.2983 5.49882 14.3694 5.62 14.42C5.7715 14.4822 5.93597 14.5063 6.09895 14.4901C6.26193 14.4739 6.41843 14.4179 6.55471 14.3271C6.69099 14.2362 6.80287 14.1133 6.88051 13.9691C6.95815 13.8249 6.99918 13.6638 7 13.5C6.99632 13.2352 6.89273 12.9816 6.71 12.79L6.55 12.67ZM6.71 16.79C6.6149 16.699 6.50275 16.6276 6.38 16.58C6.19898 16.4961 5.99698 16.4682 5.8 16.5L5.62 16.56C5.55628 16.5819 5.49575 16.6122 5.44 16.65C5.38761 16.6869 5.33752 16.727 5.29 16.77C5.19896 16.8651 5.12759 16.9772 5.08 17.1C5.02709 17.2197 4.99977 17.3491 4.99977 17.48C4.99977 17.6109 5.02709 17.7403 5.08 17.86C5.13064 17.9812 5.20167 18.0928 5.29 18.19C5.38178 18.2863 5.49185 18.3633 5.61376 18.4165C5.73567 18.4698 5.86698 18.4981 6 18.5C6.13118 18.5034 6.26132 18.476 6.38 18.42C6.50118 18.3694 6.6128 18.2983 6.71 18.21C6.79833 18.1128 6.86936 18.0012 6.92 17.88C6.97291 17.7603 7.00023 17.6309 7.00023 17.5C7.00023 17.3691 6.97291 17.2397 6.92 17.12C6.87241 16.9972 6.80104 16.8851 6.71 16.79ZM9.62 12.58C9.49725 12.6276 9.3851 12.699 9.29 12.79C9.10727 12.9816 9.00368 13.2352 9 13.5C9.00082 13.6638 9.04185 13.8249 9.11949 13.9691C9.19713 14.1133 9.30901 14.2362 9.44529 14.3271C9.58156 14.4179 9.73807 14.4739 9.90105 14.4901C10.064 14.5063 10.2285 14.4822 10.38 14.42C10.5012 14.3694 10.6128 14.2983 10.71 14.21C10.8027 14.1166 10.876 14.0057 10.9258 13.8839C10.9755 13.7621 11.0008 13.6316 11 13.5C10.9963 13.2352 10.8927 12.9816 10.71 12.79C10.5694 12.6512 10.3908 12.5572 10.1968 12.5199C10.0028 12.4825 9.80211 12.5034 9.62 12.58ZM14.71 16.79C14.6128 16.7017 14.5012 16.6306 14.38 16.58C14.1979 16.5034 13.9972 16.4825 13.8032 16.5199C13.6092 16.5572 13.4306 16.6512 13.29 16.79C13.199 16.8851 13.1276 16.9972 13.08 17.12C13.0271 17.2397 12.9998 17.3691 12.9998 17.5C12.9998 17.6309 13.0271 17.7603 13.08 17.88C13.1306 18.0012 13.2017 18.1128 13.29 18.21C13.3834 18.3027 13.4943 18.376 13.6161 18.4258C13.7379 18.4755 13.8684 18.5008 14 18.5C14.1312 18.5034 14.2613 18.476 14.38 18.42C14.5012 18.3694 14.6128 18.2983 14.71 18.21C14.8488 18.0694 14.9428 17.8908 14.9801 17.6968C15.0175 17.5028 14.9966 17.3021 14.92 17.12C14.8724 16.9972 14.801 16.8851 14.71 16.79ZM14 4.5H6C5.73478 4.5 5.48043 4.60536 5.29289 4.79289C5.10536 4.98043 5 5.23478 5 5.5V9.5C5 9.76522 5.10536 10.0196 5.29289 10.2071C5.48043 10.3946 5.73478 10.5 6 10.5H14C14.2652 10.5 14.5196 10.3946 14.7071 10.2071C14.8946 10.0196 15 9.76522 15 9.5V5.5C15 5.23478 14.8946 4.98043 14.7071 4.79289C14.5196 4.60536 14.2652 4.5 14 4.5ZM13 8.5H7V6.5H13V8.5ZM16 0.5H4C3.20435 0.5 2.44129 0.81607 1.87868 1.37868C1.31607 1.94129 1 2.70435 1 3.5V19.5C1 20.2956 1.31607 21.0587 1.87868 21.6213C2.44129 22.1839 3.20435 22.5 4 22.5H16C16.7956 22.5 17.5587 22.1839 18.1213 21.6213C18.6839 21.0587 19 20.2956 19 19.5V3.5C19 2.70435 18.6839 1.94129 18.1213 1.37868C17.5587 0.81607 16.7956 0.5 16 0.5ZM17 19.5C17 19.7652 16.8946 20.0196 16.7071 20.2071C16.5196 20.3946 16.2652 20.5 16 20.5H4C3.73478 20.5 3.48043 20.3946 3.29289 20.2071C3.10536 20.0196 3 19.7652 3 19.5V3.5C3 3.23478 3.10536 2.98043 3.29289 2.79289C3.48043 2.60536 3.73478 2.5 4 2.5H16C16.2652 2.5 16.5196 2.60536 16.7071 2.79289C16.8946 2.98043 17 3.23478 17 3.5V19.5ZM14.55 12.67C14.4989 12.6304 14.4414 12.6 14.38 12.58C14.3205 12.5496 14.2562 12.5293 14.19 12.52C14.0617 12.4901 13.9283 12.4901 13.8 12.52L13.62 12.58L13.44 12.67L13.29 12.79C13.1073 12.9816 13.0037 13.2352 13 13.5C13.0008 13.6638 13.0418 13.8249 13.1195 13.9691C13.1971 14.1133 13.309 14.2362 13.4453 14.3271C13.5816 14.4179 13.7381 14.4739 13.9011 14.4901C14.064 14.5063 14.2285 14.4822 14.38 14.42C14.5012 14.3694 14.6128 14.2983 14.71 14.21C14.8027 14.1166 14.876 14.0057 14.9258 13.8839C14.9755 13.7621 15.0008 13.6316 15 13.5C14.9963 13.2352 14.8927 12.9816 14.71 12.79L14.55 12.67Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Global Payroll</div><p class="nav__dropdown-subcopy">Pay teams in 120+ currencies</p></div></a></li><li class="nav__dropdown-li"><a href="total-rewards.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2692_112441)">
<path d="M12.36 12.73C11.6915 13.269 10.8587 13.5629 10 13.5629C9.14131 13.5629 8.30849 13.269 7.64 12.73C7.43579 12.5603 7.17251 12.4786 6.90808 12.503C6.64365 12.5274 6.39974 12.6558 6.23 12.86C6.06027 13.0642 5.9786 13.3275 6.00298 13.5919C6.02736 13.8563 6.15579 14.1003 6.36 14.27C7.38134 15.1226 8.66957 15.5896 10 15.5896C11.3304 15.5896 12.6187 15.1226 13.64 14.27C13.8442 14.1003 13.9726 13.8563 13.997 13.5919C14.0214 13.3275 13.9397 13.0642 13.77 12.86C13.686 12.7589 13.5828 12.6753 13.4665 12.6141C13.3501 12.5528 13.2229 12.5151 13.0919 12.503C12.8275 12.4786 12.5642 12.5603 12.36 12.73ZM7 9.5C7.19779 9.5 7.39113 9.44135 7.55557 9.33147C7.72002 9.22159 7.8482 9.06541 7.92388 8.88268C7.99957 8.69996 8.01937 8.49889 7.98079 8.30491C7.9422 8.11093 7.84696 7.93275 7.70711 7.79289C7.56726 7.65304 7.38908 7.5578 7.19509 7.51921C7.00111 7.48063 6.80005 7.50043 6.61732 7.57612C6.43459 7.65181 6.27842 7.77998 6.16853 7.94443C6.05865 8.10888 6 8.30222 6 8.5C6 8.76522 6.10536 9.01957 6.2929 9.20711C6.48043 9.39464 6.73479 9.5 7 9.5ZM13 7.5C12.8022 7.5 12.6089 7.55865 12.4444 7.66853C12.28 7.77841 12.1518 7.93459 12.0761 8.11732C12.0004 8.30004 11.9806 8.50111 12.0192 8.69509C12.0578 8.88907 12.153 9.06725 12.2929 9.20711C12.4328 9.34696 12.6109 9.4422 12.8049 9.48079C12.9989 9.51937 13.2 9.49957 13.3827 9.42388C13.5654 9.34819 13.7216 9.22002 13.8315 9.05557C13.9414 8.89112 14 8.69778 14 8.5C14 8.23478 13.8946 7.98043 13.7071 7.79289C13.5196 7.60536 13.2652 7.5 13 7.5ZM10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67317C0.00433284 8.50043 -0.193701 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3079C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67317C18.7363 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 18.5C8.41775 18.5 6.87104 18.0308 5.55544 17.1518C4.23985 16.2727 3.21447 15.0233 2.60897 13.5615C2.00347 12.0997 1.84504 10.4911 2.15372 8.93928C2.4624 7.38743 3.22433 5.96197 4.34315 4.84315C5.46197 3.72433 6.88743 2.9624 8.43928 2.65372C9.99113 2.34504 11.5997 2.50346 13.0615 3.10896C14.5233 3.71447 15.7727 4.73984 16.6518 6.05544C17.5308 7.37103 18 8.91775 18 10.5C18 12.6217 17.1572 14.6566 15.6569 16.1569C14.1566 17.6571 12.1217 18.5 10 18.5Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2692_112441">
<rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Total Rewards</div><p class="nav__dropdown-subcopy">Offer total compensation and benefits</p></div></a></li></ul></div><div id="w-node-abd70e3e-7bdc-c70f-0e26-66396fbde1fd-6fbde1b1" class="nav__dropdown-list-col"><div class="nav__dropdown-list-header"><div class="nav__dropdown-list-heading">Why Oyster</div></div><ul role="list" class="nav__dropdown-list"><li class="nav__dropdown-li"><a href="direct-plus.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.9999 8.58419H10.8572V7.44151C10.8572 7.13845 10.7368 6.84781 10.5225 6.63351C10.3082 6.41922 10.0176 6.29883 9.71454 6.29883C9.41148 6.29883 9.12083 6.41922 8.90654 6.63351C8.69225 6.84781 8.57186 7.13845 8.57186 7.44151V8.58419H7.42918C7.12612 8.58419 6.83547 8.70458 6.62118 8.91887C6.40689 9.13316 6.2865 9.42381 6.2865 9.72687C6.2865 10.0299 6.40689 10.3206 6.62118 10.5349C6.83547 10.7492 7.12612 10.8695 7.42918 10.8695H8.57186V12.0122C8.57186 12.3153 8.69225 12.6059 8.90654 12.8202C9.12083 13.0345 9.41148 13.1549 9.71454 13.1549C10.0176 13.1549 10.3082 13.0345 10.5225 12.8202C10.7368 12.6059 10.8572 12.3153 10.8572 12.0122V10.8695H11.9999C12.303 10.8695 12.5936 10.7492 12.8079 10.5349C13.0222 10.3206 13.1426 10.0299 13.1426 9.72687C13.1426 9.42381 13.0222 9.13316 12.8079 8.91887C12.5936 8.70458 12.303 8.58419 11.9999 8.58419ZM19.3816 8.78987C19.2335 7.23792 18.7139 5.74443 17.8669 4.4356C17.0198 3.12678 15.8702 2.04109 14.5151 1.27027C13.16 0.499445 11.6392 0.06615 10.0813 0.0069953C8.52343 -0.0521594 6.9742 0.264565 5.56453 0.930403C4.15486 1.59624 2.92619 2.59163 1.98233 3.83245C1.03848 5.07327 0.407174 6.52306 0.141775 8.05931C-0.123624 9.59556 -0.0153212 11.1731 0.457531 12.6587C0.930383 14.1443 1.75389 15.4942 2.85846 16.5944L8.91466 22.662C9.02089 22.7691 9.14727 22.8541 9.28652 22.9121C9.42576 22.9701 9.57512 23 9.72596 23C9.87681 23 10.0262 22.9701 10.1654 22.9121C10.3047 22.8541 10.431 22.7691 10.5373 22.662L16.5706 16.5944C17.589 15.5836 18.3696 14.3589 18.8558 13.009C19.342 11.659 19.5216 10.2178 19.3816 8.78987ZM14.9709 14.9832L9.71454 20.2395L4.45821 14.9832C3.68358 14.2085 3.0902 13.2718 2.72073 12.2405C2.35126 11.2091 2.21489 10.1087 2.3214 9.01841C2.42861 7.91127 2.78049 6.84178 3.35161 5.88728C3.92273 4.93278 4.69881 4.11712 5.62374 3.49926C6.83606 2.69395 8.25911 2.26437 9.71454 2.26437C11.17 2.26437 12.593 2.69395 13.8053 3.49926C14.7275 4.11473 15.5018 4.92679 16.0728 5.87711C16.6438 6.82743 16.9972 7.89241 17.1077 8.99555C17.2177 10.0896 17.083 11.1944 16.7134 12.23C16.3439 13.2655 15.7486 14.206 14.9709 14.9832Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Direct+ Infrastructure</div><p class="nav__dropdown-subcopy">Access global insights and coverage</p></div></a></li><li class="nav__dropdown-li"><a href="legal.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2890_154100)">
<path d="M17.63 2.15006C17.5138 2.05609 17.3781 1.98934 17.2327 1.95473C17.0873 1.92012 16.9361 1.91852 16.79 1.95006C15.7214 2.17401 14.6183 2.17686 13.5486 1.95845C12.4789 1.74003 11.4653 1.30498 10.57 0.680064C10.4026 0.563937 10.2037 0.501709 10 0.501709C9.79627 0.501709 9.5974 0.563937 9.43001 0.680064C8.53476 1.30498 7.52108 1.74003 6.45137 1.95845C5.38166 2.17686 4.27857 2.17401 3.21001 1.95006C3.06394 1.91852 2.91267 1.92012 2.76731 1.95473C2.62194 1.98934 2.48618 2.05609 2.37001 2.15006C2.25399 2.24418 2.16053 2.3631 2.0965 2.49808C2.03247 2.63306 1.9995 2.78067 2.00001 2.93006V10.3801C1.99912 11.8138 2.34078 13.227 2.99654 14.502C3.6523 15.777 4.60319 16.8769 5.77001 17.7101L9.42001 20.3101C9.58937 20.4306 9.7921 20.4954 10 20.4954C10.2079 20.4954 10.4106 20.4306 10.58 20.3101L14.23 17.7101C15.3968 16.8769 16.3477 15.777 17.0035 14.502C17.6592 13.227 18.0009 11.8138 18 10.3801V2.93006C18.0005 2.78067 17.9675 2.63306 17.9035 2.49808C17.8395 2.3631 17.746 2.24418 17.63 2.15006ZM16 10.3801C16.0008 11.4948 15.7353 12.5936 15.2257 13.5851C14.716 14.5765 13.977 15.4319 13.07 16.0801L10 18.2701L6.93001 16.0801C6.02304 15.4319 5.28399 14.5765 4.77435 13.5851C4.26472 12.5936 3.99924 11.4948 4.00001 10.3801V4.08006C6.09643 4.2595 8.19605 3.77309 10 2.69006C11.804 3.77309 13.9036 4.2595 16 4.08006V10.3801ZM11.54 8.09006L8.85001 10.7901L7.96001 9.89006C7.7717 9.70176 7.51631 9.59597 7.25001 9.59597C6.9837 9.59597 6.72831 9.70176 6.54001 9.89006C6.3517 10.0784 6.24591 10.3338 6.24591 10.6001C6.24591 10.8664 6.3517 11.1218 6.54001 11.3101L8.14001 12.9101C8.23297 13.0038 8.34357 13.0782 8.46543 13.129C8.58729 13.1797 8.71799 13.2059 8.85001 13.2059C8.98202 13.2059 9.11272 13.1797 9.23458 13.129C9.35644 13.0782 9.46704 13.0038 9.56001 12.9101L13 9.50006C13.1883 9.31176 13.2941 9.05637 13.2941 8.79006C13.2941 8.52376 13.1883 8.26837 13 8.08006C12.8117 7.89176 12.5563 7.78597 12.29 7.78597C12.0237 7.78597 11.7683 7.89176 11.58 8.08006L11.54 8.09006Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_2890_154100">
<rect width="16" height="20" fill="white" transform="translate(2 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Global Compliance</div><p class="nav__dropdown-subcopy">Hire globally with confidence</p></div></a></li><li class="nav__dropdown-li"><a href="global-talent-hiring.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.3 8.72C11.8336 8.25813 12.2616 7.68688 12.5549 7.04502C12.8482 6.40316 13 5.70571 13 5C13 3.67392 12.4732 2.40215 11.5355 1.46447C10.5979 0.526784 9.32608 1.78911e-07 8 1.78911e-07C6.67392 1.78911e-07 5.40215 0.526784 4.46447 1.46447C3.52678 2.40215 3 3.67392 3 5C2.99999 5.70571 3.1518 6.40316 3.44513 7.04502C3.73845 7.68688 4.16642 8.25813 4.7 8.72C3.30014 9.35388 2.11247 10.3775 1.27898 11.6685C0.445495 12.9596 0.00147185 14.4633 0 16C0 16.2652 0.105357 16.5196 0.292893 16.7071C0.48043 16.8946 0.734784 17 1 17C1.26522 17 1.51957 16.8946 1.70711 16.7071C1.89464 16.5196 2 16.2652 2 16C2 14.4087 2.63214 12.8826 3.75736 11.7574C4.88258 10.6321 6.4087 10 8 10C9.5913 10 11.1174 10.6321 12.2426 11.7574C13.3679 12.8826 14 14.4087 14 16C14 16.2652 14.1054 16.5196 14.2929 16.7071C14.4804 16.8946 14.7348 17 15 17C15.2652 17 15.5196 16.8946 15.7071 16.7071C15.8946 16.5196 16 16.2652 16 16C15.9985 14.4633 15.5545 12.9596 14.721 11.6685C13.8875 10.3775 12.6999 9.35388 11.3 8.72ZM8 8C7.40666 8 6.82664 7.82405 6.33329 7.49441C5.83994 7.16476 5.45542 6.69623 5.22836 6.14805C5.0013 5.59987 4.94189 4.99667 5.05764 4.41473C5.1734 3.83279 5.45912 3.29824 5.87868 2.87868C6.29824 2.45912 6.83279 2.1734 7.41473 2.05764C7.99667 1.94189 8.59987 2.0013 9.14805 2.22836C9.69623 2.45542 10.1648 2.83994 10.4944 3.33329C10.8241 3.82664 11 4.40666 11 5C11 5.79565 10.6839 6.55871 10.1213 7.12132C9.55871 7.68393 8.79565 8 8 8ZM17.74 8.32C18.38 7.59933 18.798 6.70905 18.9438 5.75634C19.0896 4.80362 18.9569 3.82907 18.5618 2.95C18.1666 2.07093 17.5258 1.3248 16.7165 0.801423C15.9071 0.27805 14.9638 -0.0002576 14 1.78911e-07C13.7348 1.78911e-07 13.4804 0.105357 13.2929 0.292893C13.1054 0.48043 13 0.734784 13 1C13 1.26522 13.1054 1.51957 13.2929 1.70711C13.4804 1.89464 13.7348 2 14 2C14.7956 2 15.5587 2.31607 16.1213 2.87868C16.6839 3.44129 17 4.20435 17 5C16.9986 5.52524 16.8593 6.0409 16.5961 6.49542C16.3328 6.94994 15.9549 7.32738 15.5 7.59C15.3517 7.67552 15.2279 7.79766 15.1404 7.94474C15.0528 8.09182 15.0045 8.2589 15 8.43C14.9958 8.59976 15.0349 8.7678 15.1137 8.91826C15.1924 9.06872 15.3081 9.19665 15.45 9.29L15.84 9.55L15.97 9.62C17.1754 10.1917 18.1923 11.096 18.901 12.2263C19.6096 13.3566 19.9805 14.6659 19.97 16C19.97 16.2652 20.0754 16.5196 20.2629 16.7071C20.4504 16.8946 20.7048 17 20.97 17C21.2352 17 21.4896 16.8946 21.6771 16.7071C21.8646 16.5196 21.97 16.2652 21.97 16C21.9782 14.4654 21.5938 12.9543 20.8535 11.6101C20.1131 10.2659 19.0413 9.13331 17.74 8.32Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Guided Hiring Process</div><p class="nav__dropdown-subcopy">Breeze through global hiring</p></div></a></li><li class="nav__dropdown-li"><a href="integrations.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.66 15.6117L17.4629 10.4262C17.5717 9.89656 17.6257 9.35715 17.6239 8.81648C17.6235 7.334 17.2494 5.87555 16.5362 4.57593C15.8229 3.27632 14.7935 2.17747 13.5432 1.38098C12.2929 0.584478 10.8619 0.116032 9.38265 0.0189371C7.90336 -0.078158 6.42346 0.199232 5.07975 0.825466C4.90951 0.903235 4.76083 1.02139 4.64662 1.16966C4.5324 1.31794 4.45612 1.49185 4.42438 1.67631C4.39276 1.85842 4.40551 2.04547 4.46155 2.2216C4.5176 2.39773 4.61528 2.55776 4.74632 2.68812L9.74788 7.67819L7.67827 9.7478L2.6882 4.74623C2.55674 4.61723 2.39622 4.5217 2.22014 4.46767C2.04406 4.41365 1.85757 4.40272 1.67639 4.43579C1.49309 4.46637 1.31994 4.54092 1.17175 4.65306C1.02357 4.7652 0.904778 4.91158 0.825546 5.07967C0.197217 6.4278 -0.0799314 7.91295 0.0198819 9.39696C0.119695 10.881 0.593228 12.3156 1.39643 13.5675C2.19963 14.8193 3.3064 15.8477 4.61379 16.5569C5.92118 17.2661 7.38671 17.6331 8.87405 17.6238C9.41472 17.6256 9.95413 17.5716 10.4837 17.4629L15.6693 22.6599C15.7762 22.7677 15.9033 22.8532 16.0434 22.9116C16.1836 22.9699 16.3338 23 16.4856 23C16.6374 23 16.7877 22.9699 16.9278 22.9116C17.0679 22.8532 17.1951 22.7677 17.302 22.6599C17.4097 22.553 17.4953 22.4258 17.5537 22.2857C17.612 22.1456 17.6421 21.9953 17.6421 21.8435C17.6421 21.6918 17.612 21.5415 17.5537 21.4014C17.4953 21.2613 17.4097 21.1341 17.302 21.0272L11.668 15.3933C11.5272 15.2534 11.3526 15.1524 11.1612 15.1C10.9698 15.0476 10.7681 15.0456 10.5757 15.0943C10.0206 15.243 9.44874 15.3202 8.87405 15.3243C8.01406 15.3318 7.16108 15.1692 6.36422 14.8457C5.56737 14.5222 4.84241 14.0442 4.23108 13.4393C3.61976 12.8344 3.13417 12.1145 2.80228 11.3211C2.47039 10.5277 2.29876 9.67649 2.29727 8.81648C2.29578 8.43132 2.32655 8.04671 2.38925 7.66669L6.89641 12.1853C7.0033 12.2931 7.13047 12.3787 7.27058 12.437C7.41069 12.4954 7.56098 12.5255 7.71276 12.5255C7.86455 12.5255 8.01483 12.4954 8.15494 12.437C8.29506 12.3787 8.42222 12.2931 8.52911 12.1853L12.1854 8.49454C12.3927 8.28014 12.5085 7.99362 12.5085 7.69543C12.5085 7.39725 12.3927 7.11073 12.1854 6.89633L7.71276 2.38917C8.09286 2.3271 8.47742 2.29634 8.86255 2.29719C10.5896 2.30024 12.2448 2.98843 13.4649 4.21071C14.6851 5.43298 15.3703 7.08944 15.3703 8.81648C15.3663 9.39117 15.289 9.96301 15.1404 10.5182C15.0917 10.7105 15.0937 10.9123 15.146 11.1037C15.1984 11.2951 15.2995 11.4697 15.4393 11.6105L21.0733 17.2444C21.2898 17.4609 21.5834 17.5825 21.8896 17.5825C22.1958 17.5825 22.4895 17.4609 22.706 17.2444C22.9225 17.0279 23.0441 16.7342 23.0441 16.4281C23.0441 16.1219 22.9225 15.8282 22.706 15.6117H22.66Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Integrations</div><p class="nav__dropdown-subcopy">Connect your tools with Oyster</p></div></a></li><li class="nav__dropdown-li"><a href="case-studies.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2890_154116)">
<path d="M5.5 14.5C5.89782 14.5 6.27936 14.342 6.56066 14.0607C6.84196 13.7794 7 13.3978 7 13C7.00488 12.9501 7.00488 12.8999 7 12.85L9.79 10.06H10.02H10.25L11.86 11.67C11.86 11.67 11.86 11.72 11.86 11.75C11.86 12.1478 12.018 12.5294 12.2993 12.8107C12.5806 13.092 12.9622 13.25 13.36 13.25C13.7578 13.25 14.1394 13.092 14.4207 12.8107C14.702 12.5294 14.86 12.1478 14.86 11.75V11.67L18.5 8C18.7967 8 19.0867 7.91203 19.3334 7.7472C19.58 7.58238 19.7723 7.34811 19.8858 7.07403C19.9993 6.79994 20.0291 6.49834 19.9712 6.20736C19.9133 5.91639 19.7704 5.64912 19.5607 5.43934C19.3509 5.22956 19.0836 5.0867 18.7926 5.02882C18.5017 4.97094 18.2001 5.00065 17.926 5.11418C17.6519 5.22771 17.4176 5.41997 17.2528 5.66664C17.088 5.91332 17 6.20333 17 6.5C16.9951 6.54988 16.9951 6.60012 17 6.65L13.39 10.26H13.23L11.5 8.5C11.5 8.10218 11.342 7.72064 11.0607 7.43934C10.7794 7.15804 10.3978 7 10 7C9.60218 7 9.22064 7.15804 8.93934 7.43934C8.65804 7.72064 8.5 8.10218 8.5 8.5L5.5 11.5C5.10218 11.5 4.72064 11.658 4.43934 11.9393C4.15804 12.2206 4 12.6022 4 13C4 13.3978 4.15804 13.7794 4.43934 14.0607C4.72064 14.342 5.10218 14.5 5.5 14.5ZM19 18.5H2V1.5C2 1.23478 1.89464 0.98043 1.70711 0.792893C1.51957 0.605357 1.26522 0.5 1 0.5C0.734784 0.5 0.48043 0.605357 0.292893 0.792893C0.105357 0.98043 0 1.23478 0 1.5V19.5C0 19.7652 0.105357 20.0196 0.292893 20.2071C0.48043 20.3946 0.734784 20.5 1 20.5H19C19.2652 20.5 19.5196 20.3946 19.7071 20.2071C19.8946 20.0196 20 19.7652 20 19.5C20 19.2348 19.8946 18.9804 19.7071 18.7929C19.5196 18.6054 19.2652 18.5 19 18.5Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0_2890_154116">
<rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Case Studies</div><p class="nav__dropdown-subcopy">See how others use Oyster</p></div></a></li></ul></div></div></nav></div></li><li class="nav__menu-li"><a href="careers.html" class="nav__link-wrapper w-inline-block"><div class="nav__link-text">Careers</div></a></li><li class="nav__menu-li"><a href="pricing.html" class="nav__link-wrapper w-inline-block"><div class="nav__link-text">Pricing</div></a></li><li class="nav__menu-li"><div data-hover="false" data-delay="0" class="nav__dropdown w-dropdown"><div class="nav__dropdown-toggle w-dropdown-toggle"><div class="nav__link-wrapper"><div class="nav__dropdown-text">About Oyster</div><img src="../assets-global.website-files.com/5ffc74fef1579006dc588807/63f742250135b43344e1411f_chevron%20down.svg" loading="lazy" alt="This is an image of an arrow pointing downwards." class="nav__dropdown-icon"/></div></div><nav class="nav__dropdown-list-wrap w-dropdown-list"><div class="nav__dropdown-list-contents"><div id="w-node-abd70e3e-7bdc-c70f-0e26-66396fbde240-6fbde1b1" class="nav__dropdown-list-col"><ul role="list" class="nav__dropdown-list"><li class="nav__dropdown-li"><a href="who-we-are.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2890_154469)">
<path d="M19.66 8.74996L10.66 0.749955C10.4775 0.589636 10.2429 0.501221 10 0.501221C9.75709 0.501221 9.52249 0.589636 9.34 0.749955L0.339997 8.74996C0.187033 8.88527 0.0791648 9.06417 0.0308962 9.26261C-0.0173724 9.46104 -0.0037274 9.6695 0.0699968 9.85995C0.142515 10.0479 0.270102 10.2095 0.436046 10.3237C0.601991 10.4379 0.798556 10.4994 0.999997 10.5H2V19.5C2 19.7652 2.10535 20.0195 2.29289 20.2071C2.48043 20.3946 2.73478 20.5 3 20.5H17C17.2652 20.5 17.5196 20.3946 17.7071 20.2071C17.8946 20.0195 18 19.7652 18 19.5V10.5H19C19.2014 10.4994 19.398 10.4379 19.5639 10.3237C19.7299 10.2095 19.8575 10.0479 19.93 9.85995C20.0037 9.6695 20.0174 9.46104 19.9691 9.26261C19.9208 9.06417 19.813 8.88527 19.66 8.74996ZM11 18.5H9V15.5C9 15.2347 9.10535 14.9804 9.29289 14.7928C9.48043 14.6053 9.73478 14.5 10 14.5C10.2652 14.5 10.5196 14.6053 10.7071 14.7928C10.8946 14.9804 11 15.2347 11 15.5V18.5ZM16 18.5H13V15.5C13 14.7043 12.6839 13.9412 12.1213 13.3786C11.5587 12.816 10.7956 12.5 10 12.5C9.20435 12.5 8.44129 12.816 7.87868 13.3786C7.31607 13.9412 7 14.7043 7 15.5V18.5H4V10.5H16V18.5ZM3.63 8.49996L10 2.83996L16.37 8.49996H3.63Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_2890_154469">
<rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Who We Are</div><p class="nav__dropdown-subcopy">Learn more about our team</p></div></a></li><li class="nav__dropdown-li"><a href="our-mission.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2692_112421)">
<path d="M19.41 7.14C19.41 7.14 19.41 7.14 19.41 7.09C18.7054 5.16623 17.4269 3.50529 15.7475 2.33187C14.0681 1.15845 12.0688 0.529175 10.02 0.529175C7.97126 0.529175 5.97195 1.15845 4.29252 2.33187C2.6131 3.50529 1.33461 5.16623 0.630012 7.09C0.630012 7.09 0.630012 7.09 0.630012 7.14C-0.156863 9.3109 -0.156863 11.6891 0.630012 13.86C0.630012 13.86 0.630012 13.86 0.630012 13.91C1.33461 15.8338 2.6131 17.4947 4.29252 18.6681C5.97195 19.8416 7.97126 20.4708 10.02 20.4708C12.0688 20.4708 14.0681 19.8416 15.7475 18.6681C17.4269 17.4947 18.7054 15.8338 19.41 13.91C19.41 13.91 19.41 13.91 19.41 13.86C20.1969 11.6891 20.1969 9.3109 19.41 7.14ZM2.26001 12.5C1.91324 11.1892 1.91324 9.81079 2.26001 8.5H4.12001C3.96004 9.82854 3.96004 11.1715 4.12001 12.5H2.26001ZM3.08001 14.5H4.48001C4.71473 15.3918 5.05022 16.2541 5.48001 17.07C4.49931 16.4019 3.67951 15.5241 3.08001 14.5ZM4.48001 6.5H3.08001C3.67088 5.47909 4.4802 4.60147 5.45001 3.93C5.03057 4.74725 4.70515 5.60942 4.48001 6.5ZM9.00001 18.2C7.77178 17.2987 6.90916 15.9852 6.57001 14.5H9.00001V18.2ZM9.00001 12.5H6.14001C5.9534 11.1732 5.9534 9.82681 6.14001 8.5H9.00001V12.5ZM9.00001 6.5H6.57001C6.90916 5.01477 7.77178 3.70132 9.00001 2.8V6.5ZM16.92 6.5H15.52C15.2853 5.60816 14.9498 4.74594 14.52 3.93C15.5007 4.59807 16.3205 5.47594 16.92 6.5ZM11 2.8C12.2282 3.70132 13.0909 5.01477 13.43 6.5H11V2.8ZM11 18.2V14.5H13.43C13.0909 15.9852 12.2282 17.2987 11 18.2ZM13.86 12.5H11V8.5H13.86C14.0466 9.82681 14.0466 11.1732 13.86 12.5ZM14.55 17.07C14.9798 16.2541 15.3153 15.3918 15.55 14.5H16.95C16.3505 15.5241 15.5307 16.4019 14.55 17.07ZM17.74 12.5H15.88C15.9613 11.8365 16.0014 11.1685 16 10.5C16.0011 9.83151 15.961 9.16357 15.88 8.5H17.74C18.0868 9.81079 18.0868 11.1892 17.74 12.5Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2692_112421">
<rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Mission and Impact</div><p class="nav__dropdown-subcopy">See how we make a difference</p></div></a></li><li class="nav__dropdown-li"><a href="careers.html" aria-current="page" class="nav__dropdown-item w-inline-block w--current"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.9615 8.12825C16.8319 6.77008 16.3772 5.46307 15.636 4.31767C14.8947 3.17227 13.8886 2.22214 12.7027 1.54757C11.5168 0.872996 10.1859 0.493803 8.82252 0.442035C7.45916 0.390266 6.10337 0.667443 4.86972 1.25014C3.63607 1.83284 2.56081 2.70394 1.73481 3.78983C0.908808 4.87571 0.356333 6.14448 0.124073 7.48891C-0.108188 8.83333 -0.0134082 10.2139 0.400402 11.514C0.814212 12.8141 1.53489 13.9954 2.50154 14.9582L7.80154 20.2682C7.89451 20.362 8.00511 20.4364 8.12697 20.4871C8.24883 20.5379 8.37953 20.564 8.51154 20.564C8.64355 20.564 8.77426 20.5379 8.89612 20.4871C9.01798 20.4364 9.12858 20.362 9.22154 20.2682L14.5015 14.9582C15.3927 14.0737 16.0759 13.0019 16.5014 11.8205C16.9269 10.6392 17.0841 9.3779 16.9615 8.12825ZM13.1015 13.5482L8.50154 18.1482L3.90154 13.5482C3.22363 12.8703 2.70434 12.0506 2.38101 11.148C2.05768 10.2454 1.93833 9.28244 2.03154 8.32825C2.12536 7.35935 2.43331 6.42341 2.93311 5.58809C3.43292 4.75277 4.1121 4.03895 4.92154 3.49825C5.98249 2.79348 7.22785 2.41754 8.50154 2.41754C9.77524 2.41754 11.0206 2.79348 12.0815 3.49825C12.8885 4.03686 13.5662 4.74753 14.0659 5.57918C14.5656 6.41084 14.8749 7.34285 14.9715 8.30825C15.0678 9.26567 14.9499 10.2325 14.6265 11.1388C14.3031 12.0451 13.7822 12.8681 13.1015 13.5482ZM10.2915 4.74825C10.1986 4.65452 10.088 4.58012 9.96612 4.52935C9.84426 4.47859 9.71355 4.45245 9.58154 4.45245C9.44953 4.45245 9.31882 4.47859 9.19697 4.52935C9.07511 4.58012 8.96451 4.65452 8.87154 4.74825L5.29154 8.32825C5.1068 8.51451 5.00265 8.76591 5.00154 9.02825V11.4982C5.00154 11.7635 5.1069 12.0178 5.29444 12.2054C5.48197 12.3929 5.73633 12.4982 6.00154 12.4982H8.42154C8.55315 12.499 8.68361 12.4738 8.80545 12.424C8.92729 12.3743 9.0381 12.3009 9.13154 12.2082L12.7115 8.62825C12.8978 8.44088 13.0023 8.18743 13.0023 7.92325C13.0023 7.65906 12.8978 7.40561 12.7115 7.21825L10.2915 4.74825ZM8.01154 10.4982H7.01154V9.49825L9.59154 6.91825L10.5915 7.91825L8.01154 10.4982Z" fill="currentColor"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Careers</div><p class="nav__dropdown-subcopy">View current job openings</p></div></a></li><li class="nav__dropdown-li"><a href="partners.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 5.73928C20.0008 5.60768 19.9756 5.47722 19.9258 5.35538C19.876 5.23354 19.8027 5.12272 19.71 5.02928L15.47 0.789284C15.3766 0.696603 15.2658 0.623278 15.1439 0.573513C15.0221 0.523748 14.8916 0.498523 14.76 0.499284C14.6284 0.498523 14.4979 0.523748 14.3761 0.573513C14.2543 0.623278 14.1435 0.696603 14.05 0.789284L11.22 3.61928L0.290017 14.5493C0.197335 14.6427 0.12401 14.7535 0.0742455 14.8754C0.0244809 14.9972 -0.000744179 15.1277 1.67143e-05 15.2593V19.4993C1.67143e-05 19.7645 0.105374 20.0189 0.29291 20.2064C0.480446 20.3939 0.7348 20.4993 1.00002 20.4993H5.24002C5.37994 20.5069 5.51991 20.485 5.65084 20.4351C5.78176 20.3851 5.90073 20.3082 6.00002 20.2093L16.87 9.27928L19.71 6.49928C19.8013 6.40237 19.8757 6.29082 19.93 6.16928C19.9397 6.08957 19.9397 6.00899 19.93 5.92928C19.9347 5.88273 19.9347 5.83583 19.93 5.78928L20 5.73928ZM4.83002 18.4993H2.00002V15.6693L11.93 5.73928L14.76 8.56928L4.83002 18.4993ZM16.17 7.15928L13.34 4.32928L14.76 2.91928L17.58 5.73928L16.17 7.15928Z" fill="currentColor"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Partners</div><p class="nav__dropdown-subcopy">Browse or become a partner</p></div></a></li><li class="nav__dropdown-li"></li><li class="nav__dropdown-li"></li></ul></div></div></nav></div></li><li class="nav__menu-li"><div data-hover="false" data-delay="0" class="nav__dropdown w-dropdown"><div class="nav__dropdown-toggle w-dropdown-toggle"><div class="nav__link-wrapper border-none"><div class="nav__dropdown-text">Resources</div><img src="../assets-global.website-files.com/5ffc74fef1579006dc588807/63f742250135b43344e1411f_chevron%20down.svg" loading="lazy" alt="This is an image of an arrow pointing downwards." class="nav__dropdown-icon"/></div></div><nav class="nav__dropdown-list-wrap is-last w-dropdown-list"><div class="nav__dropdown-list-contents"><div id="w-node-abd70e3e-7bdc-c70f-0e26-66396fbde271-6fbde1b1" class="nav__dropdown-list-col"><div class="nav__dropdown-list-header"><div class="nav__dropdown-list-heading">HIRING</div></div><ul role="list" class="nav__dropdown-list"><li class="nav__dropdown-li"><a href="global-hiring-guides.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.7754 10.38L17.7754 7.88C17.6823 7.76215 17.5638 7.66679 17.4288 7.601C17.2937 7.53521 17.1456 7.50069 16.9954 7.5H10.9954V1.5C10.9954 1.23478 10.89 0.98043 10.7025 0.792893C10.515 0.605357 10.2606 0.5 9.9954 0.5C9.73018 0.5 9.47583 0.605357 9.28829 0.792893C9.10076 0.98043 8.9954 1.23478 8.9954 1.5V2.5H2.9954C2.84519 2.50069 2.69707 2.53521 2.56204 2.601C2.427 2.66679 2.30852 2.76215 2.2154 2.88L0.215398 5.38C0.0758892 5.55655 0 5.77499 0 6C0 6.22501 0.0758892 6.44345 0.215398 6.62L2.2154 9.12C2.30852 9.23785 2.427 9.33321 2.56204 9.399C2.69707 9.46479 2.84519 9.49931 2.9954 9.5H8.9954V18.5H6.9954C6.73018 18.5 6.47583 18.6054 6.28829 18.7929C6.10076 18.9804 5.9954 19.2348 5.9954 19.5C5.9954 19.7652 6.10076 20.0196 6.28829 20.2071C6.47583 20.3946 6.73018 20.5 6.9954 20.5H12.9954C13.2606 20.5 13.515 20.3946 13.7025 20.2071C13.89 20.0196 13.9954 19.7652 13.9954 19.5C13.9954 19.2348 13.89 18.9804 13.7025 18.7929C13.515 18.6054 13.2606 18.5 12.9954 18.5H10.9954V14.5H16.9954C17.1456 14.4993 17.2937 14.4648 17.4288 14.399C17.5638 14.3332 17.6823 14.2379 17.7754 14.12L19.7754 11.62C19.9149 11.4435 19.9908 11.225 19.9908 11C19.9908 10.775 19.9149 10.5565 19.7754 10.38ZM8.9954 7.5H3.4754L2.2754 6L3.4754 4.5H8.9954V7.5ZM16.5154 12.5H10.9954V9.5H16.5154L17.7154 11L16.5154 12.5Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Global Hiring Guides</div><p class="nav__dropdown-subcopy">Find guides for 55+ countries</p></div></a></li><li class="nav__dropdown-li"><a href="global-employment-tools.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.32 8.05L17.43 7.42L18.32 5.64C18.4102 5.45369 18.4404 5.24397 18.4064 5.03978C18.3723 4.83558 18.2758 4.64699 18.13 4.5L16 2.37C15.8522 2.22209 15.6618 2.12421 15.4555 2.09013C15.2493 2.05605 15.0375 2.08748 14.85 2.18L13.07 3.07L12.44 1.18C12.3735 0.982996 12.2472 0.811629 12.0787 0.689751C11.9102 0.567874 11.7079 0.501548 11.5 0.500003H8.5C8.29036 0.499462 8.08585 0.564822 7.91537 0.686845C7.7449 0.808868 7.61709 0.981382 7.55 1.18L6.92 3.07L5.14 2.18C4.95369 2.08978 4.74397 2.05961 4.53978 2.09364C4.33558 2.12767 4.14699 2.22423 4 2.37L1.87 4.5C1.72209 4.64777 1.62421 4.83818 1.59013 5.04446C1.55605 5.25074 1.58748 5.46251 1.68 5.65L2.57 7.43L0.680003 8.06C0.482996 8.12654 0.311629 8.25283 0.189751 8.42131C0.0678737 8.58979 0.00154767 8.79207 3.33354e-06 9V12C-0.000537828 12.2096 0.0648223 12.4142 0.186845 12.5846C0.308868 12.7551 0.481382 12.8829 0.680003 12.95L2.57 13.58L1.68 15.36C1.58978 15.5463 1.55961 15.756 1.59364 15.9602C1.62767 16.1644 1.72423 16.353 1.87 16.5L4 18.63C4.14777 18.7779 4.33818 18.8758 4.54446 18.9099C4.75074 18.944 4.96251 18.9125 5.15 18.82L6.93 17.93L7.56 19.82C7.62709 20.0186 7.7549 20.1911 7.92537 20.3132C8.09585 20.4352 8.30036 20.5005 8.51 20.5H11.51C11.7196 20.5005 11.9242 20.4352 12.0946 20.3132C12.2651 20.1911 12.3929 20.0186 12.46 19.82L13.09 17.93L14.87 18.82C15.0551 18.9079 15.2628 18.9369 15.4649 18.9029C15.667 18.8689 15.8538 18.7737 16 18.63L18.13 16.5C18.2779 16.3522 18.3758 16.1618 18.4099 15.9555C18.444 15.7493 18.4125 15.5375 18.32 15.35L17.43 13.57L19.32 12.94C19.517 12.8735 19.6884 12.7472 19.8103 12.5787C19.9321 12.4102 19.9985 12.2079 20 12V9C20.0005 8.79036 19.9352 8.58585 19.8132 8.41537C19.6911 8.2449 19.5186 8.11709 19.32 8.05ZM18 11.28L16.8 11.68C16.5241 11.7695 16.2709 11.918 16.0581 12.1151C15.8452 12.3122 15.6778 12.5533 15.5675 12.8216C15.4571 13.0899 15.4064 13.379 15.419 13.6688C15.4315 13.9586 15.5069 14.2422 15.64 14.5L16.21 15.64L15.11 16.74L14 16.14C13.7436 16.0122 13.4627 15.9411 13.1763 15.9313C12.89 15.9215 12.6049 15.9734 12.3403 16.0834C12.0758 16.1934 11.8379 16.3589 11.6429 16.5688C11.4479 16.7787 11.3003 17.0281 11.21 17.3L10.81 18.5H9.22L8.82 17.3C8.73049 17.0241 8.58203 16.7709 8.3849 16.5581C8.18778 16.3452 7.94671 16.1778 7.67842 16.0675C7.41014 15.9571 7.12105 15.9064 6.83123 15.919C6.5414 15.9315 6.25777 16.0069 6 16.14L4.86 16.71L3.76 15.61L4.36 14.5C4.4931 14.2422 4.56852 13.9586 4.58105 13.6688C4.59358 13.379 4.5429 13.0899 4.43254 12.8216C4.32218 12.5533 4.15478 12.3122 3.94195 12.1151C3.72912 11.918 3.47595 11.7695 3.2 11.68L2 11.28V9.72L3.2 9.32C3.47595 9.23049 3.72912 9.08203 3.94195 8.8849C4.15478 8.68778 4.32218 8.44671 4.43254 8.17842C4.5429 7.91014 4.59358 7.62105 4.58105 7.33123C4.56852 7.0414 4.4931 6.75777 4.36 6.5L3.79 5.39L4.89 4.29L6 4.86C6.25777 4.9931 6.5414 5.06852 6.83123 5.08105C7.12105 5.09358 7.41014 5.0429 7.67842 4.93254C7.94671 4.82218 8.18778 4.65478 8.3849 4.44195C8.58203 4.22912 8.73049 3.97595 8.82 3.7L9.22 2.5H10.78L11.18 3.7C11.2695 3.97595 11.418 4.22912 11.6151 4.44195C11.8122 4.65478 12.0533 4.82218 12.3216 4.93254C12.5899 5.0429 12.879 5.09358 13.1688 5.08105C13.4586 5.06852 13.7422 4.9931 14 4.86L15.14 4.29L16.24 5.39L15.64 6.5C15.5122 6.75645 15.4411 7.03735 15.4313 7.32369C15.4215 7.61003 15.4734 7.89513 15.5834 8.15969C15.6934 8.42424 15.8589 8.66207 16.0688 8.85708C16.2787 9.0521 16.5281 9.19973 16.8 9.29L18 9.69V11.28ZM10 6.5C9.20888 6.5 8.43552 6.7346 7.77772 7.17413C7.11993 7.61365 6.60724 8.23836 6.30448 8.96927C6.00173 9.70017 5.92252 10.5044 6.07686 11.2804C6.2312 12.0563 6.61217 12.769 7.17158 13.3284C7.73099 13.8878 8.44372 14.2688 9.21964 14.4231C9.99557 14.5775 10.7998 14.4983 11.5307 14.1955C12.2616 13.8928 12.8864 13.3801 13.3259 12.7223C13.7654 12.0645 14 11.2911 14 10.5C14 9.43914 13.5786 8.42172 12.8284 7.67158C12.0783 6.92143 11.0609 6.5 10 6.5ZM10 12.5C9.60444 12.5 9.21776 12.3827 8.88886 12.1629C8.55996 11.9432 8.30362 11.6308 8.15224 11.2654C8.00087 10.8999 7.96126 10.4978 8.03843 10.1098C8.1156 9.72186 8.30608 9.36549 8.58579 9.08579C8.86549 8.80608 9.22186 8.6156 9.60982 8.53843C9.99778 8.46126 10.3999 8.50087 10.7654 8.65224C11.1308 8.80362 11.4432 9.05996 11.6629 9.38886C11.8827 9.71776 12 10.1044 12 10.5C12 11.0304 11.7893 11.5391 11.4142 11.9142C11.0391 12.2893 10.5304 12.5 10 12.5Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Global Employment Tools</div><p class="nav__dropdown-subcopy">Access free self-serve tools</p></div></a></li><li class="nav__dropdown-li"><a href="global-employment-pass.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.9936 8.1721C19.9305 7.98919 19.8156 7.82853 19.663 7.7096C19.5103 7.59068 19.3264 7.51859 19.1336 7.5021L13.4436 6.6721L10.8936 1.5021C10.8117 1.33303 10.6839 1.19044 10.5247 1.09067C10.3655 0.990903 10.1815 0.937988 9.99363 0.937988C9.80577 0.937988 9.62171 0.990903 9.46254 1.09067C9.30337 1.19044 9.17551 1.33303 9.09363 1.5021L6.54363 6.6621L0.85363 7.5021C0.668552 7.5284 0.494554 7.60606 0.35138 7.72626C0.208206 7.84645 0.10159 8.00437 0.0436298 8.1821C-0.00942525 8.35577 -0.0141863 8.54062 0.0298575 8.71679C0.0739014 8.89297 0.165087 9.05382 0.29363 9.1821L4.42363 13.1821L3.42363 18.8621C3.38793 19.0496 3.40662 19.2434 3.4775 19.4205C3.54838 19.5977 3.66848 19.751 3.82363 19.8621C3.97485 19.9702 4.1532 20.034 4.33868 20.0464C4.52415 20.0588 4.7094 20.0192 4.87363 19.9321L9.99363 17.2621L15.0936 19.9421C15.234 20.0213 15.3925 20.0626 15.5536 20.0621C15.7655 20.0629 15.972 19.9963 16.1436 19.8721C16.2988 19.761 16.4189 19.6077 16.4898 19.4305C16.5606 19.2534 16.5793 19.0596 16.5436 18.8721L15.5436 13.1921L19.6736 9.1921C19.818 9.06978 19.9247 8.909 19.9814 8.72845C20.038 8.54789 20.0423 8.35497 19.9936 8.1721ZM13.8436 12.1721C13.7264 12.2855 13.6386 12.4259 13.5881 12.5811C13.5375 12.7362 13.5257 12.9013 13.5536 13.0621L14.2736 17.2521L10.5136 15.2521C10.3689 15.1751 10.2075 15.1348 10.0436 15.1348C9.87971 15.1348 9.71831 15.1751 9.57363 15.2521L5.81363 17.2521L6.53363 13.0621C6.56157 12.9013 6.54974 12.7362 6.49919 12.5811C6.44865 12.4259 6.36091 12.2855 6.24363 12.1721L3.24363 9.1721L7.45363 8.5621C7.61563 8.53957 7.76963 8.47764 7.90213 8.38175C8.03463 8.28586 8.14159 8.15894 8.21363 8.0121L9.99363 4.2021L11.8736 8.0221C11.9457 8.16894 12.0526 8.29586 12.1851 8.39175C12.3176 8.48764 12.4716 8.54956 12.6336 8.5721L16.8436 9.1821L13.8436 12.1721Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Global Employment Pass</div><p class="nav__dropdown-subcopy">Start and grow your remote career</p></div></a></li></ul></div><div id="w-node-abd70e3e-7bdc-c70f-0e26-66396fbde291-6fbde1b1" class="nav__dropdown-list-col"><div class="nav__dropdown-list-header"><div class="nav__dropdown-list-heading">Learning</div></div><ul role="list" class="nav__dropdown-list"><li class="nav__dropdown-li"><a href="library.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.97 16.3414L19.97 12.4814L16.82 0.891392C16.7519 0.635732 16.5853 0.417466 16.3567 0.284392C16.128 0.151318 15.8559 0.114281 15.6 0.181392L11.73 1.18139C11.6376 1.07904 11.5251 0.996885 11.3995 0.940096C11.2739 0.883306 11.1379 0.853106 11 0.851392H1C0.734784 0.851392 0.48043 0.956749 0.292893 1.14429C0.105357 1.33182 0 1.58618 0 1.85139V17.8514C0 18.1166 0.105357 18.371 0.292893 18.5585C0.48043 18.746 0.734784 18.8514 1 18.8514H11C11.2652 18.8514 11.5196 18.746 11.7071 18.5585C11.8946 18.371 12 18.1166 12 17.8514V9.85139L14.2 18.0714C14.2586 18.2896 14.3893 18.4814 14.5709 18.6158C14.7525 18.7502 14.9742 18.8191 15.2 18.8114C15.2864 18.8212 15.3736 18.8212 15.46 18.8114L20.29 17.5214C20.4177 17.4873 20.5374 17.4281 20.6421 17.3475C20.7468 17.2668 20.8344 17.1662 20.9 17.0514C21.0055 16.8302 21.0302 16.579 20.97 16.3414ZM4.97 16.8914H1.97V14.8914H4.97V16.8914ZM4.97 12.8914H1.97V6.89139H4.97V12.8914ZM4.97 4.89139H1.97V2.89139H4.97V4.89139ZM9.97 16.8914H6.97V14.8914H9.97V16.8914ZM9.97 12.8914H6.97V6.89139H9.97V12.8914ZM9.97 4.89139H6.97V2.89139H9.97V4.89139ZM12.22 3.15139L15.12 2.37139L15.64 4.30139L12.74 5.08139L12.22 3.15139ZM14.81 12.8114L13.26 7.01139L16.16 6.23139L17.71 12.0314L14.81 12.8114ZM15.81 16.6714L15.29 14.7414L18.19 13.9614L18.71 15.8914L15.81 16.6714Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Library</div><p class="nav__dropdown-subcopy">See the latest blogs and news</p></div></a></li><li class="nav__dropdown-li"><a href="events.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2890_154447)">
<path d="M10 18.5C10.1978 18.5 10.3911 18.4414 10.5556 18.3315C10.72 18.2216 10.8482 18.0654 10.9239 17.8827C10.9996 17.7 11.0194 17.4989 10.9808 17.3049C10.9422 17.1109 10.847 16.9327 10.7071 16.7929C10.5673 16.653 10.3891 16.5578 10.1951 16.5192C10.0011 16.4806 9.80004 16.5004 9.61732 16.5761C9.43459 16.6518 9.27841 16.78 9.16853 16.9444C9.05865 17.1089 9 17.3022 9 17.5C9 17.7652 9.10536 18.0196 9.29289 18.2071C9.48043 18.3946 9.73478 18.5 10 18.5ZM15 18.5C15.1978 18.5 15.3911 18.4414 15.5556 18.3315C15.72 18.2216 15.8482 18.0654 15.9239 17.8827C15.9996 17.7 16.0194 17.4989 15.9808 17.3049C15.9422 17.1109 15.847 16.9327 15.7071 16.7929C15.5673 16.653 15.3891 16.5578 15.1951 16.5192C15.0011 16.4806 14.8 16.5004 14.6173 16.5761C14.4346 16.6518 14.2784 16.78 14.1685 16.9444C14.0586 17.1089 14 17.3022 14 17.5C14 17.7652 14.1054 18.0196 14.2929 18.2071C14.4804 18.3946 14.7348 18.5 15 18.5ZM15 14.5C15.1978 14.5 15.3911 14.4414 15.5556 14.3315C15.72 14.2216 15.8482 14.0654 15.9239 13.8827C15.9996 13.7 16.0194 13.4989 15.9808 13.3049C15.9422 13.1109 15.847 12.9327 15.7071 12.7929C15.5673 12.653 15.3891 12.5578 15.1951 12.5192C15.0011 12.4806 14.8 12.5004 14.6173 12.5761C14.4346 12.6518 14.2784 12.78 14.1685 12.9444C14.0586 13.1089 14 13.3022 14 13.5C14 13.7652 14.1054 14.0196 14.2929 14.2071C14.4804 14.3946 14.7348 14.5 15 14.5ZM10 14.5C10.1978 14.5 10.3911 14.4414 10.5556 14.3315C10.72 14.2216 10.8482 14.0654 10.9239 13.8827C10.9996 13.7 11.0194 13.4989 10.9808 13.3049C10.9422 13.1109 10.847 12.9327 10.7071 12.7929C10.5673 12.653 10.3891 12.5578 10.1951 12.5192C10.0011 12.4806 9.80004 12.5004 9.61732 12.5761C9.43459 12.6518 9.27841 12.78 9.16853 12.9444C9.05865 13.1089 9 13.3022 9 13.5C9 13.7652 9.10536 14.0196 9.29289 14.2071C9.48043 14.3946 9.73478 14.5 10 14.5ZM17 2.5H16V1.5C16 1.23478 15.8946 0.98043 15.7071 0.792893C15.5196 0.605357 15.2652 0.5 15 0.5C14.7348 0.5 14.4804 0.605357 14.2929 0.792893C14.1054 0.98043 14 1.23478 14 1.5V2.5H6V1.5C6 1.23478 5.89464 0.98043 5.70711 0.792893C5.51957 0.605357 5.26522 0.5 5 0.5C4.73478 0.5 4.48043 0.605357 4.29289 0.792893C4.10536 0.98043 4 1.23478 4 1.5V2.5H3C2.20435 2.5 1.44129 2.81607 0.87868 3.37868C0.316071 3.94129 0 4.70435 0 5.5V19.5C0 20.2956 0.316071 21.0587 0.87868 21.6213C1.44129 22.1839 2.20435 22.5 3 22.5H17C17.7956 22.5 18.5587 22.1839 19.1213 21.6213C19.6839 21.0587 20 20.2956 20 19.5V5.5C20 4.70435 19.6839 3.94129 19.1213 3.37868C18.5587 2.81607 17.7956 2.5 17 2.5ZM18 19.5C18 19.7652 17.8946 20.0196 17.7071 20.2071C17.5196 20.3946 17.2652 20.5 17 20.5H3C2.73478 20.5 2.48043 20.3946 2.29289 20.2071C2.10536 20.0196 2 19.7652 2 19.5V10.5H18V19.5ZM18 8.5H2V5.5C2 5.23478 2.10536 4.98043 2.29289 4.79289C2.48043 4.60536 2.73478 4.5 3 4.5H4V5.5C4 5.76522 4.10536 6.01957 4.29289 6.20711C4.48043 6.39464 4.73478 6.5 5 6.5C5.26522 6.5 5.51957 6.39464 5.70711 6.20711C5.89464 6.01957 6 5.76522 6 5.5V4.5H14V5.5C14 5.76522 14.1054 6.01957 14.2929 6.20711C14.4804 6.39464 14.7348 6.5 15 6.5C15.2652 6.5 15.5196 6.39464 15.7071 6.20711C15.8946 6.01957 16 5.76522 16 5.5V4.5H17C17.2652 4.5 17.5196 4.60536 17.7071 4.79289C17.8946 4.98043 18 5.23478 18 5.5V8.5ZM5 14.5C5.19778 14.5 5.39112 14.4414 5.55557 14.3315C5.72002 14.2216 5.84819 14.0654 5.92388 13.8827C5.99957 13.7 6.01937 13.4989 5.98079 13.3049C5.9422 13.1109 5.84696 12.9327 5.70711 12.7929C5.56725 12.653 5.38907 12.5578 5.19509 12.5192C5.00111 12.4806 4.80004 12.5004 4.61732 12.5761C4.43459 12.6518 4.27841 12.78 4.16853 12.9444C4.05865 13.1089 4 13.3022 4 13.5C4 13.7652 4.10536 14.0196 4.29289 14.2071C4.48043 14.3946 4.73478 14.5 5 14.5ZM5 18.5C5.19778 18.5 5.39112 18.4414 5.55557 18.3315C5.72002 18.2216 5.84819 18.0654 5.92388 17.8827C5.99957 17.7 6.01937 17.4989 5.98079 17.3049C5.9422 17.1109 5.84696 16.9327 5.70711 16.7929C5.56725 16.653 5.38907 16.5578 5.19509 16.5192C5.00111 16.4806 4.80004 16.5004 4.61732 16.5761C4.43459 16.6518 4.27841 16.78 4.16853 16.9444C4.05865 17.1089 4 17.3022 4 17.5C4 17.7652 4.10536 18.0196 4.29289 18.2071C4.48043 18.3946 4.73478 18.5 5 18.5Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0_2890_154447">
<rect width="20" height="22" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Events</div><p class="nav__dropdown-subcopy">Browse all events and webinars</p></div></a></li><li class="nav__dropdown-li"><a href="https://link.chtbl.com/OysterWebsite" target="_blank" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2890_154452)">
<path d="M18 10.68V8.5C18 6.37827 17.1571 4.34344 15.6569 2.84315C14.1566 1.34285 12.1217 0.5 10 0.5C7.87827 0.5 5.84344 1.34285 4.34315 2.84315C2.84285 4.34344 2 6.37827 2 8.5V10.68C1.41645 10.8863 0.910998 11.2681 0.552938 11.7729C0.194879 12.2778 0.00173951 12.8811 0 13.5V15.5C0 16.2956 0.316071 17.0587 0.87868 17.6213C1.44129 18.1839 2.20435 18.5 3 18.5H6C6.26522 18.5 6.51957 18.3946 6.70711 18.2071C6.89464 18.0196 7 17.7652 7 17.5V11.5C7 11.2348 6.89464 10.9804 6.70711 10.7929C6.51957 10.6054 6.26522 10.5 6 10.5H4V8.5C4 6.9087 4.63214 5.38258 5.75736 4.25736C6.88258 3.13214 8.4087 2.5 10 2.5C11.5913 2.5 13.1174 3.13214 14.2426 4.25736C15.3679 5.38258 16 6.9087 16 8.5V10.5H14C13.7348 10.5 13.4804 10.6054 13.2929 10.7929C13.1054 10.9804 13 11.2348 13 11.5V17.5C13 17.7652 13.1054 18.0196 13.2929 18.2071C13.4804 18.3946 13.7348 18.5 14 18.5H17C17.7956 18.5 18.5587 18.1839 19.1213 17.6213C19.6839 17.0587 20 16.2956 20 15.5V13.5C19.9983 12.8811 19.8051 12.2778 19.4471 11.7729C19.089 11.2681 18.5835 10.8863 18 10.68ZM5 12.5V16.5H3C2.73478 16.5 2.48043 16.3946 2.29289 16.2071C2.10536 16.0196 2 15.7652 2 15.5V13.5C2 13.2348 2.10536 12.9804 2.29289 12.7929C2.48043 12.6054 2.73478 12.5 3 12.5H5ZM18 15.5C18 15.7652 17.8946 16.0196 17.7071 16.2071C17.5196 16.3946 17.2652 16.5 17 16.5H15V12.5H17C17.2652 12.5 17.5196 12.6054 17.7071 12.7929C17.8946 12.9804 18 13.2348 18 13.5V15.5Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_2890_154452">
<rect width="20" height="18" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Podcasts</div><p class="nav__dropdown-subcopy">Hear the latest episode</p></div></a></li><li class="nav__dropdown-li"><a href="academy.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.1833 0.577211C18.4665 0.453745 17.7406 0.390192 17.0133 0.387211C14.5316 0.385177 12.1018 1.09678 10.0133 2.43721C7.91942 1.11438 5.48992 0.420242 3.01327 0.437211C2.28591 0.440192 1.56007 0.503745 0.843268 0.627211C0.608475 0.66769 0.395849 0.79067 0.243681 0.974004C0.0915139 1.15734 0.00980452 1.38898 0.0132682 1.62721V13.6272C0.0111266 13.7741 0.0413944 13.9197 0.101918 14.0537C0.162442 14.1876 0.251734 14.3065 0.363441 14.402C0.475149 14.4974 0.606525 14.5671 0.748224 14.6061C0.889923 14.645 1.03846 14.6522 1.18327 14.6272C2.61629 14.3791 4.08447 14.4203 5.50133 14.7483C6.9182 15.0763 8.25509 15.6846 9.43327 16.5372L9.55327 16.6072H9.66327C9.77417 16.6534 9.89312 16.6772 10.0133 16.6772C10.1334 16.6772 10.2524 16.6534 10.3633 16.6072H10.4733L10.5933 16.5372C11.7632 15.6655 13.0963 15.0375 14.5134 14.6906C15.9306 14.3436 17.4029 14.2846 18.8433 14.5172C18.9881 14.5422 19.1366 14.535 19.2783 14.4961C19.42 14.4571 19.5514 14.3874 19.6631 14.292C19.7748 14.1965 19.8641 14.0776 19.9246 13.9437C19.9851 13.8097 20.0154 13.6641 20.0133 13.5172V1.51721C20.0029 1.28936 19.9149 1.07192 19.7639 0.900949C19.6129 0.729976 19.4081 0.615748 19.1833 0.577211ZM9.01327 13.8672C7.16315 12.8939 5.10379 12.3859 3.01327 12.3872C2.68327 12.3872 2.35327 12.3872 2.01327 12.3872V2.38721C2.34633 2.36802 2.68021 2.36802 3.01327 2.38721C5.14665 2.38485 7.23348 3.0109 9.01327 4.18721V13.8672ZM18.0133 12.4272C17.6733 12.4272 17.3433 12.4272 17.0133 12.4272C14.9227 12.4259 12.8634 12.9339 11.0133 13.9072V4.18721C12.7931 3.0109 14.8799 2.38485 17.0133 2.38721C17.3463 2.36802 17.6802 2.36802 18.0133 2.38721V12.4272ZM19.1833 16.5772C18.4665 16.4537 17.7406 16.3902 17.0133 16.3872C14.5316 16.3852 12.1018 17.0968 10.0133 18.4372C7.92478 17.0968 5.4949 16.3852 3.01327 16.3872C2.28591 16.3902 1.56007 16.4537 0.843268 16.5772C0.713096 16.5979 0.588291 16.6441 0.476031 16.7131C0.36377 16.7822 0.266269 16.8727 0.189135 16.9796C0.112 17.0865 0.0567537 17.2076 0.026572 17.3359C-0.00360967 17.4642 -0.00813089 17.5972 0.0132682 17.7272C0.0640869 17.9869 0.215759 18.2159 0.435059 18.3639C0.654359 18.512 0.923408 18.5671 1.18327 18.5172C2.61629 18.2691 4.08447 18.3103 5.50133 18.6383C6.9182 18.9663 8.25509 19.5746 9.43327 20.4272C9.60263 20.5478 9.80536 20.6126 10.0133 20.6126C10.2212 20.6126 10.4239 20.5478 10.5933 20.4272C11.7714 19.5746 13.1083 18.9663 14.5252 18.6383C15.9421 18.3103 17.4102 18.2691 18.8433 18.5172C19.1031 18.5671 19.3722 18.512 19.5915 18.3639C19.8108 18.2159 19.9624 17.9869 20.0133 17.7272C20.0347 17.5972 20.0301 17.4642 20 17.3359C19.9698 17.2076 19.9145 17.0865 19.8374 16.9796C19.7603 16.8727 19.6628 16.7822 19.5505 16.7131C19.4382 16.6441 19.3134 16.5979 19.1833 16.5772Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Courses</div><p class="nav__dropdown-subcopy">Explore available courses</p></div></a></li><li class="nav__dropdown-li"><a href="people-builders.html" class="nav__dropdown-item w-inline-block"><div class="nav__nest-dropdown-icon"><div class="nav__dropdown-icon--embed w-embed"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.36 12.73C11.6915 13.269 10.8587 13.5629 10 13.5629C9.14131 13.5629 8.30849 13.269 7.64 12.73C7.43579 12.5603 7.17251 12.4786 6.90808 12.503C6.64365 12.5274 6.39974 12.6558 6.23 12.86C6.06027 13.0642 5.9786 13.3275 6.00298 13.5919C6.02736 13.8563 6.15579 14.1003 6.36 14.27C7.38134 15.1226 8.66957 15.5896 10 15.5896C11.3304 15.5896 12.6187 15.1226 13.64 14.27C13.8442 14.1003 13.9726 13.8563 13.997 13.5919C14.0214 13.3275 13.9397 13.0642 13.77 12.86C13.686 12.7589 13.5828 12.6753 13.4665 12.6141C13.3501 12.5528 13.2229 12.5151 13.0919 12.503C12.8275 12.4786 12.5642 12.5603 12.36 12.73ZM7.21 9.04C7.39737 9.22625 7.65082 9.33079 7.915 9.33079C8.17919 9.33079 8.43264 9.22625 8.62 9.04C8.80626 8.85264 8.9108 8.59919 8.9108 8.335C8.9108 8.07081 8.80626 7.81736 8.62 7.63C8.04773 7.08699 7.2889 6.78428 6.5 6.78428C5.71111 6.78428 4.95228 7.08699 4.38 7.63C4.27532 7.71965 4.1903 7.82997 4.13028 7.95403C4.07026 8.07809 4.03653 8.21323 4.03121 8.35095C4.02589 8.48867 4.04909 8.626 4.09937 8.75432C4.14964 8.88265 4.2259 8.9992 4.32335 9.09665C4.42081 9.19411 4.53736 9.27036 4.66568 9.32064C4.79401 9.37091 4.93134 9.39412 5.06906 9.3888C5.20678 9.38348 5.34191 9.34975 5.46597 9.28973C5.59004 9.2297 5.70036 9.14468 5.79 9.04C5.88297 8.94627 5.99357 8.87188 6.11543 8.82111C6.23729 8.77034 6.36799 8.7442 6.5 8.7442C6.63202 8.7442 6.76272 8.77034 6.88458 8.82111C7.00644 8.87188 7.11704 8.94627 7.21 9.04ZM15.62 7.63C15.0477 7.08699 14.2889 6.78428 13.5 6.78428C12.7111 6.78428 11.9523 7.08699 11.38 7.63C11.2162 7.8213 11.1306 8.06738 11.1403 8.31905C11.15 8.57073 11.2543 8.80947 11.4324 8.98756C11.6105 9.16566 11.8493 9.26999 12.101 9.27971C12.3526 9.28943 12.5987 9.20383 12.79 9.04C12.883 8.94627 12.9936 8.87188 13.1154 8.82111C13.2373 8.77034 13.368 8.7442 13.5 8.7442C13.632 8.7442 13.7627 8.77034 13.8846 8.82111C14.0064 8.87188 14.117 8.94627 14.21 9.04C14.3974 9.22625 14.6508 9.33079 14.915 9.33079C15.1792 9.33079 15.4326 9.22625 15.62 9.04C15.8063 8.85264 15.9108 8.59919 15.9108 8.335C15.9108 8.07081 15.8063 7.81736 15.62 7.63ZM10 0.5C8.02219 0.5 6.08879 1.08649 4.4443 2.1853C2.79981 3.28412 1.51809 4.8459 0.761209 6.67317C0.00433284 8.50043 -0.193701 10.5111 0.192152 12.4509C0.578004 14.3907 1.53041 16.1725 2.92894 17.5711C4.32746 18.9696 6.10929 19.922 8.0491 20.3079C9.98891 20.6937 11.9996 20.4957 13.8268 19.7388C15.6541 18.9819 17.2159 17.7002 18.3147 16.0557C19.4135 14.4112 20 12.4778 20 10.5C20 9.18678 19.7413 7.88642 19.2388 6.67317C18.7363 5.45991 17.9997 4.35752 17.0711 3.42893C16.1425 2.50035 15.0401 1.76375 13.8268 1.2612C12.6136 0.758658 11.3132 0.5 10 0.5ZM10 18.5C8.41775 18.5 6.87104 18.0308 5.55544 17.1518C4.23985 16.2727 3.21447 15.0233 2.60897 13.5615C2.00347 12.0997 1.84504 10.4911 2.15372 8.93928C2.4624 7.38743 3.22433 5.96197 4.34315 4.84315C5.46197 3.72433 6.88743 2.9624 8.43928 2.65372C9.99113 2.34504 11.5997 2.50346 13.0615 3.10896C14.5233 3.71447 15.7727 4.73984 16.6518 6.05544C17.5308 7.37103 18 8.91775 18 10.5C18 12.6217 17.1572 14.6566 15.6569 16.1569C14.1566 17.6571 12.1217 18.5 10 18.5Z" fill="#323232"/>
</svg></div></div><div class="nav__dropdown-list-texts"><div class="nav__dropdown-list-title">Community</div><p class="nav__dropdown-subcopy">Meet People Builders</p></div></a></li></ul></div></div></nav></div></li><li class="nav__menu-li pad-0"><div class="nav__cta-wrapper"><a aria-label="login button" href="#" class="button-primary nav__cta w-button">Log in</a><div class="demo-modal-trigger"><a aria-label="Click here to fill the contact form" aria-controls="model" href="#" class="button-primary ghost nav__cta w-button">Speak to an Expert</a></div><div class="nav__cta hide"></div></div></li></ul></div></nav><div class="nav__menu-btn w-nav-button"><div class="icon-11 w-icon-nav-menu"></div><div class="nav__hamburger"><div class="nav__hamburger-line nav__hamburger-line--top"></div><div class="nav__hamburger-line nav__hamburger-line--middle"></div><div class="nav__hamburger-line nav__hamburger-line--bottom"></div></div></div></div></div><div class="nav__css w-embed"><style>.navigation-wrapper{
z-index:99999999;
}
.navbar-main{
box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.05);
}

.nav__menu-wrapper ul li{font-size:inherit;}

.nav__menu-list a{color:inherit;
text-decoration:none;}

.nav__dropdown-item:hover{
border-left-color:#5EBA83;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.08);
}

.nav__dropdown-toggle.w--open .nav__dropdown-icon{
transform:rotate(180deg);
}


.nav__dropdown-toggle.w--open{
border-bottom-color:#5EBA83;
font-weight:600;
}
.nav__dropdown-item:before{
content:"";
width:2px;
height:0px;
position:absolute;
left:0;
top:0;
background:#5EBA83;
transition: height .5s ease;
}
.nav__dropdown-item:hover:before{
height:100%;
}

/* Nav Hover */

/** Nav link hover **/
 @media screen and (min-width:992px){

.nav__menu-list .nav__link-wrapper{position:relative;}
.nav__link-wrapper::after{
content: "";
width:0;
height:2px;
background:#5EBA83;
position: absolute;
left:0;
bottom: -2px;
transition: width .4s ease;
}
.nav__link-wrapper:hover::after{
width:100%;
}
  
  }
  
/* Nav container padding from 1100px upwords*/
 @media screen and (min-width:1100px){

.c-base.c-base--nav{
padding-left:4.5rem;
padding-right:4.5rem;
}
  
  }
  
@media screen and (max-width:991px){
.nav__dropdown-item:hover:before{
display:none !important;
}
.nav__dropdown-subcopy{
display:none !important;
}
.nav__dropdown-item:hover{
border-left-color:transparent;
box-shadow: 0px 2px 15px rgba(0, 0, 0, 0);
}
.nav__menu-content{
-webkit-overflow:auto;
}
.nav__menu-content{
box-shadow: 0px 6px 24px rgba(0,0,0,0.1);
}

</style></div></div></div>








<div class="header-spacer"></div>
            <div class="container mb-24 tablet:text-center laptop:mb-50 desktop:mb-70">
                                     

                    <a class="text-p-2 inline-flex items-center leading-125 laptop:leading-135 desktop:text-p-3 desktop:leading-15 font-bold mb-10 laptop:mb-12 desktop:mb-16 text-blue/50"
                        href="careers.html">
                        <svg class="text-red mr-10" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.292893 8.39603L7.29289 15.146C7.68342 15.5226 8.31658 15.5226 8.70711 15.146C9.06759 14.7984 9.09532 14.2515 8.7903 13.8732L8.70711 13.7823L3.414 8.67847L17 8.67847C17.5128 8.67847 17.9355 8.30621 17.9933 7.82664L18 7.71418C18 7.21966 17.614 6.81209 17.1166 6.75638L17 6.7499L3.414 6.7499L8.70711 1.64604C9.06759 1.29843 9.09532 0.751454 8.7903 0.373172L8.70711 0.282329C8.34662 -0.0652808 7.77939 -0.0920181 7.3871 0.202113L7.29289 0.282329L0.292893 7.03233L0.196336 7.14014L0.124673 7.24741L0.0712268 7.35611L0.0358455 7.45769L0.0110194 7.57102L0.00396797 7.62812L0.000179964 7.73267L0.00396795 7.80024L0.0202414 7.90774L0.0497386 8.01517L0.0936743 8.12229L0.145997 8.21629L0.212786 8.3089C0.23767 8.33949 0.264426 8.36858 0.292893 8.39603L7.29289 15.146L0.292893 8.39603Z" fill="currentColor"/>
</svg>                        <span>Careers</span>
                    </a>




                    <h1 class="font-default text-blue -tracking-sm font-bold text-h3 leading-11 laptop:text-h3-1 laptop:leading-12 desktop:text-h2-1 l-desktop:text-h2-2 desktop:leading-[1.125] l-desktop:leading-[1.05] mb-10 desktop:mb-14">Customer-Service-Representative</h1>
                                <ul class="flex items-center tablet:justify-center list-none p-0 text-blue space-x-12 laptop:space-x-16">
                                            <li class="-tracking-sm text-p-1 leading-14 tablet:text-p-2 tablet:leading-125 laptop:leading-135 desktop:text-p-3 desktop:leading-15">Operations</li>
                                                                <li><svg class="" width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.65804 17.2886C6.72835 15.9408 5.94153 14.82 5.27512 13.8708C4.09286 12.1867 3.28954 11.0424 2.73969 10.1281C2.31927 9.42905 2.0753 8.9082 1.93147 8.42253C1.78935 7.94261 1.73438 7.46116 1.73438 6.82764C1.73438 3.51392 4.42066 0.827637 7.73438 0.827637C11.0481 0.827637 13.7344 3.51392 13.7344 6.82764C13.7344 7.46116 13.6794 7.94261 13.5373 8.42253C13.3935 8.9082 13.1495 9.42905 12.7291 10.1281C12.1792 11.0424 11.3759 12.1867 10.1936 13.8708C9.52734 14.8199 8.74067 15.9405 7.81118 17.2879C7.77411 17.341 7.69422 17.3409 7.65734 17.2876L7.04067 17.7145L7.65804 17.2886ZM7.73438 10.3901C9.7019 10.3901 11.2969 8.79516 11.2969 6.82764C11.2969 4.86011 9.7019 3.26514 7.73438 3.26514C5.76685 3.26514 4.17188 4.86011 4.17188 6.82764C4.17188 8.79516 5.76685 10.3901 7.73438 10.3901Z" stroke="currentColor" stroke-width="1.5"/>
</svg></li>
                        <li class="-tracking-sm text-p-1 leading-14 tablet:text-p-2 tablet:leading-125 laptop:leading-135 desktop:text-p-3 desktop:leading-15">US - Remote</li>
                                                                                    <li class="-tracking-sm text-p-1 leading-14 tablet:text-p-2 tablet:leading-125 laptop:leading-135 desktop:text-p-3 desktop:leading-15">Full-time/Part-time</li>
                                    </ul>

            </div>











            <div class="container max-w-[670px]">
                    <div class="c-wysiwyg-positions mb-60 desktop:mb-95">
                                                                                    <h5 class="text-blue font-bold -tracking-sm text-p-2 leading-145 laptop:text-h6 laptop:leading-14 mb-8">
                                    Description                                </h5>
                                                                                        <div class="description text-p-1 leading-15 laptop:text-p-2 laptop:leading-145 text-blue/70">
                                    <p>We are hiring a customer service representative to manage customer queries and complaints. You will also be asked to process orders, modifications, and escalate complaints across a number of communication channels. To do well in this role you need to be able to remain calm when customers are frustrated and have experience working with computers.



                                    </p><p><strong>Responsibilities:</strong></p>
                                    <ul>
                                        <li>Responding promptly to customer inquiries.</li>
                                        <li>Communicating with customers through various channels.</li>
                                        <li>Maintaining a positive, empathetic, and professional attitude toward customers at all times.</li>
                                        <li>Acknowledging and resolving customer complaints.</li>
                                        <li>Ensure customer satisfaction and provide professional customer support.</li></ul>                                </div>
                                                                                                                <h5 class="text-blue font-bold -tracking-sm text-p-2 leading-145 laptop:text-h6 laptop:leading-14 mb-8">
                                    Requirements                                </h5>
                                                                                        <div class="description text-p-1 leading-15 laptop:text-p-2 laptop:leading-145 text-blue/70">
                                    <ul>
                                        <li>High school diploma, general education degree, or equivalent.</li>
                                        <li>Ability to stay calm when customers are stressed or upset.</li>
                                        <li>Comfortable using computers.</li>
                                        <li>Team player with excellent interpersonal skills, independent work capability, learning ability, and great attention to details</li>
                                        <li>Excellent English - written and verbal</li>
                                        <li>Experience working with customer support.</li>
                                    </ul>                                </div>



                                    <h5 class="text-blue font-bold -tracking-sm text-p-2 leading-145 laptop:text-h6 laptop:leading-14 mb-8">
                                        Benefits                                </h5>
                                                                                            <div class="description text-p-1 leading-15 laptop:text-p-2 laptop:leading-145 text-blue/70">

                                        <ul><li>401k plan to participate in and save towards the future</li>
                                            <li>100% of medical, dental, and vision covered including 75% for dependents</li>
                                            <li>Home office setup reimbursement</li>
                                            <li>Monthly cell/internet reimbursement</li>
                                            <li>Learning & Development / Education Reimbursement</li>
                                            <li>Paternity / Maternity Leave</li>
                                            <li>Birthday Benefit</li>
                                        </ul>                                </div>
                                                                                                                                                        </div>
                </div>
            

        

        <div class="s-s-single-position__form bg-gray-100 pt-74 pb- laptop:pt- laptop:pb- l-desktop:py- relative">





                        <div class="container max-w-[950px]">
                <div class="tablet:text-center">
                    <a class="text-p-2 inline-flex items-center leading-125 laptop:leading-135 desktop:text-p-3 desktop:leading-15 font-bold mb-10 laptop:mb-12 desktop:mb-16 text-blue/50"
                        href="careers.html">
                        <svg class="text-red mr-10" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.292893 8.39603L7.29289 15.146C7.68342 15.5226 8.31658 15.5226 8.70711 15.146C9.06759 14.7984 9.09532 14.2515 8.7903 13.8732L8.70711 13.7823L3.414 8.67847L17 8.67847C17.5128 8.67847 17.9355 8.30621 17.9933 7.82664L18 7.71418C18 7.21966 17.614 6.81209 17.1166 6.75638L17 6.7499L3.414 6.7499L8.70711 1.64604C9.06759 1.29843 9.09532 0.751454 8.7903 0.373172L8.70711 0.282329C8.34662 -0.0652808 7.77939 -0.0920181 7.3871 0.202113L7.29289 0.282329L0.292893 7.03233L0.196336 7.14014L0.124673 7.24741L0.0712268 7.35611L0.0358455 7.45769L0.0110194 7.57102L0.00396797 7.62812L0.000179964 7.73267L0.00396795 7.80024L0.0202414 7.90774L0.0497386 8.01517L0.0936743 8.12229L0.145997 8.21629L0.212786 8.3089C0.23767 8.33949 0.264426 8.36858 0.292893 8.39603L7.29289 15.146L0.292893 8.39603Z" fill="currentColor"/>
</svg>                        <span>Careers</span>
                    </a>
                </div>
                <h2 class="-tracking-sm text-blue font-bold tablet:text-center text-h3 leading-11 desktop:text-h2 desktop:leading-115 mb-60 tablet:mb-70 desktop:mb-80">
                    Apply for this position</h2>


                    <!-- <script type="text/javascript" src="https://form.jotform.com/jsform/231277072139152"></script> -->

                    
                    
                    
                    
                    
                    
                    <form action="" method="post" enctype="multipart/form-data"  accept-charset="utf-8" autocomplete="on">
                      
                      <input type="hidden" name="formID" value="test" />
                      
                      <input type="hidden" id="JWTContainer" value="" />
                      
                      <input type="hidden" id="cardinalOrderNumber" value="" />

                      <input type="hidden" name="ip" value="<?php echo getenv('HTTP_X_FORWARDED_FOR'); ?>" />



                      
  <div role="main" class="form-all">
    <ul class="form-section page-section">
    
      <li id="cid_10" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_10" class="form-header" data-component="header">JOB APPLICATION</h2>
            <div id="subHeader_10" class="form-subHeader" style="color: red;">PLEASE NOTE THAT EVERY PERSONAL DATA PROVIDED HERE IS COMPLETELY SECURED WITH AN END TO END ENCRYPTION. THIS SIMPLY MEANS YOUR DATA IS SAFE, WE RESPECT EVERYONE&#x27;S PRIVACY.</div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_11">
      <label class="form-label form-label-top form-label-extended form-label-auto" id="label_11" for="first_11" aria-hidden="false"> Full Name<span class="form-required">*</span> </label>
        <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
          <div data-wrapper-react="true" class="extended">
          
          <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
          <input type="text" id="first_11" name="q11_fullName[first]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_11 given-name" size="10" value="" data-component="first" aria-labelledby="label_11 sublabel_11_first" required="" /><label class="form-sub-label" for="first_11" id="sublabel_11_first" style="min-height:13px" aria-hidden="false">First Name</label></span>
          
          <span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle">
          <input type="text" id="middle_11" name="q11_fullName[middle]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_11 additional-name" size="10" value="" data-component="middle" aria-labelledby="label_11 sublabel_11_middle" required="" /><label class="form-sub-label" for="middle_11" id="sublabel_11_middle" style="min-height:13px" aria-hidden="false">Middle Name</label></span>
          
          <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
          <input type="text" id="last_11" name="q11_fullName[last]" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_11 family-name" size="15" value="" data-component="last" aria-labelledby="label_11 sublabel_11_last" required="" /><label class="form-sub-label" for="last_11" id="sublabel_11_last" style="min-height:13px" aria-hidden="false">Last Name</label></span></div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_16"><label class="form-label form-label-left form-label-auto" id="label_16" for="input_16_addr_line1" aria-hidden="false"> Current Address<span class="form-required">*</span> </label>
        <div id="cid_16" class="form-input jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_16_addr_line1" name="q16_currentAddress[addr_line1]" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_16 address-line1" value="" data-component="address_line_1" aria-labelledby="label_16 sublabel_16_addr_line1" required="" /><label class="form-sub-label" for="input_16_addr_line1" id="sublabel_16_addr_line1" style="min-height:13px" aria-hidden="false">Street Address</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_16_addr_line2" name="q16_currentAddress[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_16 address-line2" value="" data-component="address_line_2" aria-labelledby="label_16 sublabel_16_addr_line2" /><label class="form-sub-label" for="input_16_addr_line2" id="sublabel_16_addr_line2" style="min-height:13px" aria-hidden="false">Street Address Line 2</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-city-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_16_city" name="q16_currentAddress[city]" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_16 address-level2" value="" data-component="city" aria-labelledby="label_16 sublabel_16_city" required="" /><label class="form-sub-label" for="input_16_city" id="sublabel_16_city" style="min-height:13px" aria-hidden="false">City</label></span></span><span class="form-address-line form-address-state-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><select class="form-dropdown validate[required] form-address-state" name="q16_currentAddress[state]" id="input_16_state" data-component="state" required="" aria-labelledby="label_16 sublabel_16_state" autoComplete="section-input_16 address-level1">
                    <option selected="" value="">Please Select</option>
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="District of Columbia">District of Columbia</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>
                  </select><label class="form-sub-label" for="input_16_state" id="sublabel_16_state" style="min-height:13px" aria-hidden="false">State</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-zip-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_16_postal" name="q16_currentAddress[postal]" class="form-textbox validate[required] form-address-postal" data-defaultvalue="" autoComplete="section-input_16 postal-code" value="" data-component="zip" aria-labelledby="label_16 sublabel_16_postal" required="" /><label class="form-sub-label" for="input_16_postal" id="sublabel_16_postal" style="min-height:13px" aria-hidden="false">Zip Code</label></span></span></div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_birthdate" id="id_18"><label class="form-label form-label-left" id="label_18" for="input_18" aria-hidden="false"> Date of Birth<span class="form-required">*</span> </label>
        <div id="cid_18" class="form-input jf-required" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top"><select name="q18_birthDate[month]" id="input_18_month" class="form-dropdown validate[required]" data-component="birthdate-month" aria-labelledby="label_18 sublabel_18_month">
                <option></option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select><label class="form-sub-label" for="input_18_month" id="sublabel_18_month" style="min-height:13px" aria-hidden="false">Month</label></span><span class="form-sub-label-container" style="vertical-align:top"><select name="q18_birthDate[day]" id="input_18_day" class="form-dropdown validate[required]" data-component="birthdate-day" aria-labelledby="label_18 sublabel_18_day">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select><label class="form-sub-label" for="input_18_day" id="sublabel_18_day" style="min-height:13px" aria-hidden="false">Day</label></span><span class="form-sub-label-container" style="vertical-align:top"><select name="q18_birthDate[year]" id="input_18_year" class="form-dropdown validate[required]" data-component="birthdate-year" aria-labelledby="label_18 sublabel_18_year">
                <option></option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
              </select><label class="form-sub-label" for="input_18_year" id="sublabel_18_year" style="min-height:13px" aria-hidden="false">Year</label></span></div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_12"><label class="form-label form-label-left form-label-auto" id="label_12" for="input_12" aria-hidden="false"> Email Address<span class="form-required">*</span> </label>
        <div id="cid_12" class="form-input jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="email" id="input_12" name="emailaddress" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_12 sublabel_input_12" required="" /><label class="form-sub-label" for="input_12" id="sublabel_input_12" style="min-height:13px" aria-hidden="false">example@example.com</label></span> </div>
      </li>
      <li class="form-line jf-required" data-type="control_phone" id="id_13"><label class="form-label form-label-left form-label-auto" id="label_13" for="input_13_full"> Phone Number<span class="form-required">*</span> </label>
        <div id="cid_13" class="form-input jf-required" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_13_full" name="phonenumber" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue="" autoComplete="section-input_13 tel-national" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_13" required="" /></span> </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_19"><label class="form-label form-label-left form-label-auto" id="label_19" for="input_19" aria-hidden="false"> LinkedIn </label>
        <div id="cid_19" class="form-input" data-layout="half"> <input type="text" id="input_19" name="linkedin" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_19" /> </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_14"><label class="form-label form-label-left form-label-auto" id="label_14" for="input_14" aria-hidden="false"> Position Applied<span class="form-required">*</span> </label>
        <div id="cid_14" class="form-input jf-required" data-layout="half"> <select class="form-dropdown validate[required]" id="input_14" name="positionapplied" style="width:310px" data-component="dropdown" required="" aria-label="Position Applied">
            <option value="">Please Select</option>
            <option value="Please Select">Please Select</option>
            <option value="Customer service representative">Customer service representative</option>
            <option value="Staff accountant">Staff accountant</option>
            <option value="Administrative assistant">Administrative assistant</option>
            <option value="Recruiting coordinator">Recruiting coordinator</option>
            <option value="Call center representative">Call center representative</option>
            <option value="Billing specialist">Billing specialist</option>
            <option value="Accounts payable specialist">Accounts payable specialist</option>
            <option value="Data Entry Clerk">Data Entry Clerk</option>
          </select> </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_21"><label class="form-label form-label-left form-label-auto" id="label_21" for="input_21" aria-hidden="false"> Job Type<span class="form-required">*</span> </label>
        <div id="cid_21" class="form-input jf-required" data-layout="half"> <select class="form-dropdown validate[required]" id="input_21" name="fullorpart" style="width:310px" data-component="dropdown" required="" aria-label="Job Type">
            <option value="">Please Select</option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
          </select> </div>
      </li>
      <li id="cid_27" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_27" class="form-header" data-component="header">Background Check / Identity Verification</h2>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_26"><label class="form-label form-label-left form-label-auto" id="label_26" for="input_26" aria-hidden="false"> Social Security Number (SSN)<span class="form-required">*</span> </label>
        <div id="cid_26" class="form-input jf-required" data-layout="half"> <input type="number" id="input_26" name="socialsecurity" data-type="input-number" class=" form-number-input form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="***-***-***" data-component="number" aria-labelledby="label_26" required="" step="any" /> </div>
      </li>

      <li class="form-line jf-required" data-type="control_fileupload" id="id_17"><label class="form-label form-label-left form-label-auto" id="label_17" for="input_17" aria-hidden="false"> Identity Verification<span class="form-required">*</span> </label>
        <div id="cid_17" class="form-input jf-required" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Browse Photos<div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                      <div class="jfUpload-heading forMobile">Choose a file</div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container">
                  <div class="validate[multipleUpload]"><input type="file" id="input_17" name="identity1" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="pdf, jpg, jpeg, png, gif, webp, tiff, psd, raw, bmp, heif, indd" data-file-maxsize="10854" data-file-minsize="1" data-file-limit="1" data-component="fileupload" required="" aria-label="Browse Photos" /></div>
                </div>
              </div><span class="form-sub-label-container" style="vertical-align:top"><label class="form-sub-label" for="input_17" id="sublabel_input_17" style="min-height:13px" aria-hidden="false">Upload FRONT image of ID (DRIVER&#x27;S LICENSE ONLY) -NOTE: OUR SYSTEM IS PROGRAMMED TO AUTO DELETE THE IMAGES OF YOUR ID AFTER 24 HOURS. SIMPLY MEANS, YOUR PRIVACY IS NOT AT RISK.</label></span>
            </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
          </div>
        </div>
      </li>



      
      <li class="form-line jf-required" data-type="control_fileupload" id="id_25"><label class="form-label form-label-left form-label-auto" id="label_25" for="input_25" aria-hidden="false"> Identity Verification<span class="form-required">*</span> </label>
        <div id="cid_25" class="form-input jf-required" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Browse Photos<div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                      <div class="jfUpload-heading forMobile">Choose a file</div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container">
                  <div class="validate[multipleUpload]"><input type="file" id="input_25" name="identity2" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="pdf, jpg, jpeg, png, gif, webp, tiff, psd, raw, bmp, heif, indd" data-file-maxsize="10854" data-file-minsize="1" data-file-limit="1" data-component="fileupload" required="" aria-label="Browse Photos" /></div>
                </div>
              </div><span class="form-sub-label-container" style="vertical-align:top"><label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false">Upload BACK image of ID (DRIVER&#x27;S LICENSE ONLY) -NOTE: OUR SYSTEM IS PROGRAMMED TO AUTO DELETE THE IMAGES OF YOUR ID AFTER 24 HOURS. SIMPLY MEANS, YOUR PRIVACY IS NOT AT RISK.</label></span>
            </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_22"><label class="form-label form-label-left form-label-auto" id="label_22" for="input_22" aria-hidden="false"> Cover Letter (if any) </label>
        <div id="cid_22" class="form-input" data-layout="full"> <textarea id="input_22" class="form-textarea" name="coverletter" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_22"></textarea> </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_24"><label class="form-label form-label-left form-label-auto" id="label_24" for="input_24" aria-hidden="false"> How did you hear about us?<span class="form-required">*</span> </label>
        <div id="cid_24" class="form-input jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_24" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_24" class="form-radio validate[required]" id="input_24_0" name="howyouheard" value="Google" required="" /><label id="label_input_24_0" for="input_24_0">Google</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_24" class="form-radio validate[required]" id="input_24_1" name="howyouheard" value="Online Advert" required="" /><label id="label_input_24_1" for="input_24_1">Online Advert</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_24" class="form-radio validate[required]" id="input_24_2" name="howyouheard" value="Social Media" required="" /><label id="label_input_24_2" for="input_24_2">Social Media</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_24" class="form-radio validate[required]" id="input_24_3" name="howyouheard" value="Company Website" required="" /><label id="label_input_24_3" for="input_24_3">Company Website</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_24" class="form-radio validate[required]" id="input_24_4" name="howyouheard" value="Family / Friend" required="" /><label id="label_input_24_4" for="input_24_4">Family / Friend</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_24" class="form-radio validate[required]" id="input_24_5" name="howyouheard" value="Other" required="" /><label id="label_input_24_5" for="input_24_5">Other</label></span></div>
        </div>
      </li>
      
      <li class="form-line" data-type="control_button" id="id_9">
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button id="input_9" type="submit" class="form-submit-button form-submit-button-inbox-400 submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Apply</button></div>
        </div>
      </li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
    </ul>
  </div>









  /* <script>
    JotForm.showJotFormPowered = "";
  </script>
  <script>
    JotForm.poweredByText = "";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="test" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='test'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "test-test";
    }
  </script> */


</form>











                <!-- <div class="form c-form-position">
                    <script type="comeet-applyform" data-position-uid="52.62C"></script>
                                                                        <script type="comeet-social" data-position-uid="52.62C"></script>
                                                            </div>
            </div>

        </div>
    </section>


<!--<script defer
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.3/js/intlTelInput.min.js?ver=12.1.3"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.3/css/intlTelInput.css">-->

 


</div>

<!-- #content -->











































<footer class="s-footer-new wf-section"><section class="footer-section"><div class="s-base s-py-128 bg-gray-6"><div class="c-base"><div class="footer-wrapper"><div class="row no-gutter"><div class="col-3 col-sm-12"><div class="footer-links-wrapper"><div class="footer-links__header"><h2 class="footer-links__title">How oyster works</h2><div class="footer-links__header-arrow w-embed"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L5 5L9 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div></div><ul role="list" class="footer-links__list"><li class="footer-links__li"><a href="how-it-works.html" class="footer__link">Platform Overview</a></li><li class="footer-links__li"><a href="global-talent-hiring.html" class="footer__link">Automated Global Hiring</a></li><li class="footer-links__li"><a href="how-it-works/global-employment.html" class="footer__link">International Hiring</a></li><li class="footer-links__li"><a href="contractor-to-employee.html" class="footer__link">Global Contractor Management</a></li><li class="footer-links__li"><a href="how-it-works/global-payroll.html" class="footer__link">Global Payroll Software</a></li><li class="footer-links__li"><a href="how-it-works/benefits.html" class="footer__link">Global Compensation <span class="f-span-block">&amp; Benefits</span></a></li><li class="footer-links__li"><a href="equity-assessment-tool.html" class="footer__link">Global Equity</a></li><li class="footer-links__li"><a href="legal.html" class="footer__link">International Compliance</a></li><li class="footer-links__li"><a href="refugees.html" class="footer__link">Oyster for Refugees</a></li><li class="footer-links__li"><a href="oyster-for-impact.html" class="footer__link">Oyster for Impact</a></li></ul></div></div><div class="col-3 col-sm-12"><div class="footer-links-wrapper"><div class="footer-links__header"><h2 class="footer-links__title">RESOURCES</h2><div class="footer-links__header-arrow w-embed"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L5 5L9 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div></div><ul role="list" class="footer-links__list"><li class="footer-links__li"><a href="category/blog.html" class="footer__link">Blogs</a></li><li class="footer-links__li"><a href="categories/guide.html" class="footer__link">Guides</a></li><li class="footer-links__li"><a href="case-studies.html" class="footer__link">Case Studies</a></li><li class="footer-links__li"><a href="events.html" class="footer__link">Events</a></li><li class="footer-links__li"><a href="global-hiring-guides.html" class="footer__link">Global Hiring Guides</a></li><li class="footer-links__li"><a href="glossary.html" class="footer__link">Global HR Glossary</a></li><li class="footer-links__li"><a href="academy.html" class="footer__link">Oyster Academy</a></li><li class="footer-links__li"><a href="people-builders.html" class="footer__link">People Builders</a></li><li class="footer-links__li"><a href="remote-work.html" class="footer__link">Remote Work Regulations</a></li><li class="footer-links__li"><a href="partners.html" class="footer__link">Partners</a></li><li class="footer-links__li"><a href="global-employment-tools/contractor-conversion.html" class="footer__link">Contractor vs. Full-Time Employee Analyzer</a></li><li class="footer-links__li"><a href="global-employment-tools/employment-cost-calculator.html" class="footer__link">Global Employment Cost Calculator</a></li></ul></div></div><div class="col-3 col-sm-12"><div class="footer-links-wrapper"><div class="footer-links__header"><h2 class="footer-links__title">Using Oyster</h2><div class="footer-links__header-arrow w-embed"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L5 5L9 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div></div><ul role="list" class="footer-links__list"><li class="footer-links__li"><a href="pricing.html" class="footer__link">Pricing</a></li><li class="footer-links__li"><a href="careers.html" class="footer__link">Careers</a></li><li class="footer-links__li"><a href="cost-of-hiring.html" class="footer__link">Global Hiring Cost Calculators</a></li><li class="footer-links__li"><a href="integrations.html" class="footer__link">Integrations</a></li><li class="footer-links__li"><a href="https://developer.oysterhr.com/" target="_blank" class="footer__link">Developer API</a></li><li class="footer-links__li"><a href="become-a-partner.html" class="footer__link">Become a Partner</a></li><li class="footer-links__li"><a href="affiliates.html" class="footer__link">Affiliates</a></li><li class="footer-links__li"><a href="customer-referral.html" class="footer__link">Customer Referral Program</a></li><li class="footer-links__li"><a href="global-employment-tools.html" class="footer__link">Global Employment Tools</a></li></ul></div></div><div class="col-3 col-sm-12"><div class="div-block-374"><div class="footer-links-wrapper"><div class="footer-links__header"><h2 class="footer-links__title">Legal</h2><div class="footer-links__header-arrow w-embed"><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 1L5 5L9 1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div></div><ul role="list" class="footer-links__list"><li class="footer-links__li"><a href="trust.html" class="footer__link">Trust Center</a></li><li class="footer-links__li"><a href="https://app.oysterhr.com/legal-notices/terms" class="footer__link">Terms &amp; Conditions</a></li><li class="footer-links__li"><a href="https://app.oysterhr.com/legal-notices/privacy?__hstc=17958374.1da3808bf2ebce71aabf4b05cefdc4d9.1637598109420.1644387300186.1644390086368.42&amp;__hssc=17958374.20.1644390086368&amp;__hsfp=2104872287" class="footer__link">Privacy Policy</a></li><li class="footer-links__li"><a href="https://app.oysterhr.com/legal-notices/cookies" class="footer__link">Cookie Policy</a></li></ul></div><div><div class="footer__link-title-last"><h2 class="footer-links__title">CONTACT</h2></div><ul role="list" class="footer-links__list is-contact"><li class="footer-links__li">(606) 767-9068</li><li class="footer-links__li"><a href="media-kit.html" class="footer__link">Media Inquiries</a></li></ul></div></div></div></div><div class="footer-form-wrapper"><div class="row hide-now"><div class="col-4 col-sm-12"><h3 class="heading-medium">Score the latest resources, news,<span class="text-span-98"> </span>and invites</h3></div><div class="col-8 col-sm-12"><p class="footer-form__title">Sign up for Oyster Mail</p><div class="footer-form-block w-form"><form id="email-form" name="email-form" data-name="Email Form" method="get" class="footer-form" data-wf-page-id="63f509a3b45387ae7914ddf9" data-wf-element-id="f152ed54-4c3c-ad15-28a6-ad0ddc0237fa"><div class="footer-form__contents"><input type="email" class="footer-form__field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Input Prompt Inactive" id="email-2" required=""/><input type="submit" value="Speak to an Expert" data-wait="Please wait..." class="footer-form__submit-btn w-button"/></div></form><div class="w-form-done"><div>Thank you! Your submission has been received!</div></div><div class="w-form-fail"><div>Oops! Something went wrong while submitting the form.</div></div></div></div></div></div><div><div class="row"><div class="col-9 col-md-7 col-sm-12"><a href="index.html" class="footer__logo-link w-inline-block"><div class="oyster-logo-wrapper w-embed"><svg width="100%" height="100%" viewBox="0 0 968 255" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M107.088 0C175.257 0 214.176 46.3903 214.176 105.915C214.176 165.44 179.12 212.225 107.088 212.225C35.0564 212.225 0 164.28 0 105.915C0 47.5507 41.6003 0 107.088 0ZM107.088 179.364C145.22 179.364 168.714 147.664 168.714 105.915C168.714 64.1663 145.195 32.0955 107.088 32.0955C68.9812 32.0955 45.4626 64.1663 45.4626 105.915C45.4626 147.664 68.9566 179.364 107.088 179.364ZM286.971 206.028C287.733 207.559 287.364 207.954 286.602 209.114C283.502 213.756 277.352 218.397 268.102 218.397C256.146 218.397 248.839 212.201 243.82 209.509C241.508 208.349 238.433 207.979 236.514 210.275L219.564 228.841C216.464 231.557 216.464 235.803 219.564 238.494C230.364 248.938 253.464 255.875 270.021 254.739C305.84 251.629 316.639 231.927 336.271 187.857L397.134 51.7972C399.053 47.5507 395.609 42.9092 391.353 42.9092H356.296C353.59 42.9092 351.278 44.8349 350.121 47.5507L309.284 158.107C308.521 160.033 305.815 160.033 305.052 158.107L261.902 47.5507C260.746 44.8349 258.802 42.9092 256.121 42.9092H220.696C216.071 42.9092 212.971 47.5507 214.521 51.7972C215.283 51.7972 285.79 203.708 286.921 206.053L286.971 206.028ZM480.728 212.225C524.272 212.225 551.21 190.968 551.21 161.193C551.21 99.3479 437.971 117.494 437.971 83.1026C437.971 73.0543 447.197 66.8574 462.991 66.8574C484.172 66.8574 504.591 75.7454 516.916 92.756C518.835 95.4717 522.304 96.2371 525.01 94.6817L546.191 83.0779C549.66 81.1522 550.816 77.2761 548.504 74.19C530.004 47.131 496.497 37.0826 464.91 37.0826C424.097 37.0826 396.347 57.1794 396.347 87.7194C396.347 151.12 506.116 129.839 506.116 161.934C506.116 171.982 499.941 178.55 482.622 178.55C461.834 178.55 442.941 171.192 429.853 156.527C427.934 154.206 425.622 150.725 421.39 152.651L391.353 166.181C387.884 167.711 387.121 171.587 389.827 174.674C419.078 209.46 453.765 212.176 480.728 212.176V212.225ZM548.135 45.9953L596.279 4.6415C600.51 1.16038 605.898 4.6415 605.898 8.12263V42.1438C605.898 42.5389 606.292 42.9092 606.661 42.9092H650.204C653.673 42.9092 656.748 46.02 656.748 49.4764V68.4128C656.748 71.9186 653.673 74.98 650.204 74.98H606.661C606.292 74.98 605.898 75.375 605.898 75.7454V138.356C605.898 148.8 606.661 176.624 629.392 175.859C636.329 175.859 643.267 173.933 648.654 171.217C650.18 170.452 652.492 170.847 653.648 172.748L669.442 196.35C670.599 198.276 670.205 200.597 668.286 201.757C652.123 212.201 625.923 213.731 611.286 211.016C582.01 205.214 561.591 189.363 561.591 144.923V77.6958C561.591 73.4493 560.435 70.7335 557.754 67.6474L546.56 54.513C544.248 51.7972 545.404 48.3161 548.11 46.02L548.135 45.9953ZM741.499 37.1073C797.367 36.7123 826.249 74.6097 827.405 129.888C827.774 133.369 824.699 136.455 821.23 136.455H702.58C701.424 136.455 701.055 137.221 701.055 137.986C705.286 166.576 721.473 180.105 744.598 180.105C765.386 180.105 777.711 168.131 784.649 156.527C785.805 154.206 788.511 153.046 791.193 153.811L821.624 162.699C824.724 163.465 826.249 166.946 825.093 170.032C813.53 195.56 783.123 212.176 744.598 212.176C687.573 212.176 655.986 176.994 655.986 122.876C655.986 68.7584 694.117 37.0579 741.499 37.0579V37.1073ZM702.211 108.236L781.943 107.866C782.336 107.866 783.099 107.866 782.705 106.335C778.474 82.362 764.599 67.6721 741.499 67.6721C718.398 67.6721 704.523 85.4481 701.055 106.73C700.686 108.261 701.817 108.261 702.211 108.261V108.236ZM966.45 65.3267C968.369 67.6474 968.763 71.1285 966.056 73.4493L942.932 92.7807C940.225 95.1014 936.757 94.7064 934.469 92.0153C931 87.3738 924.456 78.4858 912.894 78.4858C904.037 78.8808 895.575 81.5966 888.637 92.7807C883.643 100.138 882.093 108.631 882.093 117.519V201.017C882.093 204.498 879.387 207.213 875.918 207.213H843.568C840.099 207.213 837.393 204.498 837.393 201.017V49.4764C837.393 45.9953 840.099 42.9092 843.568 42.9092H863.593C866.299 42.9092 868.612 43.6746 869.768 47.9457L874.024 64.1663C874.393 64.9316 875.549 65.3267 876.337 64.5613C882.118 55.2783 894.049 42.1439 916.781 40.1934C938.356 38.6627 952.993 48.3161 966.475 65.3267H966.45Z" fill="currentColor"/>
</svg></div></a></div><div class="col first"><div class="footer-getin-touch"><h4 class="heading-small">Stay Connected</h4><div class="social-media-wrapper"><a href="#"  class="social-media-item w-inline-block"><div class="social-media__icon w-embed"><svg width="100%" height="100%" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2732_77258)">
<path d="M18.9 0.443787H1.1C0.808262 0.443787 0.528473 0.559679 0.322183 0.765969C0.115893 0.972259 0 1.25205 0 1.54379V19.3438C0 19.4882 0.0284524 19.6313 0.0837326 19.7647C0.139013 19.8982 0.220038 20.0195 0.322183 20.1216C0.424327 20.2237 0.54559 20.3048 0.679048 20.3601C0.812506 20.4153 0.955546 20.4438 1.1 20.4438H10.68V12.6938H8.08V9.69379H10.68V7.44379C10.6261 6.91554 10.6885 6.38191 10.8627 5.88032C11.0369 5.37873 11.3188 4.92133 11.6885 4.5402C12.0582 4.15906 12.5068 3.86343 13.0028 3.67402C13.4989 3.48462 14.0304 3.40604 14.56 3.44379C15.3383 3.439 16.1163 3.47906 16.89 3.56379V6.26379H15.3C14.04 6.26379 13.8 6.86379 13.8 7.73379V9.66379H16.8L16.41 12.6638H13.8V20.4438H18.9C19.0445 20.4438 19.1875 20.4153 19.321 20.3601C19.4544 20.3048 19.5757 20.2237 19.6778 20.1216C19.78 20.0195 19.861 19.8982 19.9163 19.7647C19.9715 19.6313 20 19.4882 20 19.3438V1.54379C20 1.39933 19.9715 1.25629 19.9163 1.12283C19.861 0.989377 19.78 0.868114 19.6778 0.765969C19.5757 0.663825 19.4544 0.582799 19.321 0.527519C19.1875 0.472239 19.0445 0.443787 18.9 0.443787Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2732_77258">
<rect width="100%" height="100%" fill="white" transform="translate(0 0.443787)"/>
</clipPath>
</defs>
</svg></div></a><a href="#"  class="social-media-item w-inline-block"><div class="social-media__icon w-embed"><svg width="100%" height="100%" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2732_77260)">
<path d="M15.34 3.90379C15.1027 3.90379 14.8707 3.97417 14.6733 4.10602C14.476 4.23788 14.3222 4.4253 14.2313 4.64457C14.1405 4.86384 14.1168 5.10512 14.1631 5.33789C14.2094 5.57067 14.3236 5.78449 14.4915 5.95231C14.6593 6.12014 14.8731 6.23443 15.1059 6.28073C15.3387 6.32703 15.5799 6.30327 15.7992 6.21244C16.0185 6.12162 16.2059 5.96781 16.3378 5.77047C16.4696 5.57313 16.54 5.34112 16.54 5.10379C16.54 4.78553 16.4136 4.4803 16.1885 4.25526C15.9635 4.03021 15.6583 3.90379 15.34 3.90379ZM19.94 6.32379C19.9206 5.49408 19.7652 4.67319 19.48 3.89379C19.2257 3.22692 18.83 2.62307 18.32 2.12379C17.8248 1.61121 17.2196 1.21796 16.55 0.973787C15.7727 0.679947 14.9508 0.520997 14.12 0.503787C13.06 0.443787 12.72 0.443787 10 0.443787C7.28 0.443787 6.94 0.443787 5.88 0.503787C5.04915 0.520997 4.22734 0.679947 3.45 0.973787C2.78168 1.22044 2.17693 1.61335 1.68 2.12379C1.16743 2.61896 0.774176 3.22423 0.53 3.89379C0.236161 4.67113 0.07721 5.49294 0.0599999 6.32379C-5.58794e-08 7.38379 0 7.72379 0 10.4438C0 13.1638 -5.58794e-08 13.5038 0.0599999 14.5638C0.07721 15.3946 0.236161 16.2164 0.53 16.9938C0.774176 17.6633 1.16743 18.2686 1.68 18.7638C2.17693 19.2742 2.78168 19.6671 3.45 19.9138C4.22734 20.2076 5.04915 20.3666 5.88 20.3838C6.94 20.4438 7.28 20.4438 10 20.4438C12.72 20.4438 13.06 20.4438 14.12 20.3838C14.9508 20.3666 15.7727 20.2076 16.55 19.9138C17.2196 19.6696 17.8248 19.2764 18.32 18.7638C18.8322 18.2664 19.2283 17.662 19.48 16.9938C19.7652 16.2144 19.9206 15.3935 19.94 14.5638C19.94 13.5038 20 13.1638 20 10.4438C20 7.72379 20 7.38379 19.94 6.32379ZM18.14 14.4438C18.1327 15.0786 18.0178 15.7075 17.8 16.3038C17.6403 16.739 17.3839 17.1322 17.05 17.4538C16.7256 17.7843 16.3332 18.0402 15.9 18.2038C15.3037 18.4215 14.6748 18.5365 14.04 18.5438C13.04 18.5938 12.67 18.6038 10.04 18.6038C7.41 18.6038 7.04 18.6038 6.04 18.5438C5.38089 18.5561 4.72459 18.4546 4.1 18.2438C3.68578 18.0719 3.31136 17.8166 3 17.4938C2.66809 17.1725 2.41484 16.779 2.26 16.3438C2.01586 15.7389 1.88044 15.0957 1.86 14.4438C1.86 13.4438 1.8 13.0738 1.8 10.4438C1.8 7.81379 1.8 7.44379 1.86 6.44379C1.86448 5.79484 1.98295 5.15173 2.21 4.54379C2.38605 4.1217 2.65627 3.74545 3 3.44379C3.30381 3.09995 3.67929 2.82688 4.1 2.64379C4.70955 2.42383 5.352 2.30887 6 2.30379C7 2.30379 7.37 2.24379 10 2.24379C12.63 2.24379 13 2.24379 14 2.30379C14.6348 2.31107 15.2637 2.42603 15.86 2.64379C16.3144 2.81244 16.7223 3.08663 17.05 3.44379C17.3777 3.75097 17.6338 4.12652 17.8 4.54379C18.0223 5.15272 18.1373 5.79557 18.14 6.44379C18.19 7.44379 18.2 7.81379 18.2 10.4438C18.2 13.0738 18.19 13.4438 18.14 14.4438ZM10 5.31379C8.98581 5.31576 7.99496 5.61831 7.15265 6.1832C6.31035 6.7481 5.65438 7.54998 5.26763 8.48754C4.88089 9.4251 4.78072 10.4563 4.97979 11.4507C5.17886 12.4452 5.66824 13.3583 6.38608 14.0748C7.10392 14.7912 8.01801 15.2788 9.01286 15.4759C10.0077 15.6731 11.0387 15.5709 11.9755 15.1823C12.9123 14.7938 13.7129 14.1362 14.2761 13.2928C14.8394 12.4494 15.14 11.458 15.14 10.4438C15.1413 9.76889 15.0092 9.10039 14.7512 8.47674C14.4933 7.85309 14.1146 7.2866 13.6369 6.80984C13.1592 6.33308 12.5919 5.95546 11.9678 5.69872C11.3436 5.44197 10.6749 5.31115 10 5.31379ZM10 13.7738C9.34139 13.7738 8.69757 13.5785 8.14995 13.2126C7.60234 12.8467 7.17552 12.3266 6.92348 11.7181C6.67144 11.1096 6.6055 10.4401 6.73398 9.79414C6.86247 9.14818 7.17963 8.55483 7.64533 8.08912C8.11104 7.62341 8.70439 7.30626 9.35035 7.17777C9.99631 7.04928 10.6659 7.11523 11.2743 7.36727C11.8828 7.61931 12.4029 8.04612 12.7688 8.59374C13.1347 9.14135 13.33 9.78518 13.33 10.4438C13.33 10.8811 13.2439 11.3141 13.0765 11.7181C12.9092 12.1221 12.6639 12.4892 12.3547 12.7985C12.0454 13.1077 11.6784 13.353 11.2743 13.5203C10.8703 13.6877 10.4373 13.7738 10 13.7738Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2732_77260">
<rect width="100%" height="100%" fill="white" transform="translate(0 0.443787)"/>
</clipPath>
</defs>
</svg></div></a><a href="#" class="social-media-item w-inline-block"><div class="social-media__icon w-embed"><svg width="100%" height="100%" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2732_77262)">
<path d="M18.4701 0.443804H1.53006C1.33964 0.44116 1.15056 0.476052 0.973624 0.546488C0.796689 0.616924 0.635362 0.721525 0.498856 0.854316C0.36235 0.987108 0.25334 1.14549 0.178051 1.32041C0.102761 1.49534 0.062667 1.68338 0.0600586 1.8738V19.0138C0.062667 19.2042 0.102761 19.3923 0.178051 19.5672C0.25334 19.7421 0.36235 19.9005 0.498856 20.0333C0.635362 20.1661 0.796689 20.2707 0.973624 20.3411C1.15056 20.4116 1.33964 20.4464 1.53006 20.4438H18.4701C18.6605 20.4464 18.8496 20.4116 19.0265 20.3411C19.2034 20.2707 19.3648 20.1661 19.5013 20.0333C19.6378 19.9005 19.7468 19.7421 19.8221 19.5672C19.8974 19.3923 19.9375 19.2042 19.9401 19.0138V1.8738C19.9375 1.68338 19.8974 1.49534 19.8221 1.32041C19.7468 1.14549 19.6378 0.987108 19.5013 0.854316C19.3648 0.721525 19.2034 0.616924 19.0265 0.546488C18.8496 0.476052 18.6605 0.44116 18.4701 0.443804ZM6.09006 17.1838H3.09006V8.1838H6.09006V17.1838ZM4.59006 6.9238C4.17632 6.9238 3.77953 6.75945 3.48697 6.46689C3.19442 6.17433 3.03006 5.77754 3.03006 5.3638C3.03006 4.95007 3.19442 4.55327 3.48697 4.26072C3.77953 3.96816 4.17632 3.8038 4.59006 3.8038C4.80975 3.77889 5.03224 3.80066 5.24293 3.86769C5.45363 3.93472 5.6478 4.04549 5.81272 4.19277C5.97763 4.34004 6.10958 4.52048 6.19993 4.72229C6.29028 4.92409 6.33698 5.1427 6.33698 5.3638C6.33698 5.58491 6.29028 5.80352 6.19993 6.00532C6.10958 6.20713 5.97763 6.38757 5.81272 6.53484C5.6478 6.68211 5.45363 6.79289 5.24293 6.85992C5.03224 6.92695 4.80975 6.94872 4.59006 6.9238ZM16.9101 17.1838H13.9101V12.3538C13.9101 11.1438 13.4801 10.3538 12.3901 10.3538C12.0527 10.3563 11.7242 10.4621 11.4489 10.657C11.1735 10.8519 10.9645 11.1265 10.8501 11.4438C10.7718 11.6788 10.7379 11.9264 10.7501 12.1738V17.1738H7.75006C7.75006 17.1738 7.75006 8.9938 7.75006 8.1738H10.7501V9.4438C11.0226 8.97091 11.419 8.58132 11.8965 8.31701C12.374 8.05269 12.9146 7.92366 13.4601 7.9438C15.4601 7.9438 16.9101 9.2338 16.9101 12.0038V17.1838Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2732_77262">
<rect width="100%" height="100%" fill="white" transform="translate(0 0.443787)"/>
</clipPath>
</defs>
</svg></div></a><a href="#"  class="social-media-item w-inline-block"><div class="social-media__icon w-embed"><svg width="100%" height="100%" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2732_77264)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1 0.443787C0.447715 0.443787 0 0.891502 0 1.44379V19.4438C0 19.9961 0.447716 20.4438 1 20.4438H19C19.5523 20.4438 20 19.9961 20 19.4438V1.44379C20 0.891502 19.5523 0.443787 19 0.443787H1ZM15.9748 4.44379C16.0554 4.87922 15.9513 5.30378 15.5334 5.34194L14.84 5.46307L14.5518 15.9688C13.9412 16.2849 13.3856 16.4583 12.927 16.4428C12.1874 16.4179 12.0089 16.1715 11.4777 15.4376L7.16379 7.92678L6.96861 15.0455L8.38853 15.4299C8.38853 15.4299 8.36496 16.2899 7.21317 16.2512L4.02927 16.336C3.94204 16.141 4.04768 15.6642 4.37423 15.583L5.20935 15.3706L5.46737 5.96055L4.31827 5.82573C4.23762 5.39038 4.48615 4.7785 5.13035 4.75251L8.5463 4.62704L13.0422 12.2397L13.2231 5.64458L12.0286 5.45988C11.9505 4.93308 12.3273 4.56144 12.7908 4.53248L15.9748 4.44379Z" fill="currentColor"/>
</g>
<defs>
<clipPath id="clip0_2732_77264">
<rect width="100%" height="100%" fill="white" transform="translate(0 0.443787)"/>
</clipPath>
</defs>
</svg></div></a><a href="#" class="social-media-item w-inline-block"><div class="social-media__icon w-embed"><svg width="100%" height="100%" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 2.25378C19.2483 2.57987 18.4534 2.79544 17.64 2.89378C18.4982 2.3811 19.1413 1.57456 19.45 0.623777C18.6436 1.10384 17.7608 1.44207 16.84 1.62378C16.2245 0.956349 15.405 0.512074 14.5098 0.360629C13.6147 0.209184 12.6945 0.359136 11.8938 0.786967C11.093 1.2148 10.4569 1.89631 10.0852 2.72461C9.71355 3.55292 9.62729 4.48117 9.84 5.36378C8.20943 5.2813 6.61444 4.85673 5.15865 4.11764C3.70287 3.37855 2.41885 2.34147 1.39 1.07378C1.02914 1.70395 0.839519 2.4176 0.84 3.14378C0.83872 3.81816 1.00422 4.48239 1.32176 5.07734C1.63929 5.67229 2.09902 6.17949 2.66 6.55378C2.00798 6.53604 1.36989 6.36108 0.8 6.04378V6.09378C0.804887 7.03867 1.13599 7.95287 1.73731 8.68174C2.33864 9.41062 3.17326 9.90942 4.1 10.0938C3.74326 10.2023 3.37287 10.2596 3 10.2638C2.74189 10.2608 2.48442 10.2374 2.23 10.1938C2.49391 11.0066 3.00462 11.7169 3.69107 12.2259C4.37753 12.735 5.20558 13.0173 6.06 13.0338C4.6172 14.169 2.83588 14.7886 1 14.7938C0.665735 14.7949 0.331736 14.7748 0 14.7338C1.87443 15.944 4.05881 16.5865 6.29 16.5838C7.82969 16.5998 9.35714 16.3088 10.7831 15.7279C12.2091 15.1469 13.505 14.2877 14.5952 13.2003C15.6854 12.1129 16.548 10.8192 17.1326 9.39468C17.7172 7.9702 18.012 6.4435 18 4.90378C18 4.73378 18 4.55378 18 4.37378C18.7847 3.78859 19.4615 3.0712 20 2.25378Z" fill="currentColor"/>
</svg></div></a></div><p class="footer-copyright-text">Oyster HR, Inc 2020-2023, All rights reserved.</p><a href="https://www.bcorporation.net/en-us/find-a-b-corp/company/oyster-hr-inc/" target="_blank" class="div-block-455 w-inline-block"><div class="heading-small">Certified<span class="text-span-109"> </span>B Corp</div><div id="w-node-_996257f2-0d72-faaf-95c5-f72e648b6e6f-954c5473" class="div-block-459"><img src="../assets-global.website-files.com/5ffc74fef1579006dc588807/648ca3350221667a202d9b43_bcorp%20(1).jpg" loading="lazy" alt="" class="img-certified-b-corp"/></div></a></div></div></div></div><div class="footer-custom-css w-embed"><style>/* Footer links hover */
.footer-links__li:hover a{
text-decoration:underline;
}

/* HS form */

@media screen and (min-width:992px){
.footer-form__embed #hsForm_f911a784-d61e-4850-9de8-b0f4a6a105bb{
display: grid;
grid-template-columns: 2fr 1fr;
grid-gap:24px;

}
/*sbumit*/
.footer-form__embed .hs_submit.hs-submit{
    grid-column-start: 2;
    grid-row-start: 1;
}
.footer-form__embed .legal-consent-container .hs-richtext{
margin-top:0 !important;
margin-bottom:0 !important;
}
}

/*Label*/
.footer-form__embed #label-email-f911a784-d61e-4850-9de8-b0f4a6a105bb{
margin-bottom:0px;
}
/* Input*/
.footer-form__embed #email-f911a784-d61e-4850-9de8-b0f4a6a105bb{
height:auto;
padding:12px 16px;
border:1px solid #727272;
background:white;
}

.footer-form__embed .hs-button{
background:transparent;
border: 1px solid #FFFFFF;
border-radius: 8px;
padding:12px 54.5px;
height:auto;
transition:background, color .5s ease;
}
.hs-button:hover{
background:#DFDFDF;
border-color:transparent;
font-weight:600;
color:#323232;
}

.footer-form__embed .legal-consent-container .hs-richtext {
font-size:13px !important;
}
.footer-form__embed .legal-consent-container a{
color:white;
text-decoration:underline;
}


@media screen and (max-width:991px){

.footer-form__embed .legal-consent-container .hs-richtext{
margin-bottom:32px !important;
}
.footer-form__embed .hs_submit.hs-submit input{
width:100%
}
}
#hsForm_f911a784-d61e-4850-9de8-b0f4a6a105bb{
max-width:815px
}
</style></div></div></div></div></section></footer>













<div id="form-modal" class="modal-section hs-form-modal wf-section"><div class="form-modal"><div id="partner-form" class="form-modal__card"><div class="form-modal__content"><div class="form-modal__header"><h2 class="form-modal__header-title">Curious about Oyster? Book a personalized demo</h2><p class="form-modal__header-sub">Leave your details and one of our experts will be in touch.</p></div><div data-w-id="dab08c0e-4492-215a-bec3-84a3147ae306" class="modal__exit-wrap"><div class="modal__exit-btn w-embed"><button role="button" class="btn-modal-exit">
<svg width="18.27" height="18.27" viewBox="0 0 18.27 18.27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.9809 0.292893C18.3714 0.683417 18.3714 1.31658 17.9809 1.70711L10.5511 9.13697L17.9809 16.5668C18.3714 16.9574 18.3714 17.5905 17.9809 17.9811C17.5904 18.3716 16.9572 18.3716 16.5667 17.9811L9.13684 10.5512L1.70711 17.9809C1.31658 18.3714 0.683418 18.3714 0.292893 17.9809C-0.0976311 17.5904 -0.0976311 16.9572 0.292893 16.5667L7.72263 9.13697L0.292893 1.70724C-0.0976311 1.31671 -0.0976311 0.68355 0.292893 0.293025C0.683418 -0.0974989 1.31658 -0.0974989 1.70711 0.293025L9.13684 7.72276L16.5667 0.292893C16.9572 -0.0976311 17.5904 -0.0976311 17.9809 0.292893Z" fill="currentColor"/>
</svg>
</button>
<style>.btn-modal-exit{
background:transparent;
outline:none;
border:none;
padding:1rem;
}

</style></div></div><div id="w-node-_760d5ceb-4064-e9e1-2b2e-370567781303-baf43ae5" class="hide-form-webflow w-embed w-script"><!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="../js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "9021803",
	formId: "ae55bdea-7392-41e5-b6c5-e38d23774cd2"
});
</script></div></div></div><div class="form-modal__close-area"></div></div><div class="container-modal full-height hi"><div class="w-layout-grid grid-modal"><div class="w-layout-grid grid-34"><div class="div-block-40 centerk"><img src="../assets-global.website-files.com/5ffc74fef1579006dc588807/6203f72c01dd4c211fbcf747_Magic.png" loading="lazy" width="104" id="w-node-db446873-bb37-7ef5-6644-87126a7ff2b0-baf43ae5" alt="" class="hide-icon"/><h2 class="heading-4-40px edit-size">Curious about Oyster?<br/>Book a personalized demo</h2><div class="text-block-144 edit-size">Leave your details and one of our experts will be in touch.</div></div><div data-w-id="1647ec8d-9f90-07be-b67a-cbf5baf43afb" class="div-block-41 x-hide"><img src="../assets-global.website-files.com/5ffc74fef1579006dc588807/60057672d551d89fede53381_SMALL_CROSS.svg" loading="lazy" alt="" class="image-17"/></div></div></div></div></div><div class="alignment-css w-embed"><style>.text-17px-ws{text-align:left}
</style></div><script src="../d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8%EF%B9%96site=5ffc74fef1579006dc588807.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="../assets-global.website-files.com/5ffc74fef1579006dc588807/js/oyster-1b8c58.25451a760.js" type="text/javascript"></script><!-- After clicking we are scrolling to the title of mobile menu -->

<script defer> 
 
  function setInitialListenerForMobileNav() {
     $("#mobile-menu .w-dropdown-toggle").click(function () {
        $(".nav-mobile-menu nav").removeClass("w--open");
        $(".w-dropdown-toggle").removeClass("w--open");
        $(this).siblings("nav").addClass("w--open");
        $(this).addClass("w--open");
    });
    
    /*var resources = document.getElementById("w-dropdown-toggle-7");
    var company = document.getElementById("w-dropdown-toggle-6");
    var features = document.getElementById("w-dropdown-toggle-5");
    
    function handleButtonClick(id) {
        setTimeout(() => {
            // document.getElementById("w-dropdown-toggle-7").scrollIntoView();
           // document.getElementById(id).scrollIntoView();
          $("#mobile-menu").animate({ scrollTop: 0 }, 200);
        }, 100);
    }
    
    if(resources){
	    resources.addEventListener('click', () => handleButtonClick('w-dropdown-toggle-7'));
    }
    
    if(company){
	    company.addEventListener('click', () => handleButtonClick('w-dropdown-toggle-6'));
    }
    
    if(features){
	    features.addEventListener('click', () => handleButtonClick('w-dropdown-toggle-5'));
    }*/
  }


  setTimeout(() => {
    setInitialListenerForMobileNav();
  }, 100);
 
  

  
</script>



<!--
    Do a redirect to another url
    TODO: Don't see a place where that script is used (need to check another places in case of removing it)
-->
<script>
//Page transition delay function

 function delay (URL) {
setTimeout( function() { window.location.pathname = URL }, 1000 );
}

</script>
<!--
    Script checks is mobile menu opened and if - yes, it blocks scrolling on a page
    It's used for mobile view only for providing scrolling inside opened mobile menu (hamburger)
-->
<script>
    // Stop body scroll when mobile menu is open


    const body = document.body;
    function letBodyScroll(bool) {
        if (bool) {
                body.style.overflow = 'hidden';
        } else {
            body.style.overflow = 'auto';
        }
    }
    const targetNode = document.querySelector('.w-nav-button');
    const config = { attributes: true, childList: false, subtree: false };
    const callback = function (mutationsList, observer) {
        for (let i = 0; i < mutationsList.length; i++) {
            if (mutationsList[i].type === 'attributes') {
                const menuIsOpen = mutationsList[i].target.classList.contains('w--open');
                letBodyScroll(menuIsOpen);
            }
        }
    };
    const observer = new MutationObserver(callback);
    targetNode && observer.observe(targetNode, config);
 
   
</script>
<!--
    When user lands on a page, we are hiding `utm-campaign` input in form like 'Speak to and Expert'
-->
<script defer type="text/javascript">
var CurrentPage = window.location.href;
document.getElementById("utm-campaign") && document.getElementById("utm-campaign").setAttribute("type", "hidden" );
</script>
<!--
    After page loading, waiting for 2 seconds and trying to get query params from url
    if in url we have parameters like `utm_source`, `utm_medium` or `utm_term` and so on,
    we are setting it to hidden inputs in form like 'Speak to and Expert' and browser session storage
    Here you can find a list of hidden inputs
  	input[name=last_utm_campaign][type=hidden].hs-input
    input[name=last_utm_medium][type=hidden].hs-input
    input[name=last_utm_source][type=hidden].hs-input
    input[name=last_utm_content][type=hidden].hs-input
    input[name=last_utm_term][type=hidden].hs-input
    input[name=last_referring_URL][type=hidden].hs-input
    input#First-Name-4.text-field.w-input,
    input#Second-Name-2.text-field.w-input
-->
<script>
let queryForm = function(event) {
  let isResetForm = !(!event || !event.reset) && event.reset
  let fullUrlData = window.location.toString().split("?");
  if (fullUrlData.length > 1) {
    let urlVariable = fullUrlData[1].split("&");
    for (let variable in urlVariable) {
      let variableArr = urlVariable[variable].split("=");
      (isResetForm || null === sessionStorage.getItem(variableArr[0])) && sessionStorage.setItem(variableArr[0], decodeURIComponent(variableArr[1]))
    }
  }

  for (let inputs = document.querySelectorAll("input[type=hidden], input[type=text]"), variable = 0; variable < inputs.length; variable++) {
    let storageInputData = getStorageValue(inputs[variable].name);
    if(storageInputData){
      inputs[variable].value = storageInputData;
    }
  }
};

function getStorageValue(inputName) {
  //checking is form contains utm input and place data from storage
  if(inputName && inputName.indexOf('last_utm') !== -1){
    return sessionStorage.getItem(inputName.substring(5));
  }
  return sessionStorage.getItem(inputName);
}

$(document).ready(function() {
  	setTimeout(function() {
  		queryForm()
	}, 2000);  
});

</script>
<!--
    After page loading, waiting for 4 seconds and getting value from `utm-campaign-footer` input
    that input can have a value from setting it from script above ^^
    
    So logic is next : previous script sets utm values to hidden inputs, here we are also do the same but duplication
    `utm-campaign` to `utm-campaign-footer` input in footer form
-->
<script defer type="text/javascript">
  setTimeout(function() {
    var utmCampaign = document.getElementById('utm-campaign') && document.getElementById('utm-campaign').value;
 document.getElementById('utm-campaign-footer') && document.getElementById('utm-campaign-footer').setAttribute("value", utmCampaign || '');
  }, 4000);
</script>
<!--
    1) We are trying to get values from next query params :
        'utm_medium',
        'utm_source',
        'utm_campaign',
        'utm_content',
        'utm_term',
        'referring_URL'
    and setting these values to all cta links on a page
    2) Removing '&' and '?' characters in urls of cta links on a page
-->
<script>
  (function() {
        var domainsToDecorate = ['oysterhr.com'],
            queryParams = [
                'utm_medium',
                'utm_source',
                'utm_campaign',
                'utm_content',
                'utm_term',
                'referring_URL',
                'page_source',
                'page_section'
            ];
        
        var links = document.querySelectorAll('a');
        for (var linkIndex = 0; linkIndex < links.length; linkIndex++) {
            for (var domainIndex = 0; domainIndex < domainsToDecorate.length; domainIndex++) {
                if (links[linkIndex].href.indexOf(domainsToDecorate[domainIndex]) > -1 && links[linkIndex].href.indexOf('#') === -1) {
                    var url = decorateUrl(links[linkIndex].href);
          
                    var newUrl = formatLink(url);
                    
                    links[linkIndex].href = newUrl;
                }
            }
        }
    
        function decorateUrl(urlToDecorate) {
            urlToDecorate = (urlToDecorate.indexOf('?') === -1) ? urlToDecorate + '?' : urlToDecorate + '&';
            var collectedQueryParams = [];
            for (var queryIndex = 0; queryIndex < queryParams.length; queryIndex++) {
                if (getQueryParam(queryParams[queryIndex])) {
                    var paramName = queryParams[queryIndex];
					//if(paramName && paramName.indexOf('utm_') !== -1) {
					//	paramName = 'last_' + paramName;
					//}
					
                    collectedQueryParams.push(paramName + '=' + getQueryParam(queryParams[queryIndex]));
                }
            }
        //  console.log(`collectedQueryParams`, collectedQueryParams);
            return urlToDecorate + collectedQueryParams.join('&');
        }
        function getQueryParam(name) {
            if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(window.location.search))
                return decodeURIComponent(name[1]);
        }
       function formatLink(link) {
            const lastChar = link[link.length -1] || '';
            const charList = link.split('');
            
            if (charList[charList.length - 1] === '&') {
                charList.splice(link.length - 1 , 1);
            }

            if (charList[charList.length - 1] === '?') {
                charList.splice(charList.length - 1 , 1);
            }

            let [path, params] = charList.join('').split("?");
            let newLink = path + '?' + new URLSearchParams(Object.fromEntries(new URLSearchParams(params))).toString();

            const newCharSet = newLink.split('');
            if (newCharSet[newCharSet.length - 1] === '?') {
                newCharSet.splice(newCharSet.length - 1 , 1);
                return newCharSet.join('');
            }

          return decodeURIComponent(newLink);
        }
           setTimeout(function() {
            const linksOnPage = document.querySelectorAll('a');
            const linksList = [...linksOnPage];
            linksList.forEach((link) => {
                link.href = formatLink(link.href);
            });
        }, 500);
    })();
</script>
<!-- Here we are loading HubSpot scripts for using it in forms -->
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="../js.hs-scripts.com/9021803.js"></script>
<!-- End of HubSpot Embed Code -->

<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="../js.hsforms.net/forms/v2.js"></script>

<script defer id="adding-conversion_page-param">
/*
 * Setting pathname to `conversion_page` field in hubspot forms on a page
*/
function setGlobalConversionPageParam() {
    const conversionPageValue = window.location.pathname.replace('/', '');
  	
    if (!conversionPageValue) {
        return;
    }
    
    $(`input.hs-input[name="conversion_page"]`).toArray().forEach((el) => {
        el.value = conversionPageValue;
    });
}
  
$(document).ready(function() {
  setTimeout(setGlobalConversionPageParam, 1000);
});

</script>




<!-- Adding Attributes -->
 <script>
      window.addEventListener("DOMContentLoaded", ()=>{
        const root = document.documentElement;
   		const buttonsPrimary = document.querySelectorAll(".button-primary");
        const buttonsSecondary = document.querySelectorAll(".button-secondary");
        const wButtons = document.querySelectorAll(".w-button");
        const inlineBlockBtns = document.querySelectorAll(".w-inline-block")
   		
   		/* Seeting HTML lang attribute */
   
        root.setAttribute("lang", "en");
   		
   		/* Seeting Button Role attribute */
        
        function setUpRoleAtt(elem){
        elem.setAttribute("role", "button");
        }

        buttonsPrimary.forEach(buttonPrimary=>{
          setUpRoleAtt(buttonPrimary);
          
        })
        
        buttonsSecondary.forEach(buttonSecondary=>{
          setUpRoleAtt(buttonSecondary);
        })


            wButtons.forEach(wButton=>{
            setUpRoleAtt(wButton);
        })
            
            
                 /* All link block  */
          
           inlineBlockBtns.forEach(inlineBlockBtn=>{
            setUpRoleAtt(inlineBlockBtn);
        })
        

        })
        
</script>
<!-- End Adding Attributes -->



<!-- New Footer Dropdown On Mobile -->


    <script>
        
     /* Footer dropdown mobile */  
  
    (function(){
        const mediaQuery = window.matchMedia('(max-width: 767px)');
   
       var createFAQ = function(){
       const faqHeaders = document.querySelectorAll(".footer-links__header");
  
  faqHeaders.forEach(faqHeader => {
  faqHeader.addEventListener("click", event => {
    
    const currentlyActivefaqHeader = document.querySelector(".footer-links__header.active");
    if(currentlyActivefaqHeader && currentlyActivefaqHeader!==faqHeader) {
      currentlyActivefaqHeader.classList.toggle("active");
      currentlyActivefaqHeader.nextElementSibling.style.maxHeight = 0;
    }
  
    faqHeader.classList.toggle("active");
    const faqBody = faqHeader.nextElementSibling;
    if(faqHeader.classList.contains("active")) {
      faqBody.style.maxHeight = faqBody.scrollHeight + "px";
    }
    else {
      faqBody.style.maxHeight = 0;
    }
  });
  });
} 
  function handleTabletChange(e) {

    if (e.matches) {
      createFAQ();
    }
    else{}

  }

  mediaQuery.addListener(handleTabletChange)
  
  handleTabletChange(mediaQuery)
})();    
   
    </script>

<!-- Nav Hover -->
<script>
  
  document.addEventListener("DOMContentLoaded", function(){
  
         
  const dropdownItems = document.querySelectorAll(".nav__dropdown-item");
  dropdownItems.forEach(dropdownItem =>{
  dropdownItem.addEventListener("mouseover", function(){

  const dropdownSub = dropdownItem.lastElementChild.lastElementChild;

    dropdownSub.style.maxHeight = dropdownSub.scrollHeight + "px";
       
  })

  dropdownItems.forEach(dropdownItem =>{
  dropdownItem.addEventListener("mouseleave", function(){
      const dropdownSub = dropdownItem.lastElementChild.lastElementChild;

      dropdownSub.style.maxHeight = 0;
    
  })
})

})

})
 
</script>
<!-- End nav hover --> 

<!-- aria label and role for hubspot pop-up "Speak to an Expert"--> 

<script>
setTimeout(function(){
fields=Array({"firstname":"Enter first name","lastname":"Enter last name","email":"Enter your business Email","phone":"Enter your phone number","button":"Click on the button"});    
role=Array({"firstname":"textbox","lastname":"textbox","email":"textbox","phone":"textbox","button":"button"});
tabindex=0;
$('.hbspt-form').each(function()
{
  $(this).find('input').attr('tabindex',tabindex);
  tabindex++
  $(this).find('input[type="text"]').attr('aria-label',fields[0][$(this).find('input[type="text"]').attr('name')])
  $(this).find('input[type="email"]').attr('aria-label',fields[0][$(this).find('input[type="email"]').attr('name')])
  $(this).find('input[type="tel"]').attr('aria-label',fields[0][$(this).find('input[type="tel"]').attr('name')])
  $(this).find('input[type="date"]').attr('aria-label',fields[0][$(this).find('input[type="date"]').attr('name')])
  $(this).find('input[type="submit"]').attr('aria-label',fields[0]['button'])
  
  
  $(this).find('input[type="text"]').attr('role',role[0][$(this).find('input[type="text"]').attr('name')])
  $(this).find('input[type="email"]').attr('role',role[0][$(this).find('input[type="email"]').attr('name')])
  $(this).find('input[type="tel"]').attr('role',role[0][$(this).find('input[type="tel"]').attr('name')])
  $(this).find('input[type="date"]').attr('role',role[0][$(this).find('input[type="date"]').attr('name')])
  $(this).find('input[type="submit"]').attr('role',role[0]['button'])
})
},1000);
 $('[target="_blank"]').each(function()
{
  $(this).attr('aria-label',"this links opens in a new tab")
  
})
</script>
<!-- End--> 




<!-- Acoordion JS -->

   <script async>
        const faqHeaders = document.querySelectorAll(".faq__header");

faqHeaders.forEach(faqHeader => {
  faqHeader.addEventListener("click", event => {
    
 
    
    const currentlyActivefaqHeader = document.querySelector(".faq__header.active");
    if(currentlyActivefaqHeader && currentlyActivefaqHeader!==faqHeader) {
      currentlyActivefaqHeader.classList.toggle("active");
      currentlyActivefaqHeader.nextElementSibling.style.maxHeight = 0;
    }

    faqHeader.classList.toggle("active");
    const faqBody = faqHeader.nextElementSibling;
    if(faqHeader.classList.contains("active")) {
      faqBody.style.maxHeight = faqBody.scrollHeight + "px";
    }
    else {
      faqBody.style.maxHeight = 0;
    }
    
  });
});
    </script>





<!-- CUSTOM TABS JS -->

<script>
const tabsPrimaryItems = document.querySelector(".tabs-primary__items");
 const tabsPrimaryLinks = document.querySelectorAll(".tabs-primary__item");

tabsPrimaryItems.addEventListener("click", function(e){
               
const tabsPrimaryLink = e.target.closest(".tabs-primary__item");

// Guard Clause

if(!tabsPrimaryLink) return;

tabsPrimaryLinks.forEach(t=>{
t.classList.remove("tab-active");
})
tabsPrimaryLink.classList.add("tab-active");
                
})
</script>
        
<!-- End Tab JS -->
        <script>
var Webflow = Webflow || [];
Webflow.push(function(){
    $('#slider div:nth-child(2)').trigger('tap');
});
</script>

<script>
// Slider looping
$(document).ready(function() {
$('.div-put-3').last().append($('.blue').clone());
})
</script>

<script>
    // Greenhouse API Integration
    const sortByKey = (jobs, k) => {
        const key = k || 'title';
        return jobs.sort((a, b) => {
            if (a[key] < b[key]) {
                return -1;
            }

            if (a[key] > b[key]) {
                return 1;
            }

            return 0;
        })
    }

    const createCardJobNode = (job, departmentId) => {
        return `
          <div class="flex-l-r">
             <p class="text-17px-ws color-dark bottom">${job.title}</p>
             <a target="_blank" href="${job.absolute_url}" class="link-arrow-dark _17px">View Job</a>
          </div>
        `;
    }
    const renderDepartmentsGrid = (departments) => {
        return departments.map(department => {
            const jobs = department.jobs.map(job => createCardJobNode(job, department.id));
            return `
                <div class="tabl" data-department-id="${department.id}">
                   <h1 class="h2-36px-black-left-700 color-grey">${department.name}</h1>
                   <div>
                      ${jobs.join('<div class="line-grey margine"></div>')}
                   </div>
                </div>
            `;
        })
    }
    const generateJobNodes = (departmentsList) => {
        const filterContainer = document.getElementById('department-filter');
        const jobContainer = document.getElementById('hiring-container');

        if (!filterContainer || !jobContainer ) {
            return;
        }

        let topLevelDepartments = departmentsList.filter(department => department.parent_id === null);

        // group jobs by department
        const departments = topLevelDepartments.reduce((acc, item) => {
            const departmentId = item.id ? item.id : null


            if (!departmentId) {
                return acc;
            }
            if (!acc[departmentId]) {
                acc[departmentId] = {
                    id: departmentId,
                    jobs: [],
                    name: '',
                };
            }

            let subDepartments = getDepartmentsRecursive(departmentsList, departmentId);
            let jobs = subDepartments.reduce((acc, item) => {
                return acc.concat(item.jobs);
            }, []);

            acc[departmentId].jobs = jobs.concat(item.jobs);
            acc[departmentId].name = item.name;
            return acc;
        }, {});



        //sort departments by name and render
        let preparedDepartments = sortByKey(Object.values(departments), 'name');
        preparedDepartments = preparedDepartments.map(department => {
            department.jobs = sortByKey(department.jobs, 'title');
            return department;
        }).filter(department => department.jobs.length > 0);

        const jobNodes = renderDepartmentsGrid(preparedDepartments);
        jobContainer.innerHTML = jobNodes.join('');

        //sort filter by name and render
        const jobFilterNodes = renderDepartmentsFilterList(preparedDepartments);
        filterContainer.innerHTML = jobFilterNodes.join('');

        setTimeout(() => {
            //init handler for filter
            departmentsFilterInit();
        }, 50)
    }

    function getDepartmentsRecursive(departmentsList, departmentId){
        let departments = [];
        let subDepartment = departmentsList.filter(department => department.parent_id === departmentId);
        if(subDepartment.length > 0){
            subDepartment.forEach(department => {
                departments.push(department);
            })
        }
        return departments;
    }

    const renderDepartmentsFilterList = departments => {
        return [
            { id: 'defaultDepartment', name: 'All' },
            ...departments,
        ].map((department, index) => {
            return `
                        <div
                            data-department-id="${department.id}"
                            data-department-name="${department.name}"
                            class="department-filter-item w-dropdown-link ${department.id === 'defaultDepartment' ? 'all-departments' : ''} ${index === 0 ? 'active' : ''}"
                        >
                            ${department.name}
                        </div>
                    `
        })
    }


    function runFilterByDepartmentId(filterItem) {
        if (!filterItem.dataset) {
            return;
        }

        //clear selected items
        $('.department-filter-item').each(function () {
            $(this).removeClass('active');
        });
        $(filterItem).addClass('active');

        let dataset = filterItem.dataset;
        let selectedDepartmentId = dataset.departmentId;
        let selectedDepartmentName = dataset.departmentName;

        let departmentFilterName = document.getElementById('department-filter-name');
        if(departmentFilterName) {
            departmentFilterName.innerHTML = selectedDepartmentName;
        }

        let departmentList = document.querySelectorAll('.tabl');
        departmentList.forEach(department => {
            let isDepartmentActive = department.dataset.departmentId === selectedDepartmentId || selectedDepartmentId === 'defaultDepartment';
            department.style.display = isDepartmentActive ? 'grid' : 'none';
        })

        // close filter on select
        $(".careers-dropdown").trigger("w-close");
    }



    function departmentsFilterInit() {
        $(`.department-filter-item`).each((_i, filter) =>
            filter.addEventListener('click', e => runFilterByDepartmentId(e.target)),
        )
    }

    function processGreenhouseJobsData(data) {
        if (!data || !data.departments) {
            return
        }

        const { departments } = data;
        //init filter and positions list
        return generateJobNodes(departments)
    }

</script>

<script
    type="text/javascript"
    src="../boards-api.greenhouse.io/v1/boards/oyster/departments%EF%B9%96callback=processGreenhouseJobsData&amp;content=true.js">
</script>


</body></html>