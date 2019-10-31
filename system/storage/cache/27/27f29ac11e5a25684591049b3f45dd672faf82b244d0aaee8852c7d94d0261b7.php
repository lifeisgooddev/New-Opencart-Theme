<?php

/* __string_template__d52be52e788afe120f18e07e996893956fdb58ff0458dc221e047ba018a93251 */
class __TwigTemplate_00f80ddb74e7f044658ed5916a1df4679f2c96e4d1aea880cbf275ff76034be0 extends Twig_Template
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
        echo "<div class=\"row featured_text\">
<div class=\"col-md-4\">
\t<h3  style=\"display:inline-block\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
</div>
<div class=\"col-md-8\" style=\"text-align:right;font-weight:bold\">
\t<a class=\"featured_right\" id=\"decorative_btn\" style=\" margin-right:30px;\">Decorative Plants</a>
\t<a class=\"featured_right underline\" id=\"flower_btn\">flowers</a>
</div>
</div>
<div class=\"row hidden feature_view\" id=\"decorative\" style=\"margin-left:11%;margin-right:11%;\">
 ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(10, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "  
  <div class=\"product-layout col-md-3 col-sm-4 col-xs-6\" style=\"float:left;\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 15
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "name", array());
            echo "\" class=\"img-responsive\" id=\"featured_image\"/></a></div>
      <div class=\"caption featured\">
        <p>";
            // line 17
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "category_id", array());
            echo "</p>
        <h4><a href=\"";
            // line 18
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "href", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "name", array());
            echo "</a></h4>
        <span>";
            // line 19
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "model", array());
            echo "</span>
       
       
      </div>
      
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  
</div>
<div class=\"row feature_view\" id=\"flower\" style=\"margin-left:11%;margin-right:11%;\">
 ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "  
  <div class=\"product-layout col-md-3 col-sm-4 col-xs-6\" style=\"float:left;\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "name", array());
            echo "\" class=\"img-responsive\" id=\"featured_image\"/></a></div>
      <div class=\"caption featured\">
        <p>";
            // line 36
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "category_id", array());
            echo "</p>
        <h4><a href=\"";
            // line 37
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "href", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "name", array());
            echo "</a></h4>
        <span>";
            // line 38
            echo $this->getAttribute($this->getAttribute((isset($context["products"]) ? $context["products"] : null), $context["i"], array(), "array"), "model", array());
            echo "</span>
       
       
      </div>
      
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  
</div>
<div>
<div class=\"row\">
  <div class=\"product-layout pic col-md-4 col-sm-4 col-xs-12\" style=\"float:left;\">
    <div class=\"image\"></div>
    <div class=\"description\">
      <h4>Decorative</h4>
      <div class=\"rect_div\"></div>
    </div>
  </div>
  <div class=\"product-layout pic1 col-md-4 col-sm-4 col-xs-12\" style=\"float:left;\">
    <div class=\"image\"></div>
    <div class=\"description\">
      <h4>Hanging</h4>
      <div class=\"rect_div\"></div>
    </div>
  </div>
  <div class=\"product-layout pic2 col-md-4 col-sm-4 col-xs-12\" style=\"float:left;\">
    <div class=\"image\"></div>
    <div class=\"description\">
      <h4>Garden</h4>
      <div class=\"rect_div\"></div>
    </div>
  </div>
</div>
<style>
.product-thumb {
    border: 0px!important;
}
h3{
  color:black!important;
}

.featured{
  text-align:center;
  margin-top: 20px;
  margin-bottom: 20px;
}
.featured>p{
  color:rgb(137,209,0);
}
.featured>span{
  color:rgb(0,0,0);
  font-weight:bold;
}
#featured_image{
  max-width:none;
  width: 286px;


}
.caption{
  min-height:0px!important;
}
.middle_img
{
  width:100%;
}
  .featured_text{
  \tmargin-left:14%;
  \tmargin-right:14%;
  }
  .featured_right{
  display:inline-block;
  font-weight:bold;
  font-size:17px;
  margin-top:24px;
  color:black;
  cursor:pointer;
  }
  .underline{
  text-decoration:underline;
  }
  .product-layout{
  padding-left:0px;
  padding-right:0px;
  }
  .rect_div{
  \twidth:170px;
  \theight:15px;
  \tbackground-color:rgb(137,209,0);
  }
  .pic
  {
  background-image:url(\"image/catalog/demo/slider/389bb16e54ace20e0917a036b634d2c5@2x.png\");
 \t    height: auto;
    background-size: 100%;
  \tbackground-repeat:no-repeat;
  }
  .pic1{
  \tbackground-image:url(\"image/catalog/demo/slider/3c6271645e9adaaa92c9336cfbe4f1f1@2x.png\");
 \t    height: auto;
    background-size: 100%;
  \tbackground-repeat:no-repeat;
  }
  .pic2{
  \tbackground-image:url(\"image/catalog/demo/slider/824f825e0c85a4dd322ba860f1e6d375@2x.png\");
 \t    height: auto;
    background-size: 100%;
  \tbackground-repeat:no-repeat;
  }
  .description{
      margin-left: 15%;
    margin-top: 59%;
  \tpadding-bottom:10%;
  }
  .description h4{
  color:white;
  }
  .feature_view{
  \ttransition: 0.5s linear;
  }
</style>
 <script>
   \$('#decorative_btn').click(function(){
   \t\$('#decorative').removeClass('hidden');
   \t\$('#flower').addClass('hidden');
   \t\$('#decorative_btn').addClass('underline');
   \t\$('#flower_btn').removeClass('underline');
   });
   \$('#flower_btn').click(function(){
   \t\$('#flower').removeClass('hidden');
   \t\$('#decorative').addClass('hidden');
   \t\$('#flower_btn').addClass('underline');
   \t\$('#decorative_btn').removeClass('underline');
   });
  </script>
  
  ";
    }

    public function getTemplateName()
    {
        return "__string_template__d52be52e788afe120f18e07e996893956fdb58ff0458dc221e047ba018a93251";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  113 => 38,  107 => 37,  103 => 36,  92 => 34,  87 => 31,  83 => 30,  78 => 27,  64 => 19,  58 => 18,  54 => 17,  43 => 15,  38 => 12,  34 => 11,  23 => 3,  19 => 1,);
    }
}
/* <div class="row featured_text">*/
/* <div class="col-md-4">*/
/* 	<h3  style="display:inline-block">{{ heading_title }}</h3>*/
/* </div>*/
/* <div class="col-md-8" style="text-align:right;font-weight:bold">*/
/* 	<a class="featured_right" id="decorative_btn" style=" margin-right:30px;">Decorative Plants</a>*/
/* 	<a class="featured_right underline" id="flower_btn">flowers</a>*/
/* </div>*/
/* </div>*/
/* <div class="row hidden feature_view" id="decorative" style="margin-left:11%;margin-right:11%;">*/
/*  {% for i in range(10,19) %}*/
/*   */
/*   <div class="product-layout col-md-3 col-sm-4 col-xs-6" style="float:left;">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ products[i].href }}"><img src="{{ products[i].thumb }}" alt="{{ products[i].name }}" title="{{ products[i].name }}" class="img-responsive" id="featured_image"/></a></div>*/
/*       <div class="caption featured">*/
/*         <p>{{ products[i].category_id }}</p>*/
/*         <h4><a href="{{ products[i].href }}">{{ products[i].name }}</a></h4>*/
/*         <span>{{ products[i].model }}</span>*/
/*        */
/*        */
/*       </div>*/
/*       */
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/*   */
/* </div>*/
/* <div class="row feature_view" id="flower" style="margin-left:11%;margin-right:11%;">*/
/*  {% for i in range(0,9) %}*/
/*   */
/*   <div class="product-layout col-md-3 col-sm-4 col-xs-6" style="float:left;">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ products[i].href }}"><img src="{{ products[i].thumb }}" alt="{{ products[i].name }}" title="{{ products[i].name }}" class="img-responsive" id="featured_image"/></a></div>*/
/*       <div class="caption featured">*/
/*         <p>{{ products[i].category_id }}</p>*/
/*         <h4><a href="{{ products[i].href }}">{{ products[i].name }}</a></h4>*/
/*         <span>{{ products[i].model }}</span>*/
/*        */
/*        */
/*       </div>*/
/*       */
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/*   */
/* </div>*/
/* <div>*/
/* <div class="row">*/
/*   <div class="product-layout pic col-md-4 col-sm-4 col-xs-12" style="float:left;">*/
/*     <div class="image"></div>*/
/*     <div class="description">*/
/*       <h4>Decorative</h4>*/
/*       <div class="rect_div"></div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="product-layout pic1 col-md-4 col-sm-4 col-xs-12" style="float:left;">*/
/*     <div class="image"></div>*/
/*     <div class="description">*/
/*       <h4>Hanging</h4>*/
/*       <div class="rect_div"></div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="product-layout pic2 col-md-4 col-sm-4 col-xs-12" style="float:left;">*/
/*     <div class="image"></div>*/
/*     <div class="description">*/
/*       <h4>Garden</h4>*/
/*       <div class="rect_div"></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <style>*/
/* .product-thumb {*/
/*     border: 0px!important;*/
/* }*/
/* h3{*/
/*   color:black!important;*/
/* }*/
/* */
/* .featured{*/
/*   text-align:center;*/
/*   margin-top: 20px;*/
/*   margin-bottom: 20px;*/
/* }*/
/* .featured>p{*/
/*   color:rgb(137,209,0);*/
/* }*/
/* .featured>span{*/
/*   color:rgb(0,0,0);*/
/*   font-weight:bold;*/
/* }*/
/* #featured_image{*/
/*   max-width:none;*/
/*   width: 286px;*/
/* */
/* */
/* }*/
/* .caption{*/
/*   min-height:0px!important;*/
/* }*/
/* .middle_img*/
/* {*/
/*   width:100%;*/
/* }*/
/*   .featured_text{*/
/*   	margin-left:14%;*/
/*   	margin-right:14%;*/
/*   }*/
/*   .featured_right{*/
/*   display:inline-block;*/
/*   font-weight:bold;*/
/*   font-size:17px;*/
/*   margin-top:24px;*/
/*   color:black;*/
/*   cursor:pointer;*/
/*   }*/
/*   .underline{*/
/*   text-decoration:underline;*/
/*   }*/
/*   .product-layout{*/
/*   padding-left:0px;*/
/*   padding-right:0px;*/
/*   }*/
/*   .rect_div{*/
/*   	width:170px;*/
/*   	height:15px;*/
/*   	background-color:rgb(137,209,0);*/
/*   }*/
/*   .pic*/
/*   {*/
/*   background-image:url("image/catalog/demo/slider/389bb16e54ace20e0917a036b634d2c5@2x.png");*/
/*  	    height: auto;*/
/*     background-size: 100%;*/
/*   	background-repeat:no-repeat;*/
/*   }*/
/*   .pic1{*/
/*   	background-image:url("image/catalog/demo/slider/3c6271645e9adaaa92c9336cfbe4f1f1@2x.png");*/
/*  	    height: auto;*/
/*     background-size: 100%;*/
/*   	background-repeat:no-repeat;*/
/*   }*/
/*   .pic2{*/
/*   	background-image:url("image/catalog/demo/slider/824f825e0c85a4dd322ba860f1e6d375@2x.png");*/
/*  	    height: auto;*/
/*     background-size: 100%;*/
/*   	background-repeat:no-repeat;*/
/*   }*/
/*   .description{*/
/*       margin-left: 15%;*/
/*     margin-top: 59%;*/
/*   	padding-bottom:10%;*/
/*   }*/
/*   .description h4{*/
/*   color:white;*/
/*   }*/
/*   .feature_view{*/
/*   	transition: 0.5s linear;*/
/*   }*/
/* </style>*/
/*  <script>*/
/*    $('#decorative_btn').click(function(){*/
/*    	$('#decorative').removeClass('hidden');*/
/*    	$('#flower').addClass('hidden');*/
/*    	$('#decorative_btn').addClass('underline');*/
/*    	$('#flower_btn').removeClass('underline');*/
/*    });*/
/*    $('#flower_btn').click(function(){*/
/*    	$('#flower').removeClass('hidden');*/
/*    	$('#decorative').addClass('hidden');*/
/*    	$('#flower_btn').addClass('underline');*/
/*    	$('#decorative_btn').removeClass('underline');*/
/*    });*/
/*   </script>*/
/*   */
/*   */
