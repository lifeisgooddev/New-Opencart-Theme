<?php

/* __string_template__36b49401ade75cbdfe38a9dc108371b0e66a18eaa9683e85969055cb84b4990a */
class __TwigTemplate_1b2d1bedd304a40a71761fc55cb0fe2a0260921e8a12b9d90632fd460c5262dd extends Twig_Template
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
        echo (isset($context["header1"]) ? $context["header1"] : null);
        echo "

<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">";
        // line 5
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</span>
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav menu_ul\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "        ";
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 12
                echo "        <li class=\"dropdown\"><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 15
                    echo "              <ul class=\"list-unstyled\">
                ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 17
                        echo "                <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "              </ul>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "</div>
            <a href=\"";
                // line 21
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"see-all\">";
                echo (isset($context["text_all"]) ? $context["text_all"] : null);
                echo " ";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a> </div>
        </li>
        ";
            } else {
                // line 24
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
        ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </ul>
    </div>
  </nav>
</div>


<div class=\"row\" style=\"margin-left:11%;margin-right:11%;    margin-top: 100px;\">
 ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "  
  <div class=\"product-layout col-md-3 col-sm-3 col-xs-6\" style=\"float:left;\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 38
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" id=\"featured_image\"/></a></div>
      <div class=\"caption featured\">
        <p>";
            // line 40
            echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 1, array(), "array"), "text", array());
            echo "</p>
        <h4><a href=\"";
            // line 41
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
        <span>";
            // line 42
            echo $this->getAttribute($context["product"], "model", array());
            echo "</span>
       
       
      </div>
      
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>

<style>
.product-thumb {
    border: 0px!important;
}
h3{
  color:black!important;
}
#featured_text
{
  margin-left:13%;
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
#menu{
  margin-left:13%;
  margin-right:13%;
  background-color: rgb(252,252,252);
  background-image:none;
  border-width:0px;
    min-height: 40px;
}
#menu a{
  color:#000!important;
}
#menu #category {
   color:#000!important;
}
.menu_ul li
{
    font-size: 17px;
    margin-left: 6%;
}
.menu_ul
{
  width:100%;
      padding-top: 15px;
    padding-bottom: 15px;
}
.container{
  margin-top:80px;
}
</style>
";
        // line 117
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__36b49401ade75cbdfe38a9dc108371b0e66a18eaa9683e85969055cb84b4990a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 117,  158 => 50,  144 => 42,  138 => 41,  134 => 40,  123 => 38,  118 => 35,  114 => 34,  105 => 27,  99 => 26,  91 => 24,  81 => 21,  78 => 20,  71 => 19,  60 => 17,  56 => 16,  53 => 15,  49 => 14,  41 => 12,  38 => 11,  34 => 10,  26 => 5,  19 => 1,);
    }
}
/* {{ header1 }}*/
/* */
/* <div class="container">*/
/*   <nav id="menu" class="navbar">*/
/*     <div class="navbar-header"><span id="category" class="visible-xs">{{ text_category }}</span>*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav menu_ul">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* */
/* */
/* <div class="row" style="margin-left:11%;margin-right:11%;    margin-top: 100px;">*/
/*  {% for product in products %}*/
/*   */
/*   <div class="product-layout col-md-3 col-sm-3 col-xs-6" style="float:left;">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" id="featured_image"/></a></div>*/
/*       <div class="caption featured">*/
/*         <p>{{ breadcrumbs[1].text}}</p>*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <span>{{ product.model }}</span>*/
/*        */
/*        */
/*       </div>*/
/*       */
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
/* <style>*/
/* .product-thumb {*/
/*     border: 0px!important;*/
/* }*/
/* h3{*/
/*   color:black!important;*/
/* }*/
/* #featured_text*/
/* {*/
/*   margin-left:13%;*/
/* }*/
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
/* #menu{*/
/*   margin-left:13%;*/
/*   margin-right:13%;*/
/*   background-color: rgb(252,252,252);*/
/*   background-image:none;*/
/*   border-width:0px;*/
/*     min-height: 40px;*/
/* }*/
/* #menu a{*/
/*   color:#000!important;*/
/* }*/
/* #menu #category {*/
/*    color:#000!important;*/
/* }*/
/* .menu_ul li*/
/* {*/
/*     font-size: 17px;*/
/*     margin-left: 6%;*/
/* }*/
/* .menu_ul*/
/* {*/
/*   width:100%;*/
/*       padding-top: 15px;*/
/*     padding-bottom: 15px;*/
/* }*/
/* .container{*/
/*   margin-top:80px;*/
/* }*/
/* </style>*/
/* {{ footer }} */
/* */
