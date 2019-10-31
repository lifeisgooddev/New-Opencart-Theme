<?php

/* __string_template__1ab90b0974c8070c5c21fe32299800dd2dcfacea5b74462ab765ca147a2002bf */
class __TwigTemplate_5839a0f2bec42ecaea4c0f053471266d39e9ca340663277c7eb39234180e0fb1 extends Twig_Template
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
<div id=\"checkout-cart\" class=\"container\">
 
  
 
  <div class=\"row\">";
        // line 6
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 7
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 9
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>Checkout Cart</h1>
      
      <div class=\"col-md-8 col-md-offset-2\">
        
      <div class=\"col-md-8\">
      <form action=\"";
        // line 20
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        
        <div class=\"table-responsive\">
          <div class=\"pull-left table_cart hidden-xs\"><p class=\"btn btn-primary\">Cart</p></div>
          <table class=\"table table-bordered\">
            
            <tbody>
            
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "            <tr>
              <td class=\"text-center\">";
            // line 30
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left product_name_show\"><a href=\"";
            // line 31
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 32
            echo "                ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 33
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 34
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                ";
            }
            // line 36
            echo "                ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br />
                <small>";
                // line 37
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 38
            echo "                ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 39
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            // line 40
            echo "                <br /><span>Here</span>
                <br /><span class=\"last_span\">Plant Categories</span>
              </td>
              
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 45
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 48
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-left\">";
            // line 50
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
             
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 55
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 57
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 62
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 64
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 65
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "              </tbody>
            
          </table>
          <div class=\"btn_group\">
          <div class=\"pull-left\"><a href=\"";
        // line 72
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
          <div class=\"pull-right\"><button type=\"submit\" data-toggle=\"tooltip\" title=\"";
        // line 73
        echo (isset($context["button_update"]) ? $context["button_update"] : null);
        echo "\" class=\"btn btn-primary\">Update Cart</button></div>
          </div>
        </div>
      </form>
      </div>
      
        <div class=\"col-md-4 checkout_div\">
          <div class=\"pull-left table_total hidden-xs\"><p class=\"btn btn-primary\">Cart Totals</p></div>
          <div class=\"row\">
            <h3>Cart Note</h3>
          \t<textarea></textarea>
          </div>
          <table class=\"table table-bordered\">
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 87
            echo "            <tr>
              <td class=\"text-center\"><h4>";
            // line 88
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</h4></td>
              <td class=\"text-center\"><h4>";
            // line 89
            echo $this->getAttribute($context["total"], "text", array());
            echo "</h4></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "          </table>
          <div class=\"col-md-10\">
          <div class=\"pull-left center\"><a href=\"";
        // line 94
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary\">Proceed to Checkout</a></div>
          </div>
        </div>
      </div>
      ";
        // line 98
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 99
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>

<style>
.container h1{
  text-align:center;
 }
  .container{
  \tmargin-top:80px;
  }
  .table-bordered>tbody>tr>td{
  border:0;
  }
  .img-thumbnail{
  \twidth:146px;
  \tborder:0;
  }
  .btn.btn-primary{
   color: #ffffff;
    
    background-color: rgb(137,209,0);
    background-image: none;
    background-repeat: repeat-x;
    border:0;
    border-radius:0;
    text-shadow:none;
  \tfont-size:16px;
      width: 220px;
    height: 50px;
  }
  .pull-right{
      padding-bottom: 20px;
      padding-top: 20px;
  }
  .pull-left{
      padding-bottom: 20px;
      padding-top: 20px;
  }
  .pull-left .btn-primary{
  \tdisplay:flex;
  \tjustify-content:center;
  \talign-items:center;
  }
  .table-responsive{
  \t border: 1px solid #ddd;
  }
  .table.table-bordered
  {
  \tborder:none;
  \tborder-bottom: 1px solid #ddd;
  }
  .btn_group{
  \tmargin-left:5%;
  \tmargin-right:5%;
  }
  .table{
  \tmargin-bottom:0px;
  \tmargin-top:30px;
  }
  .table_cart{
  \tposition: absolute;
    left: 37%;
    top: -46px;
  }
  #content h1{
  \tmargin-bottom:50px;
  }
  .checkout_div{
  \tbackground-color:rgb(242,237,229);
  }
   .table_total{
  \tposition: absolute;
    left: 23%;
    top: -46px;
  }
  .checkout_div .row{
  \tmargin-top:80px;
  \tmargin-left:5px;
  \tmargin-right:5px;
  }
  .checkout_div h3{
  \ttext-align:center;
  }
  .checkout_div textarea{
  \twidth:100%;
  \theight:170px;
  }
  .center{
  \tmargin-left:auto;
  margin-right:auto;
  }
  .checkout_div h4{
  \tfont-size:17px;
  \tfont-weight:bold;
  }
  .table-bordered>tbody>tr>td {
    font-size: 15px;
    line-height: 30px;
}
  .product_name_show{
  \tfont-weight:bold;
  \tcolor:black;
  }
  .last_span{
  \tfont-weight:normal;
  \tcolor:rgb(127,209,0);
  \tfont-size:13px;
  }
</style>
";
        // line 208
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__1ab90b0974c8070c5c21fe32299800dd2dcfacea5b74462ab765ca147a2002bf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 208,  277 => 99,  273 => 98,  266 => 94,  262 => 92,  253 => 89,  249 => 88,  246 => 87,  242 => 86,  226 => 73,  220 => 72,  214 => 68,  205 => 65,  201 => 64,  194 => 62,  186 => 57,  182 => 55,  177 => 54,  167 => 50,  160 => 48,  152 => 45,  145 => 40,  139 => 39,  134 => 38,  130 => 37,  125 => 36,  122 => 35,  113 => 34,  106 => 33,  103 => 32,  95 => 31,  81 => 30,  78 => 29,  74 => 28,  63 => 20,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  36 => 9,  33 => 8,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ header1 }}*/
/* <div id="checkout-cart" class="container">*/
/*  */
/*   */
/*  */
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>Checkout Cart</h1>*/
/*       */
/*       <div class="col-md-8 col-md-offset-2">*/
/*         */
/*       <div class="col-md-8">*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         */
/*         <div class="table-responsive">*/
/*           <div class="pull-left table_cart hidden-xs"><p class="btn btn-primary">Cart</p></div>*/
/*           <table class="table table-bordered">*/
/*             */
/*             <tbody>*/
/*             */
/*             {% for product in products %}*/
/*             <tr>*/
/*               <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a> {% endif %}</td>*/
/*               <td class="text-left product_name_show"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                 {% if product.option %}*/
/*                 {% for option in product.option %} <br />*/
/*                 <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                 {% endif %}*/
/*                 {% if product.reward %} <br />*/
/*                 <small>{{ product.reward }}</small> {% endif %}*/
/*                 {% if product.recurring %} <br />*/
/*                 <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}*/
/*                 <br /><span>Here</span>*/
/*                 <br /><span class="last_span">Plant Categories</span>*/
/*               </td>*/
/*               */
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   */
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-left">{{ product.model }}</td>*/
/*              */
/*             </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*             <tr>*/
/*               <td></td>*/
/*               <td class="text-left">{{ voucher.description }}</td>*/
/*               <td class="text-left"></td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*               </tbody>*/
/*             */
/*           </table>*/
/*           <div class="btn_group">*/
/*           <div class="pull-left"><a href="{{ continue }}" class="btn btn-primary">{{ button_shopping }}</a></div>*/
/*           <div class="pull-right"><button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary">Update Cart</button></div>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       </div>*/
/*       */
/*         <div class="col-md-4 checkout_div">*/
/*           <div class="pull-left table_total hidden-xs"><p class="btn btn-primary">Cart Totals</p></div>*/
/*           <div class="row">*/
/*             <h3>Cart Note</h3>*/
/*           	<textarea></textarea>*/
/*           </div>*/
/*           <table class="table table-bordered">*/
/*             {% for total in totals %}*/
/*             <tr>*/
/*               <td class="text-center"><h4>{{ total.title }}:</h4></td>*/
/*               <td class="text-center"><h4>{{ total.text }}</h4></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           </table>*/
/*           <div class="col-md-10">*/
/*           <div class="pull-left center"><a href="{{ checkout }}" class="btn btn-primary">Proceed to Checkout</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* */
/* <style>*/
/* .container h1{*/
/*   text-align:center;*/
/*  }*/
/*   .container{*/
/*   	margin-top:80px;*/
/*   }*/
/*   .table-bordered>tbody>tr>td{*/
/*   border:0;*/
/*   }*/
/*   .img-thumbnail{*/
/*   	width:146px;*/
/*   	border:0;*/
/*   }*/
/*   .btn.btn-primary{*/
/*    color: #ffffff;*/
/*     */
/*     background-color: rgb(137,209,0);*/
/*     background-image: none;*/
/*     background-repeat: repeat-x;*/
/*     border:0;*/
/*     border-radius:0;*/
/*     text-shadow:none;*/
/*   	font-size:16px;*/
/*       width: 220px;*/
/*     height: 50px;*/
/*   }*/
/*   .pull-right{*/
/*       padding-bottom: 20px;*/
/*       padding-top: 20px;*/
/*   }*/
/*   .pull-left{*/
/*       padding-bottom: 20px;*/
/*       padding-top: 20px;*/
/*   }*/
/*   .pull-left .btn-primary{*/
/*   	display:flex;*/
/*   	justify-content:center;*/
/*   	align-items:center;*/
/*   }*/
/*   .table-responsive{*/
/*   	 border: 1px solid #ddd;*/
/*   }*/
/*   .table.table-bordered*/
/*   {*/
/*   	border:none;*/
/*   	border-bottom: 1px solid #ddd;*/
/*   }*/
/*   .btn_group{*/
/*   	margin-left:5%;*/
/*   	margin-right:5%;*/
/*   }*/
/*   .table{*/
/*   	margin-bottom:0px;*/
/*   	margin-top:30px;*/
/*   }*/
/*   .table_cart{*/
/*   	position: absolute;*/
/*     left: 37%;*/
/*     top: -46px;*/
/*   }*/
/*   #content h1{*/
/*   	margin-bottom:50px;*/
/*   }*/
/*   .checkout_div{*/
/*   	background-color:rgb(242,237,229);*/
/*   }*/
/*    .table_total{*/
/*   	position: absolute;*/
/*     left: 23%;*/
/*     top: -46px;*/
/*   }*/
/*   .checkout_div .row{*/
/*   	margin-top:80px;*/
/*   	margin-left:5px;*/
/*   	margin-right:5px;*/
/*   }*/
/*   .checkout_div h3{*/
/*   	text-align:center;*/
/*   }*/
/*   .checkout_div textarea{*/
/*   	width:100%;*/
/*   	height:170px;*/
/*   }*/
/*   .center{*/
/*   	margin-left:auto;*/
/*   margin-right:auto;*/
/*   }*/
/*   .checkout_div h4{*/
/*   	font-size:17px;*/
/*   	font-weight:bold;*/
/*   }*/
/*   .table-bordered>tbody>tr>td {*/
/*     font-size: 15px;*/
/*     line-height: 30px;*/
/* }*/
/*   .product_name_show{*/
/*   	font-weight:bold;*/
/*   	color:black;*/
/*   }*/
/*   .last_span{*/
/*   	font-weight:normal;*/
/*   	color:rgb(127,209,0);*/
/*   	font-size:13px;*/
/*   }*/
/* </style>*/
/* {{ footer }} */
