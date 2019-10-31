<?php

/* __string_template__02a92cf4569371f3c036de10d7ffe3e7d15c7e3438307ff4ee188e778cf26443 */
class __TwigTemplate_ab13617c56bda9287bfd364c821b01dc9b611db0ce32aa431bd718f066d1e308 extends Twig_Template
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
        echo "<style>
  .container{
    padding-left:0px!important;
    padding-right:0px!important;
  }
    @media (max-width: 567px){
  \t#footer_copyright p {
    color: #fff!important;
    font-size: 12px!important;
}
  #footer_copyright{
      background: rgb(137,209,0)!important;
      padding-top: 30px!important;
      padding-bottom: 30px!important;
      text-align: center!important;
      color:white!important;
      width:100%;
  }
  #footer_copyright p{
      color: #fff!important;
    font-size: 14px!important;
  }
  footer{
    background-color:white!important;
    border-top:none!important;
    margin-top:200px;
  }
  footer h2{
    color:black;
    padding-bottom:10px;
  }
  footer a{
    font-size:16px;
    color:black;
  }
  footer  li{
    padding-bottom:20px; 
  }
  footer .row{
    padding-bottom:30px;
  }
  footer p{
    color: #666;
    font-size:20px;
  }
  footer img{
    padding-bottom:50px;
  }
  }
@media (max-width: 765px){
.shop {
    margin-left: 10%;
}
.logo1{
  margin-left:10%;
}
}
</style>
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-5 col-sm-5 col-xs-10 logo1\" style=\"margin-left:10%\">
        <img src=\"image/catalog/demo/slider/Logo@2x.png\"  class=\"img-responsive\" style=\"width:600px\"/>
        <p>
          Established by Mr Tan Ah Lee in 1976, Merry Horticulture hold more</p>
          <p>than 35 years of experience in the field of supplying tropical outdoor</p>
          <p>and indoor plants. Ever the years, Merry Horticulture has gained a solid</p>
          <p>reputation in delivering quality plants and expanded its market locally</p>
          <p>and globally.
        </p>
      </div>
      <div class=\"col-md-2 col-sm-2 col-xs-5 shop\" style=\"margin-left:10%\">
        <h2>Shop</h2>
        <ul class=\"list-unstyled\">
          ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 76
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </ul>
      </div>
      <div class=\"col-md-2 col-sm-2 col-xs-5\">
        <h2>Account</h2>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 83
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 84
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 85
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">Shipping & Returns</a></li>
          <li><a href=\"";
        // line 86
        echo $this->getAttribute($this->getAttribute((isset($context["informations"]) ? $context["informations"] : null), 3, array(), "array"), "href", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["informations"]) ? $context["informations"] : null), 3, array(), "array"), "title", array());
        echo "</a></li>
          <li><a href=\"";
        // line 87
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">FaQs</a></li>
          <li><a href=\"";
        // line 88
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          
        </ul>
      </div>
    </div>
    <div id=\"footer_copyright\">
    <p >";
        // line 94
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
    </div>
  </div>
</footer>
";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 99
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
</body></html>";
    }

    public function getTemplateName()
    {
        return "__string_template__02a92cf4569371f3c036de10d7ffe3e7d15c7e3438307ff4ee188e778cf26443";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 101,  165 => 99,  161 => 98,  154 => 94,  143 => 88,  139 => 87,  133 => 86,  129 => 85,  123 => 84,  117 => 83,  110 => 78,  99 => 76,  95 => 75,  19 => 1,);
    }
}
/* <style>*/
/*   .container{*/
/*     padding-left:0px!important;*/
/*     padding-right:0px!important;*/
/*   }*/
/*     @media (max-width: 567px){*/
/*   	#footer_copyright p {*/
/*     color: #fff!important;*/
/*     font-size: 12px!important;*/
/* }*/
/*   #footer_copyright{*/
/*       background: rgb(137,209,0)!important;*/
/*       padding-top: 30px!important;*/
/*       padding-bottom: 30px!important;*/
/*       text-align: center!important;*/
/*       color:white!important;*/
/*       width:100%;*/
/*   }*/
/*   #footer_copyright p{*/
/*       color: #fff!important;*/
/*     font-size: 14px!important;*/
/*   }*/
/*   footer{*/
/*     background-color:white!important;*/
/*     border-top:none!important;*/
/*     margin-top:200px;*/
/*   }*/
/*   footer h2{*/
/*     color:black;*/
/*     padding-bottom:10px;*/
/*   }*/
/*   footer a{*/
/*     font-size:16px;*/
/*     color:black;*/
/*   }*/
/*   footer  li{*/
/*     padding-bottom:20px; */
/*   }*/
/*   footer .row{*/
/*     padding-bottom:30px;*/
/*   }*/
/*   footer p{*/
/*     color: #666;*/
/*     font-size:20px;*/
/*   }*/
/*   footer img{*/
/*     padding-bottom:50px;*/
/*   }*/
/*   }*/
/* @media (max-width: 765px){*/
/* .shop {*/
/*     margin-left: 10%;*/
/* }*/
/* .logo1{*/
/*   margin-left:10%;*/
/* }*/
/* }*/
/* </style>*/
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-5 col-sm-5 col-xs-10 logo1" style="margin-left:10%">*/
/*         <img src="image/catalog/demo/slider/Logo@2x.png"  class="img-responsive" style="width:600px"/>*/
/*         <p>*/
/*           Established by Mr Tan Ah Lee in 1976, Merry Horticulture hold more</p>*/
/*           <p>than 35 years of experience in the field of supplying tropical outdoor</p>*/
/*           <p>and indoor plants. Ever the years, Merry Horticulture has gained a solid</p>*/
/*           <p>reputation in delivering quality plants and expanded its market locally</p>*/
/*           <p>and globally.*/
/*         </p>*/
/*       </div>*/
/*       <div class="col-md-2 col-sm-2 col-xs-5 shop" style="margin-left:10%">*/
/*         <h2>Shop</h2>*/
/*         <ul class="list-unstyled">*/
/*           {% for category in categories %}*/
/*             <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-md-2 col-sm-2 col-xs-5">*/
/*         <h2>Account</h2>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ wishlist }}">Shipping & Returns</a></li>*/
/*           <li><a href="{{ informations[3].href }}">{{ informations[3].title }}</a></li>*/
/*           <li><a href="{{ account }}">FaQs</a></li>*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           */
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <div id="footer_copyright">*/
/*     <p >{{ powered }}</p>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/*   <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* </body></html>*/
