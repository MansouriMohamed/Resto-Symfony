<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_31589114eccabd2385b22cac808e2c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Reality Admin</title>

<script type=\"text/javascript\" SRC=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js\"></script>
<script SRC=\"js/jquery.validate.js\" type=\"text/javascript\"></script>

<!--Initiate form validation - in this example on the login form-->
<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$(\"#loginform\").validate();
});
</script>


<!--This is the styling for the error message for form validation-->
<style type=\"text/css\">
.error {
\tpadding: 7px;
\tmargin: 3px;
\tbackground-color: #FCC;
\tborder: 1px solid #F00;
\tfont-family: arial;
\tfont-size: 10px;
\tfont-style: normal;
\tfont-weight: normal;
\tfont-variant: normal;
\tcolor: #000;
\tfloat: left;
\twidth: 98%;
\t-moz-border-radius:5px;
\t-webkit-border-radius: 5px;
}

</style>

<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
</head>

<body>

<div id=\"admin_wrapper\">

          
            <form action=\"dashboard.html\" id=\"loginform\" method=\"get\">
            
                   
                    <!--START LOGO  --> 
                    
                    <div id=\"logo\">
                    
                    <h1>Reality<span>Admin</span></h1>
                    
                    </div>
                    
                    <!-- END LOGO -->
                    <p>Type in anything to proceed to the demo.</p>
                  
                
                    <!-- TEXTBOXES -->
                    <label>E-mail</label><br />
                    <input name=\"username\" type=\"text\" class=\"text large required\" id=\"username\" />
                    <br />
    \t\t\t\t
                    <div class=\"clearfix\">&nbsp;</div
                    
                    ><label>Password</label><br />
                    <input name=\"password\" type=\"password\" class=\"text large required\" id=\"password\" />
                     <br />
                
              \t\t <div class=\"clearfix\">&nbsp;</div>
                
                <p>
                    <input name=\"btnLogin\" type=\"submit\" class=\"submit\" id=\"btnLogin\" value=\"LOGIN\" />
                    
                    <input type=\"checkbox\" class=\"checkbox\" id=\"cbdemo2\" />
                  <label for=\"cbdemo2\">Remember Me</label>
                    
              </p>
            </form>

    </div><!-- end admin wrapper -->
    
</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 39,  19 => 1,);
    }
}
