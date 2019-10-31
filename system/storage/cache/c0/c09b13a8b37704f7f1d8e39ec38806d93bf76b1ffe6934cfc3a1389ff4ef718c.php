<?php

/* default/template/extension/module/latest.twig */
class __TwigTemplate_7f932d77ba5cdc2be109f66b6063dd5fe851bc633e4e35838f3425cfd122af1a extends Twig_Template
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
        echo "<div class=\"row latest_row\">

<div class=\"row category_big col-lg-5 col-md-5 col-sm5 hidden-xs\" style=\"display:inline-block;position:relative\">
  <div class=\"product-layout\" style=\"width:100%;float:left;\">
       <div class=\"image\"><img src=\"image/catalog/demo/slider/daylight-environment-garden-1055408 (1).jpg\"  class=\"img-responsive latest_img\" /></div>
  </div>
  
</div>
<div class=\"row category_thumb col-lg-5 col-md-5 col-sm-5 col-xs-12\" style=\"display:inline-block;position:relative\">
  <h3>Indoor Plants</h3> 
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "  <div class=\"product-layout1 col-lg-5 col-md-5 col-sm-5 col-xs-12\">
    
      <div class=\"image\"><img src=\"";
            // line 14
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></div>
      <div class=\"caption latest\">
        <p>";
            // line 16
            echo $this->getAttribute($context["product"], "category_id", array());
            echo "</p>
        <h4>";
            // line 17
            echo $this->getAttribute($context["product"], "name", array());
            echo "</h4>
        <span>";
            // line 18
            echo $this->getAttribute($context["product"], "model", array());
            echo "</span>
      </div>
      
    
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo " </div>
  </div>
<div class=\"row logo-menu\" style=\"background-color:rgb(242,237,229);\">
  <div class=\"logo 1first col-md-3 col-sm-3 col-xs-3\">
    <img src=\"image/catalog/demo/slider/001-air-freight@2x.png\"  class=\"img-responsive \" />
    <p class=\"hidden-sm hidden-xs\">World Wide Shipping</p>
  </div>
  <div class=\"logo 2second col-md-4 col-sm-3 col-xs-3\">
    <img src=\"image/catalog/demo/slider/002-locked@2x.png\"  class=\"img-responsive \" style=\"width:70px!important;\"/>
    <p class=\"hidden-sm hidden-xs\">100% safe & Secure checkout</p>
  </div>
  <div class=\"logo 3third col-md-3 col-sm-3 col-xs-3\">
    <img src=\"image/catalog/demo/slider/003-plant@2x.png\"  class=\"img-responsive\" />
    <p class=\"hidden-sm hidden-xs\">Professional Nurtured Plant</p>
  </div>
</div>
</div>
<style>
.latest>p{
  color:rgb(137,209,0);
}
.latest>span{
  color:rgb(0,0,0);
  font-weight:bold;
}
.category_big{
  margin-left:12%;
}
.category_thumb{
  
  margin-left:2%!important;
}
.category_thumb h3{
  
  margin-left:20px;
}
.latest_row
{
      margin-top: 50px;
      margin-bottom: 50px;
}
.product-layout1
{
        margin-left: -20px;
      
      display:inline-block;
      padding-left:12px!important;
}
.product-layout1 img{
  width:185px;
  height:150px;
}
.product-layout1 .image{
  width:185px!important;
  display:inline-block;
}
.caption.latest{
      width: 100px;
    display: inline-block;
    vertical-align: top;
    margin-top: 9px;
    margin-left: -15px;
    
    line-height: 47px;
}
.caption.latest p{
  font-size:14px;
}
.caption.latest h4{
  font-size:18px;
  font-weight:bold!important;
}
.caption.latest span{
  font-size:14px;
}
.latest_img{
  height: 670px;
}
.logo-menu{
  height:150px;
}
.logo{
  margin-top:35px;
  display:inline-block;
  margin-left:5%;
  
}
.logo img{
  width:80px;
  height:80px;
  display:inline-block;
}
.logo p{
    Vertical-align: top;
    display: inline-block;
    font-size: 28px;
    margin-left: 22px;
    margin-top: 33px;
}

</style>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  56 => 18,  52 => 17,  48 => 16,  39 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <div class="row latest_row">*/
/* */
/* <div class="row category_big col-lg-5 col-md-5 col-sm5 hidden-xs" style="display:inline-block;position:relative">*/
/*   <div class="product-layout" style="width:100%;float:left;">*/
/*        <div class="image"><img src="image/catalog/demo/slider/daylight-environment-garden-1055408 (1).jpg"  class="img-responsive latest_img" /></div>*/
/*   </div>*/
/*   */
/* </div>*/
/* <div class="row category_thumb col-lg-5 col-md-5 col-sm-5 col-xs-12" style="display:inline-block;position:relative">*/
/*   <h3>Indoor Plants</h3> */
/*   {% for product in products %}*/
/*   <div class="product-layout1 col-lg-5 col-md-5 col-sm-5 col-xs-12">*/
/*     */
/*       <div class="image"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></div>*/
/*       <div class="caption latest">*/
/*         <p>{{ product.category_id}}</p>*/
/*         <h4>{{ product.name }}</h4>*/
/*         <span>{{product.model}}</span>*/
/*       </div>*/
/*       */
/*     */
/*   </div>*/
/*   {% endfor %} </div>*/
/*   </div>*/
/* <div class="row logo-menu" style="background-color:rgb(242,237,229);">*/
/*   <div class="logo 1first col-md-3 col-sm-3 col-xs-3">*/
/*     <img src="image/catalog/demo/slider/001-air-freight@2x.png"  class="img-responsive " />*/
/*     <p class="hidden-sm hidden-xs">World Wide Shipping</p>*/
/*   </div>*/
/*   <div class="logo 2second col-md-4 col-sm-3 col-xs-3">*/
/*     <img src="image/catalog/demo/slider/002-locked@2x.png"  class="img-responsive " style="width:70px!important;"/>*/
/*     <p class="hidden-sm hidden-xs">100% safe & Secure checkout</p>*/
/*   </div>*/
/*   <div class="logo 3third col-md-3 col-sm-3 col-xs-3">*/
/*     <img src="image/catalog/demo/slider/003-plant@2x.png"  class="img-responsive" />*/
/*     <p class="hidden-sm hidden-xs">Professional Nurtured Plant</p>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* <style>*/
/* .latest>p{*/
/*   color:rgb(137,209,0);*/
/* }*/
/* .latest>span{*/
/*   color:rgb(0,0,0);*/
/*   font-weight:bold;*/
/* }*/
/* .category_big{*/
/*   margin-left:12%;*/
/* }*/
/* .category_thumb{*/
/*   */
/*   margin-left:2%!important;*/
/* }*/
/* .category_thumb h3{*/
/*   */
/*   margin-left:20px;*/
/* }*/
/* .latest_row*/
/* {*/
/*       margin-top: 50px;*/
/*       margin-bottom: 50px;*/
/* }*/
/* .product-layout1*/
/* {*/
/*         margin-left: -20px;*/
/*       */
/*       display:inline-block;*/
/*       padding-left:12px!important;*/
/* }*/
/* .product-layout1 img{*/
/*   width:185px;*/
/*   height:150px;*/
/* }*/
/* .product-layout1 .image{*/
/*   width:185px!important;*/
/*   display:inline-block;*/
/* }*/
/* .caption.latest{*/
/*       width: 100px;*/
/*     display: inline-block;*/
/*     vertical-align: top;*/
/*     margin-top: 9px;*/
/*     margin-left: -15px;*/
/*     */
/*     line-height: 47px;*/
/* }*/
/* .caption.latest p{*/
/*   font-size:14px;*/
/* }*/
/* .caption.latest h4{*/
/*   font-size:18px;*/
/*   font-weight:bold!important;*/
/* }*/
/* .caption.latest span{*/
/*   font-size:14px;*/
/* }*/
/* .latest_img{*/
/*   height: 670px;*/
/* }*/
/* .logo-menu{*/
/*   height:150px;*/
/* }*/
/* .logo{*/
/*   margin-top:35px;*/
/*   display:inline-block;*/
/*   margin-left:5%;*/
/*   */
/* }*/
/* .logo img{*/
/*   width:80px;*/
/*   height:80px;*/
/*   display:inline-block;*/
/* }*/
/* .logo p{*/
/*     Vertical-align: top;*/
/*     display: inline-block;*/
/*     font-size: 28px;*/
/*     margin-left: 22px;*/
/*     margin-top: 33px;*/
/* }*/
/* */
/* </style>*/
