<?php

/* default/template/common/menu.twig */
class __TwigTemplate_91b44d01cde775a2bddbd8d3aaba911cc5a4750d118bc8aad1b56bfdc42f0cab extends Twig_Template
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
        echo "


<div class=\"container\" id=\"common-header\">
  <header id=\"header\" >
    <div class=\"container-fluid\">
      <div class=\"row flex\">
      
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 logo_header text-center\">
          <a href=\"";
        // line 10
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\">
            
            <img alt=\"THENO – Minimal &amp; Clean Watch Store Shopify Theme\" src=\"image/catalog/demo/slider/Logo@2x.png\" class=\"img-logo\">
            
          </a>
        </div>
        <div class=\"col-lg-4 col-md-4 hidden-sm hidden-xs\">
          <ul class=\"nav navbar-nav menu-main\" style=\"margin-top: 35px;font-weight: bold;\">
  
              <li class=\" \">
                
                  <a href=\"/\" title=\"Shop\" class=\"delay03 uppercase\">";
        // line 21
        echo $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 0, array(), "array"), "href", array());
        echo "</a>
        
              </li>
                
              <li class=\" \">
                  
                    <a href=\"/\" title=\"About\" class=\"delay03 uppercase\">ABOUT</a>
                  
              </li>
  
              <li class=\" \">
                
                  <a href=\"/\" title=\"Blog\" class=\"delay03 uppercase\">WHOLESALE</a>
                
              </li>
            </ul>
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-4 col-xs-4 text-right icon-main\">

          
          <a href=\"#login_form\" class=\"delay03 inline-block hidden-sm hidden-xs\" id=\"btn-login\">
            
            <i class=\"ms_user\"></i>
            
          </a>
          
          <a href=\"";
        // line 47
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" class=\"delay03 inline-block text-center icon-cart\" id=\"btn-cart\">
            
            <i class=\"ms_cart\"></i>
          </a>
          <a href=\"#\" class=\"delay03 inline-block\" id=\"btn-search\">
            
            <i class=\"ms_search\"></i>
            
          </a>
        </div>
      </div>     
    </div>
</header>
</div>


<style>
.img-logo{
  width:300px;
}
a {
    color: #000000;
}
#common-header{
  position:relative;
  z-index:5;
  margin-top:54px;
}
#common-home
{
  position:relative;
  z-index:0;
  margin-top: -136px;
}
.ms_user{
    content: url(image/catalog/demo/slider/002-user@2x.png);
}
.ms_cart{
    content: url(image/catalog/demo/slider/003-cart@2x.png);
}
.ms_search{
    content: url(image/catalog/demo/slider/001-search@2x.png);   
}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 47,  44 => 21,  30 => 10,  19 => 1,);
    }
}
/* */
/* */
/* */
/* <div class="container" id="common-header">*/
/*   <header id="header" >*/
/*     <div class="container-fluid">*/
/*       <div class="row flex">*/
/*       */
/*         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 logo_header text-center">*/
/*           <a href="{{home}}">*/
/*             */
/*             <img alt="THENO – Minimal &amp; Clean Watch Store Shopify Theme" src="image/catalog/demo/slider/Logo@2x.png" class="img-logo">*/
/*             */
/*           </a>*/
/*         </div>*/
/*         <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">*/
/*           <ul class="nav navbar-nav menu-main" style="margin-top: 35px;font-weight: bold;">*/
/*   */
/*               <li class=" ">*/
/*                 */
/*                   <a href="/" title="Shop" class="delay03 uppercase">{{categories[0].href}}</a>*/
/*         */
/*               </li>*/
/*                 */
/*               <li class=" ">*/
/*                   */
/*                     <a href="/" title="About" class="delay03 uppercase">ABOUT</a>*/
/*                   */
/*               </li>*/
/*   */
/*               <li class=" ">*/
/*                 */
/*                   <a href="/" title="Blog" class="delay03 uppercase">WHOLESALE</a>*/
/*                 */
/*               </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 text-right icon-main">*/
/* */
/*           */
/*           <a href="#login_form" class="delay03 inline-block hidden-sm hidden-xs" id="btn-login">*/
/*             */
/*             <i class="ms_user"></i>*/
/*             */
/*           </a>*/
/*           */
/*           <a href="{{shopping_cart}}" class="delay03 inline-block text-center icon-cart" id="btn-cart">*/
/*             */
/*             <i class="ms_cart"></i>*/
/*           </a>*/
/*           <a href="#" class="delay03 inline-block" id="btn-search">*/
/*             */
/*             <i class="ms_search"></i>*/
/*             */
/*           </a>*/
/*         </div>*/
/*       </div>     */
/*     </div>*/
/* </header>*/
/* </div>*/
/* */
/* */
/* <style>*/
/* .img-logo{*/
/*   width:300px;*/
/* }*/
/* a {*/
/*     color: #000000;*/
/* }*/
/* #common-header{*/
/*   position:relative;*/
/*   z-index:5;*/
/*   margin-top:54px;*/
/* }*/
/* #common-home*/
/* {*/
/*   position:relative;*/
/*   z-index:0;*/
/*   margin-top: -136px;*/
/* }*/
/* .ms_user{*/
/*     content: url(image/catalog/demo/slider/002-user@2x.png);*/
/* }*/
/* .ms_cart{*/
/*     content: url(image/catalog/demo/slider/003-cart@2x.png);*/
/* }*/
/* .ms_search{*/
/*     content: url(image/catalog/demo/slider/001-search@2x.png);   */
/* }*/
/* </style>*/
