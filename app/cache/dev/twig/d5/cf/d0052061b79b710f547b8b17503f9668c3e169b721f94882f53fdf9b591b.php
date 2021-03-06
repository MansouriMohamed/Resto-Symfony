<?php

/* AdminBundle:Default:dashboard.html.twig */
class __TwigTemplate_d5cfd0052061b79b710f547b8b17503f9668c3e169b721f94882f53fdf9b591b extends Twig_Template
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

    <!-- MASTER STYLESHEET-->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
    <!-- LOAD TIPSY TOOLTIPS-->
    <script type=\"text/javascript\" SRC=\"js/jquery.tipsy.js\"></script>
   
    <!-- LOAD CUSTOM JQUERY SCRIPTS-->
    <script type=\"text/javascript\" SRC=\"js/scripts.js\"></script>\t
    
\t <!-- LOAD FACEBOX -->
\t<script type=\"text/javascript\" SRC=\"js/facebox.js\"></script>
    <link href=\"css/facebox.css\" rel=\"stylesheet\" type=\"text/css\" />
    

    <!-- LOAD FLOT GRAPHS -->
    <script type=\"text/javascript\" SRC=\"js/jquery.flot.pack.js\"></script>
    <!--[if IE]>
     <script language=\"javascript\" type=\"text/javascript\" src=\"js/excanvas.pack.js\"></script>
    <![endif]-->
    
    
    <!--[if IE 6]>
    <script src=\"js/pngfix.js\"></script>
    <script>
        DD_belatedPNG.fix('.png_bg');
    </script>        
    <![endif]-->

\t
    <!-- LOAD GRAPH JAVASCRIPT FILE-->
\t<script SRC=\"js/graphs.js\" type=\"text/javascript\"></script>


</head>

<body>

<div id=\"header\" class=\"png_bg\">

    <div id=\"head_wrap\" class=\"container_12\">
    
        <!-- start of logo - you could replace this with an image of your logo -->
        <div id=\"logo\" class=\"grid_4\">
          <h1>Reality<span>Admin</span></h1>
        </div>
        <!-- end logo -->
        
        <!-- start control panel -->
    \t<div id=\"controlpanel\" class=\"grid_8\">
        
            <ul>
            
    \t\t\t<li><p>Signed in as <strong>Johnathan Doe</strong></p></li>
                <li><a href=\"#\" class=\"first\">Settings</a></li>
                <li><a href=\"#\" class=\"last\">Sign Out</a></li>
                
            </ul>
            
        </div>
        <!-- end control panel -->
    
        <!-- start navigation -->
      \t<div id=\"navigation\" class=\" grid_12\">
           
            <ul>
            
                <li><a href=\"#\" class=\"active\">Dashboard</a></li>
                <li><a href=\"#\">Users</a></li>
                <li><a href=\"#\">Content</a></li>
                <li><a href=\"#\">Products</a></li>
                <li><a href=\"#\">Articles</a></li>
                <li><a href=\"#\">Even Longer Navigation Link</a></li>
                <li><a href=\"#\">Random Link</a></li>
                <li><a href=\"#\">Last Link</a></li>
                
    
            </ul>
          
        </div>
        <!-- end navigation -->
     
    </div><!-- end headwarp  -->
</div><!-- end header -->


<!-- staqrt subnav -->
<div id=\"sub_nav\">

<div id=\"subnav_wrap\" class=\"container_12\">
\t
    <!-- start sub nav list -->
\t<div id=\"subnav\" class=\" grid_12\">
    
        <ul>
        
            <li><a href=\"#\" class=\"active\">First</a></li>
            <li><a href=\"#\" class=\"sub_nav_active\">Active</a></li>
            <li><a href=\"#\">Another Link</a></li>
            <li><a href=\"#\">Some Link</a></li>
            <li><a href=\"#\">Nearly Last</a></li>
            <li><a href=\"#\">Sample</a></li>
            <li><a href=\"#\">Some Other Link</a></li>
          \t<li><a href=\"#\" class=\"sub_nav_last\">Last Link</a></li>
            
        </ul>
    
    </div>
    <!-- end subnavigation list -->\t

</div>


</div>
<!-- end sub_nav -->

<!-- EVERYTING BELOW IS THE MAIN CONTENT -->

<div id=\"main_content_wrap\" class=\"container_12\">


\t<!-- start icon dock-->
\t<div id=\"icondock\" class=\"grid_12\">
\t 
      <ul>
        
\t\t\t<li><a HREF=\"remote.html\" rel=\"facebox\" title=\"Check Your E-Mails\"><img SRC=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/email.png"), "html", null, true);
        echo "\" alt=\"Mail\" /><br />Mail<span>4</span></a></li>
            <li><a href=\"#\" rel=\"tipsy\" title=\"View Your Contact List\"><img SRC=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/book_addresses.png"), "html", null, true);
        echo "\" alt=\"Contacts\" /><br />Contacts</a></li>
            <li><a href=\"#\" rel=\"tipsy\" title=\"View Recent Sales Activity\"><img SRC=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/coins.png"), "html", null, true);
        echo "\" alt=\"Sales\" /><br />Sales<span>8</span></a></li>
            <li><a href=\"#\" rel=\"tipsy\" title=\"Analyse Site Activity\"><img SRC=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/chart_bar.png"), "html", null, true);
        echo "\" alt=\"Stats\" /><br />Statistics</a></li>
            <li><a href=\"#\" rel=\"tipsy\" title=\"View Recent Commenets\"><img SRC=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/comment.png"), "html", null, true);
        echo "\" alt=\"Comments\"/><br />
            Comments<span>7</span></a></li>
            <li><a href=\"#\" rel=\"tipsy\" title=\"View Registered Users\"><img SRC=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/user.png"), "html", null, true);
        echo "\" alt=\"Users\" /><br />Users</a></li>
            <li><a href=\"#\" rel=\"tipsy\" title=\"Check Your Events\"><img SRC=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bunldes/Admin/images/icondock/date.png"), "html", null, true);
        echo "\" alt=\"Events\" /><br />Events<span>1</span></a></li>
            <li><a href=\"#\" rel=\"tipsy\" title=\"Manage Incoming Orders\"><img SRC=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/basket.png"), "html", null, true);
        echo "\" alt=\"Orders\" /><br />Orders</a></li>
   \t\t\t<li><a href=\"#\" rel=\"tipsy\" title=\"Set Reminders\"><img SRC=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/icondock/bell.png"), "html", null, true);
        echo "\" alt=\"Reminders\" /><br />Reminders</a></li>

\t  </ul>

    
\t</div><!-- end icon dock-->
    
    <div class=\"clearfix\">&nbsp;</div>
\t\t
        <div class=\"container_12\">
        
        <div id=\"notices\" class=\"grid_4\">
        
        <h2>Notices</h2>
        
            <ul>
            
                <li><a href=\"#\" class=\"notice-icon1\">Johnathan Smith replied to a Comment of yours.</a></li>
                <li><a href=\"#\" class=\"notice-icon2\">Samantha English added a Task for you.</a></li>
                <li><a href=\"#\" class=\"notice-icon3\">Peter Gillingham created an Event.</a></li>
                <li><a href=\"#\" class=\"notice-icon4\">Susanna Longstanton addded a News article.</a></li>
                <li><a href=\"#\" class=\"notice-icon5\">John Doe made a Sale.</a></li>
                <li><a href=\"#\" class=\"notice-icon6\">Karen Penchalleto sent you a reminder.</a></li>
                <li><a href=\"#\" class=\"notice-icon7\">Peter Kingston raised a support ticket.</a></li>
                
             
            </ul>   
        
        </div>
\t\t
        <!--  PLACEHOLDER FOR FLOT - REMOVE IF NOT REQUIRED -->
        <div class=\"grid_8\">
        
            <h2>Visitor Stats</h2>
            
             <div id=\"placeholder\"></div> 
        
        </div>
        
        </div>
        
        <div class=\"clearfix\">&nbsp;</div>
        
        <div class=\"container_12\">
\t\t
        <h2>Tabbed Content Example</h2>\t\t
        <ul class=\"tabs\">
            <li><a href=\"#tab1\">Gallery</a></li>
            <li><a href=\"#tab2\">Form Elements</a></li>
        </ul>
    
    <div class=\"tab_container\">
        <div id=\"tab1\" class=\"tab_content\">
            <!-- START IMAGE GALLERY -->
      
    <h2>Image Gallery</h2>
\t
    <ul class=\"imglist\">
        
            <li>
            
            \t<img SRC=\"images/thumb1.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
            \t<div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/Admin/images/thumb1_big.jpg"), "html", null, true);
        echo "\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
            
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb2.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb2_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
            
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb3.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb3_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
               
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb4.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb4_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
            
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb5.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb5_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
                
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb6.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb6_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>             
               
                
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb7.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb7_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div> 
                
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb8.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb8_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
               
                
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb7.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb7_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
               
                
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb5.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb5_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
               
                
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb6.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb6@_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
               
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb1.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
                <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb1_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>

            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb4.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
\t\t\t    <div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb4_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
                
            </li>
            
            <li>
            
            \t<img SRC=\"images/thumb3.jpg\" width=\"100\" height=\"100\" alt=\"Image1\" />
            \t<div class=\"actions\">\t
\t\t\t\t\t<a class=\"imglistbutton\" rel=\"facebox\" HREF=\"images/thumb3_big.jpg\"><img SRC=\"images/magnifier.png\" width=\"16\" height=\"16\" alt=\"View\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"imglistbutton\"><img SRC=\"images/cancel.png\" width=\"16\" height=\"16\" alt=\"Delete\" /></a>
\t\t\t\t</div>
            
            </li>
        
    </ul>
    
    <!-- END IMAGE GALLERY -->
        </div>
        <div id=\"tab2\" class=\"tab_content\">
           <h2>Forms</h2>
           
           \t<p>
                 Forms are great for collecting informatoin or simply for use in your web application. 
                 With Reality Admin, you get stylish form elements ready to use straight out the box. 
                 They're already skinned, pre-sized adn formatted for you so you can simply get on and use them as you choose.
         \t</p>
           
           <form action=\"\" method=\"post\">
              <!-- RADIO GROUPS -->
              <p>\t
                  <input type=\"radio\" name=\"radio\" id=\"RADIO1\" value=\"RADIO1\" />
                  <label for=\"RADIO1\">RADIO ONE</label>
                  <input type=\"radio\" name=\"radio\" id=\"RADIO2\" value=\"RADIO2\" />
                  <label for=\"RADIO2\">RADIO TWO</label>
                  <input type=\"radio\" name=\"radio\" id=\"RADIO3\" value=\"RADIO3\" />
                  <label for=\"RADIO3\">RADIO THREE</label>
              </p>
           
           
              <p>
                  <label>Small Input Box:</label><br />
                  <input type=\"text\" class=\"text small\" /> 
                  <span class=\"valid\">This is a validation message</span>
              </p>
              
              
              
              <p>
             \t <label>Medium Input Box:</label><br />
                 <input type=\"text\" class=\"text medium\" /> 
                 <span class=\"error\">This is an error message</span>
              </p>
              
              <p>
                  <label>Large Input Box</label><br />
                  <input type=\"text\" class=\"text large\" />
              </p>
              
      
            <!-- CHECKBOXES -->
            <p>
                <input type=\"checkbox\" class=\"checkbox\" checked=\"checked\" id=\"cbdemo1\" /> 
                <label for=\"cbdemo1\">Checkbox label</label> 
                <input type=\"checkbox\" class=\"checkbox\" id=\"cbdemo2\" />
                <label for=\"cbdemo2\">Checkbox label</label>
            
            <!-- COMBO SELECT BOX -->

            <label for=\"cbo\">Dropdown/Combo Box:</label>
            
            <select name=\"cbo\" id=\"cbo\" class=\"select\">
            
                <option value=\"One\">One</option>
                <option value=\"Two\">Two</option>
                <option value=\"Three\">Three</option>
                <option value=\"Four\">Four</option>
                <option value=\"Five\">Five</option>
            
            </select>   
 
            </p>

\t\t\t<p>
                  <label>Text Area Without Editor:</label><br />
                  <textarea cols=\"8\" rows=\"5\"></textarea>
            </p>
            <p>
                <label>Text Area with Editor:</label><br />
                <textarea cols=\"8\" rows=\"6\" class=\"wysiwyg\"></textarea>
            </p>
\t\t\t<p>
          \t\t<input type=\"submit\" class=\"submit\" value=\"Button\" />
                <input name=\"Submit2\" type=\"submit\" class=\"submit\" value=\"Another Button\" />
                <input name=\"Reset2\" type=\"submit\" class=\"submit special\" value=\"Special Button\" />
       \t\t</p>
           </form>
        </div>
</div>
</div>

        <div class=\"clearfix\">&nbsp;</div>
        
        
         <!-- NOTIFICATION - USES CLASS OF \"WARNING\" and the CANHIDE ENABLES CICK TO FADE AWAY-->
                <div class=\"notification lightbulb canhide\">
                    
                    <p><strong>NOTIFICATION: </strong>
                    This is a notification message. You can use this to provide site feedback 
                    or provide hints and tips. Click me and I go away.</p>
                    
                </div>
                
        
        
        <div class=\"container_12\">
        <h2>Accordion Widget</h2>
        <p>Somtimes it's easier to compartmentalise data or visualisations. In the example below we have different types of content that we have grouped up - making it easier for the user to choose which part they want to look at, and also focusing the user on what is important.</p>
        
        
        <div class=\"clearfix\">&nbsp;</div>
        <h3 class=\"acc_trigger\"><a href=\"#\">Something Important</a></h3>
            <div class=\"acc_container\">
            <div class=\"block\">
            \t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus   sem sed libero vehicula at mattis magna semper. Nulla augue metus,   euismod non fermentum et, auctor quis dolor. Mauris a nisi quam, aliquam   placerat felis. Nam vestibulum facilisis eros, vitae tempus est feugiat   commodo. Pellentesque quis mi eu arcu tristique ullamcorper vel ornare   lorem. Sed euismod quam ac orci bibendum fringilla. Suspendisse dolor   lectus, dapibus vitae cursus nec, auctor id ante. Etiam consectetur,   turpis id rhoncus tincidunt, justo ligula fringilla enim, sed blandit   tortor mi ac nisl. Praesent non nisi risus. Duis hendrerit elit ut   turpis pretium suscipit. Vestibulum ante ipsum primis in faucibus orci   luctus et ultrices posuere cubilia Curae; Sed sed dui velit, accumsan   malesuada orci. Suspendisse interdum turpis ut nisi dictum laoreet. In   hac habitasse platea dictumst. Vivamus luctus dignissim quam eget   adipiscing. Vestibulum ac mauris eros. Etiam diam metus, molestie in   tincidunt vel, dignissim ac magna. </p>
            </div>
        </div>
        <h3 class=\"acc_trigger\"><a href=\"#\">Another Content Area</a></h3>
            <div class=\"acc_container\">
            <div class=\"block\">
            \t<p>Maecenas in metus magna, id faucibus nulla. Vestibulum pellentesque   ligula vitae odio tristique tempus. Integer vehicula, ligula in varius   tempus, lorem ante dictum sem, a venenatis diam tortor a enim. Aliquam   erat volutpat. Integer ac ipsum metus. Pellentesque vulputate, quam et   congue tristique, elit elit faucibus metus, condimentum porta velit   lectus et sapien. Maecenas rutrum bibendum massa nec convallis. Aliquam   varius imperdiet augue a ultricies. Donec sit amet est vitae mi   porttitor iaculis. Maecenas scelerisque pellentesque nisl non tempor.</p>
            </div>
        </div>
         <h3 class=\"acc_trigger\"><a href=\"#\">Example of Accordion Menu Item</a></h3>
            <div class=\"acc_container\">
            <div class=\"block\">
            \t<p>Fusce a ligula in quam vehicula venenatis. Sed nec nunc sed lorem   fermentum commodo a nec erat. Sed urna erat, scelerisque tincidunt   fringilla ut, mollis quis velit. Pellentesque habitant morbi tristique   senectus et netus et malesuada fames ac turpis egestas. Aliquam purus   libero, cursus at euismod eget, adipiscing vel purus. Sed porta nibh   quis dolor euismod tincidunt. Vestibulum tellus nisi, scelerisque at   volutpat ac, eleifend ac ipsum. Maecenas eget est sit amet eros   hendrerit aliquet. Sed vitae lacus dolor. Cras fermentum lacinia   faucibus. </p>
            </div>
        </div>

    
    </div>      
        
        <div class=\"clearfix\">&nbsp;</div>
        <div class=\"container_12\">
        
        <!--START NOTIFICATIONS  -->
        <h2>Notifications</h2>
            
            <p>
            Reality Admin includes 5 notifications, and you can always make your own easily by 
            using one of the icons provided. Click to watch them fade away!
            </p>
            

            <!-- INFORMATION - USES CLASS OF \"IN2FORMATION\" and the CANHIDE ENABLES CICK TO FADE AWAY-->
            <div class=\"notification information canhide\">
            
              <p><strong>INFORMATION: </strong>
                This is an information message. You can use this to give the user 
                information about actions or their account etc. Click me and I go away..</p>
  \t\t\t</div>   
            
            <!-- WARNING - USES CLASS OF \"WARNING\" and the CANHIDE ENABLES CICK TO FADE AWAY-->
            <div class=\"notification warning canhide\">
            \t
                <p><strong>WARNING: </strong>
                This is a warning message. You can use this to provide warning messages 
                or confirmation to users. Click me and I go away.</p>
            </div> 
            
            <!-- SUCCESS - USES CLASS OF \"SUCCESS\" and the CANHIDE ENABLES CICK TO FADE AWAY-->
            <div class=\"notification success canhide\">
            
                <p><strong>SUCCESS: </strong>
                This is a success message, used to provide feedback to the user 
                that something worked. Click me and I go away</p>
            </div>  
            
            
            <!-- FAILURE - USES CLASS OF \"FAILURE\" and the CANHIDE ENABLES CICK TO FADE AWAY-->
            <div class=\"notification failure canhide\">
            
                <p><strong>FAILURE: </strong>
                This is a failure message, but hey it's not all doom and gloom you c
                an click me and I'll go away and hide again.</p>                
            </div>
            
     </div>   
  \t<!--END NOTIFICATIONS  -->
        
        
\t<div class=\"clearfix\">&nbsp;</div>
    
    
    
    
    </div>
    
    <div class=\"clearfix\">&nbsp;</div>
        
  <!-- START TABULAR DATA EXAMPLE -->
  <div class=\"container_12\">
  
\t<h2>Table Example</h2>
            
            <p>
                Tables are a great way of displaying lots of data, and logically. 
                The default styling on the tables is unobtrusive and enables both text 
                and images as show in the example below.
            </p>
            
    <div class=\"clearfix\">&nbsp;</div>
            \t
    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
    
        <tr>
        
            <th width=\"5%\" scope=\"col\">
            <input type=\"checkbox\" name=\"checkbox\" id=\"checkbox\" class=\"checkall\" /><label for=\"checkbox\"></label></th>
            
            <th width=\"18%\" scope=\"col\">Firstname</th>
            <th width=\"16%\" scope=\"col\">Lastname</th>
            <th width=\"29%\" scope=\"col\">E-Mail</th>
            <th width=\"13%\" scope=\"col\">Start Date</th>
            <th width=\"11%\" scope=\"col\">End Date</th>
            <th width=\"8%\" scope=\"col\">Status</th>
        </tr>
        
        <tr>
        
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox2\" id=\"checkbox2\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">24/02/2010</td>
            <td scope=\"col\">12/12/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_offline.png\" alt=\"Online\" /><img SRC=\"images/shield.png\" alt=\"Shield\" width=\"16\" height=\"16\" /></td>
        </tr>
        
        <tr>
        
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox3\" id=\"checkbox3\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">12/09/2009</td>
            <td scope=\"col\">21/12/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_online.png\" alt=\"Online\" /><img SRC=\"images/medal_gold_3.png\" alt=\"Gold\" width=\"16\" height=\"16\" /></td>
        </tr>
        
        <tr>
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox4\" id=\"checkbox4\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">05/09/2009</td>
            <td scope=\"col\">12/11/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_offline.png\" alt=\"Offline\" border=\"0\" usemap=\"#O\" /></td>
        </tr>
        
        <tr>
        
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox5\" id=\"checkbox5\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">12/06/2009</td>
            <td scope=\"col\">13/08/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_online.png\" alt=\"Online\" /><img SRC=\"images/shield.png\" alt=\"Shield\" width=\"16\" height=\"16\" /></td>
        </tr>
        
        <tr>
        
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox6\" id=\"checkbox6\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">05/06/2009</td>
            <td scope=\"col\">14/7/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_offline.png\" alt=\"Offline\" border=\"0\" usemap=\"#O\" /><img SRC=\"images/medal_silver_1.png\" alt=\"Silver\" /></td>
        </tr>


        
        <tr>
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox7\" id=\"checkbox7\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>                   
            <td scope=\"col\">12/09/2009</td>
            <td scope=\"col\">21/08/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_offline.png\" alt=\"Offline\" border=\"0\" usemap=\"#O\" /><img SRC=\"images/shield.png\" alt=\"Shield\" /></td>
        </tr>
        
        <tr>
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox8\" id=\"checkbox8\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">08/12/2009</td>
            <td scope=\"col\">22/10/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_online.png\" alt=\"Online\" /><img SRC=\"images/medal_gold_3.png\" alt=\"Shield\" width=\"16\" height=\"16\" /></td>
        </tr>
        
        <tr>
        
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox9\" id=\"checkbox9\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">12/09/2009</td>
            <td scope=\"col\">28/09/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_online.png\" alt=\"Online\" /></td>
        </tr>
        
        <tr>
        
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox10\" id=\"checkbox10\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>                
            <td scope=\"col\">05/04/2009</td>
            <td scope=\"col\">21/12/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_offline.png\" alt=\"Offline\" border=\"0\" usemap=\"#O\" /></td>
        </tr>
        
        <tr>
            <td scope=\"col\"><input type=\"checkbox\" name=\"checkbox11\" id=\"checkbox11\" /></td>
            <td scope=\"col\">Johnathan</td>
            <td scope=\"col\">Doe</td>
            <td scope=\"col\"><a href=\"#\">john.doe@myinternet.com</a></td>
            <td scope=\"col\">12/7/2009</td>
            <td scope=\"col\">21/12/2011</td>
            <td scope=\"col\"><img SRC=\"images/status_offline.png\" alt=\"Offline\" border=\"0\" usemap=\"#O\" /><img SRC=\"images/medal_bronze_1.png\" alt=\"Bronze\" /></td>
        </tr>
    </table>
    
    <!-- END TABULAR DATA EXAMPLE -->
      
           
           
           <div class=\"grid_12\">
           
           <div class=\"clearfix\">&nbsp;</div>
           
            <ul id=\"pagination\">
            
                <li class=\"previous-off\">&laquo;Previous</li>
                <li class=\"active\">1</li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">4</a></li>
                <li><a href=\"#\">5</a></li>
                <li><a href=\"#\">6</a></li>
                <li><a href=\"#\">7</a></li>
                <li><a href=\"#\">8</a></li>
                <li><a href=\"#\">9</a></li>
                <li><a href=\"#\">10</a></li>
                <li class=\"next\"><a href=\"#\">Next &raquo;</a></li>
                
            </ul>
           
           </div>           

           
           <div class=\"clearfix\">&nbsp;</div>
           
           
              
          
</div>

<div class=\"clearfix\">&nbsp;</div>
<div class=\"container_12\">
     


   <!-- START FOOTER -->
    
    <div id=\"footer\" class=\"grid_12\">
    
        <p>&copy; Copyright 2010 Your Company | Powered by <a href=\"#\">Reality Admin</a> | <a href=\"#\">Top</a></p>
        
\t</div>
    <!-- END FOOTER -->       
  </div><!-- end content wrap -->


</body>
</html>



";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 207,  191 => 144,  174 => 139,  170 => 138,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 141,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 11,  28 => 3,  201 => 92,  196 => 90,  183 => 142,  171 => 61,  166 => 137,  163 => 62,  158 => 135,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 143,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 136,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
