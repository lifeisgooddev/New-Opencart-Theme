<?php

/* __string_template__d871c8cf16cf740301c55f2ab3743957932d8da8900412b101df054411b2a03e */
class __TwigTemplate_d08df1996f2a3e420df6bbe77ee59df4347cd6b559e7fa971434d9e0d190d076 extends Twig_Template
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
<style>
.thumbnail a>img, .thumbnail>img {
    margin-right: auto;
    margin-left: auto;
    width: 131px;
}
.thumbnail{
  border:0px!important;
}
#thumb_big{
  width:500px;
}
.image-additional {
     max-width: none!important; 
}
.cart_menu{
    border:none;
    border-top: 1px solid #f5f5f5;
    border-bottom: 1px solid #f5f5f5;
    font-size:15px;
    }
.cart_menu li::after{
  content:none;
}
.cart_home{
  margin-left:20%;
}
.container{
  margin-top:80px;
}
.cart_row{
  margin-left:12%;
}
#product-product p{
    color: rgb(121,121,121);
    font-size:15px;
}
.text-animate-1.margin_bottom_20
{
  color:rgb(137,209,0)!important;
}
.margin_bottom_20{
  font-weight:bold;
}
.margin_bottom_30{
  font-weight:bold;
}
.btn-block{
  width:30%;
}
.btn-primary {
    color: #ffffff;
    
    background-color: rgb(137,209,0);
    background-image: none;
    background-repeat: repeat-x;
    border:0;
    border-radius:0;
    text-shadow:none;
}
.cart_right{
  margin-top:50px;
}
.underline_div{
  border-bottom: 2px solid #ddd;
\tmargin-top:20px;
 }
  .underline_div p{
  \tfont-size:14px!important;
  \tdisplay:inline-block;
  }
  .text-right{
  \tfloat:right;
  \tmargin-right:5px;
  }
  #product{
  \tmargin-bottom:80px;
  }
@media (max-width: 767px)
{
  .img-logo {
      width: 168%!important;
  }
  .text-slider.text-left
  {
  \ttext-align:center;
  }
  .cart_right{
  \tpadding-right: 29px;
    padding-left: 25px;
  }
  .cart_row{
  \tmargin-left:0;
  }
  .btn-block {
    width: 100%;
\t}
}
</style>
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb cart_menu\">
    
    <li class=\"cart_home\"><a href=\"";
        // line 104
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 0, array(), "array"), "href", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 0, array(), "array"), "text", array());
        echo "</a></li>
    >
    <li><a href=\"";
        // line 106
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 1, array(), "array"), "href", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 1, array(), "array"), "text", array());
        echo "</a></li>
  </ul>
  <div class=\"row\">";
        // line 108
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 109
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 110
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 111
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 112
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 113
            echo "    ";
        } else {
            // line 114
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 115
            echo "    ";
        }
        // line 116
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 117
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 118
            echo "        ";
            $context["class"] = "col-sm-6 cart_row";
            // line 119
            echo "        ";
        } else {
            // line 120
            echo "        ";
            $context["class"] = "col-sm-5 cart_row";
            // line 121
            echo "        ";
        }
        // line 122
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> ";
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 123
            echo "          <ul class=\"thumbnails\">
            ";
            // line 124
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 125
                echo "            <li><a class=\"thumbnail\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img id=\"thumb_big\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" /></a></li>
            ";
            }
            // line 127
            echo "            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 128
                echo "            <div style=\"margin-left:168px;\">
            ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 130
                    echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "            </div>
            ";
            }
            // line 134
            echo "          </ul>
          ";
        }
        // line 136
        echo "         
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 138
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 139
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 140
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 143
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 145
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 150
                    echo "                <tr>
                  <td>";
                    // line 151
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 152
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "              </table>
            </div>
            ";
        }
        // line 160
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 161
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 164
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 165
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 166
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 168
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 169
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 174
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 176
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 181
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 182
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 192
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 194
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 197
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 201
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 203
            echo "              </form>
            </div>
            ";
        }
        // line 205
        echo "</div>
        </div>
        ";
        // line 207
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 208
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 209
            echo "        ";
        } else {
            // line 210
            echo "        ";
            $context["class"] = "col-sm-3 cart_right";
            // line 211
            echo "        ";
        }
        // line 212
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          <div class=\" text-slider  text-left \">
                          
            <p class=\"text-animate-1  margin_bottom_20 \">Aquatic plants and wild Grass</p>
            <h3 class=\"text-animate-2 margin_bottom_20\">Acorus calamus <br> variegated</h3>                         
              
            <h3 class=\"text-animate-4 margin_bottom_30 \" style=\"color:black;\">RM 330</h3>
            
          </div> 
          
          <div id=\"product\"> ";
        // line 222
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 223
            echo "            <hr>
            <h3>";
            // line 224
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 226
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 227
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 228
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 229
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 230
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 232
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 233
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 234
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 235
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 237
                    echo "              </select>
            </div>
            ";
                }
                // line 240
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 241
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 242
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 243
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 244
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 246
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 247
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 248
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 249
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 250
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 251
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo " </div>
            </div>
            ";
                }
                // line 256
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 257
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 258
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 259
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 260
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 262
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 263
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 264
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 265
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 266
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 267
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 269
                    echo " </div>
            </div>
            ";
                }
                // line 272
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 273
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 274
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 275
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 278
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 279
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 280
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 281
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 284
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 285
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 286
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 287
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 288
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 291
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 292
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 293
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 295
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 301
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 302
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 303
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 305
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 311
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 312
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 313
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 315
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 321
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "            ";
        }
        // line 323
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 324
            echo "            <hr>
            <h3>";
            // line 325
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 328
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 330
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 336
        echo "            <div class=\"form-group\">
              
              <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 338
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 339
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              <br />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 341
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
            </div>
            
          <p>Established by Mr Tan Ah Lee in 1976, Merry</p>
          <p>Horticulture hold more than 35 years of experience in</p>
          <p>the field of supplying tropical outdoor and indoor</p>
          <p>plants. Ever the years, Merry Horticulture has gained a</p>
          <p>solid reputation in delivering quality plants and </p> 
            
          
      </div>
      <div class=\"underline_div\">
      \t<p class=\"text-left\"> Comes with Pots</p>
        <p class=\"text-right\">Yes</p>
      </div>
      <div class=\"underline_div\">
      \t<p class=\"text-left\"> Watering</p>
        <p class=\"text-right\">Once a day</p>
      </div>
      <div class=\"underline_div\">
      \t<p class=\"text-left\"> Sunlight</p>
        <p class=\"text-right\">Not required</p>
      </div>
      <div class=\"underline_div\">
      \t<p class=\"text-left\"> Best Environment</p>
        <p class=\"text-right\">Indoor, Low humidity</p>
      </div>
      <div class=\"underline_div\">
      \t<p class=\"text-left\"> Maximum Growth Height</p>
        <p class=\"text-right\">180cm</p>
      </div>
      <div class=\"underline_div\">
      \t<p class=\"text-left\"> Flower</p>
        <p class=\"text-right\">Yes</p>
      </div>
      </div>
      ";
        // line 377
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 378
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 456
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 461
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 467
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 534
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 538
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
";
        // line 576
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "__string_template__d871c8cf16cf740301c55f2ab3743957932d8da8900412b101df054411b2a03e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1141 => 576,  1100 => 538,  1093 => 534,  1023 => 467,  1014 => 461,  1006 => 456,  925 => 378,  921 => 377,  880 => 341,  875 => 339,  871 => 338,  867 => 336,  861 => 332,  850 => 330,  846 => 329,  842 => 328,  836 => 325,  833 => 324,  830 => 323,  827 => 322,  821 => 321,  808 => 315,  801 => 313,  794 => 312,  791 => 311,  778 => 305,  771 => 303,  764 => 302,  761 => 301,  748 => 295,  741 => 293,  734 => 292,  731 => 291,  723 => 288,  715 => 287,  711 => 286,  704 => 285,  701 => 284,  689 => 281,  683 => 280,  676 => 279,  673 => 278,  661 => 275,  655 => 274,  648 => 273,  645 => 272,  640 => 269,  632 => 267,  625 => 266,  623 => 265,  618 => 264,  602 => 263,  596 => 262,  592 => 260,  586 => 259,  582 => 258,  575 => 257,  572 => 256,  567 => 253,  559 => 251,  552 => 250,  550 => 249,  546 => 248,  528 => 247,  522 => 246,  518 => 244,  512 => 243,  508 => 242,  501 => 241,  498 => 240,  493 => 237,  486 => 235,  479 => 234,  477 => 233,  470 => 232,  466 => 231,  462 => 230,  456 => 229,  450 => 228,  443 => 227,  440 => 226,  436 => 225,  432 => 224,  429 => 223,  427 => 222,  413 => 212,  410 => 211,  407 => 210,  404 => 209,  401 => 208,  399 => 207,  395 => 205,  390 => 203,  384 => 201,  375 => 197,  369 => 194,  364 => 192,  351 => 182,  347 => 181,  339 => 176,  334 => 174,  326 => 169,  322 => 168,  318 => 166,  316 => 165,  312 => 164,  307 => 161,  304 => 160,  299 => 157,  292 => 155,  283 => 152,  279 => 151,  276 => 150,  272 => 149,  265 => 145,  261 => 143,  257 => 142,  253 => 140,  251 => 139,  247 => 138,  243 => 136,  239 => 134,  235 => 132,  218 => 130,  214 => 129,  211 => 128,  208 => 127,  194 => 125,  192 => 124,  189 => 123,  184 => 122,  181 => 121,  178 => 120,  175 => 119,  172 => 118,  170 => 117,  163 => 116,  160 => 115,  157 => 114,  154 => 113,  151 => 112,  148 => 111,  145 => 110,  143 => 109,  139 => 108,  132 => 106,  125 => 104,  19 => 1,);
    }
}
/* {{ header1 }}*/
/* <style>*/
/* .thumbnail a>img, .thumbnail>img {*/
/*     margin-right: auto;*/
/*     margin-left: auto;*/
/*     width: 131px;*/
/* }*/
/* .thumbnail{*/
/*   border:0px!important;*/
/* }*/
/* #thumb_big{*/
/*   width:500px;*/
/* }*/
/* .image-additional {*/
/*      max-width: none!important; */
/* }*/
/* .cart_menu{*/
/*     border:none;*/
/*     border-top: 1px solid #f5f5f5;*/
/*     border-bottom: 1px solid #f5f5f5;*/
/*     font-size:15px;*/
/*     }*/
/* .cart_menu li::after{*/
/*   content:none;*/
/* }*/
/* .cart_home{*/
/*   margin-left:20%;*/
/* }*/
/* .container{*/
/*   margin-top:80px;*/
/* }*/
/* .cart_row{*/
/*   margin-left:12%;*/
/* }*/
/* #product-product p{*/
/*     color: rgb(121,121,121);*/
/*     font-size:15px;*/
/* }*/
/* .text-animate-1.margin_bottom_20*/
/* {*/
/*   color:rgb(137,209,0)!important;*/
/* }*/
/* .margin_bottom_20{*/
/*   font-weight:bold;*/
/* }*/
/* .margin_bottom_30{*/
/*   font-weight:bold;*/
/* }*/
/* .btn-block{*/
/*   width:30%;*/
/* }*/
/* .btn-primary {*/
/*     color: #ffffff;*/
/*     */
/*     background-color: rgb(137,209,0);*/
/*     background-image: none;*/
/*     background-repeat: repeat-x;*/
/*     border:0;*/
/*     border-radius:0;*/
/*     text-shadow:none;*/
/* }*/
/* .cart_right{*/
/*   margin-top:50px;*/
/* }*/
/* .underline_div{*/
/*   border-bottom: 2px solid #ddd;*/
/* 	margin-top:20px;*/
/*  }*/
/*   .underline_div p{*/
/*   	font-size:14px!important;*/
/*   	display:inline-block;*/
/*   }*/
/*   .text-right{*/
/*   	float:right;*/
/*   	margin-right:5px;*/
/*   }*/
/*   #product{*/
/*   	margin-bottom:80px;*/
/*   }*/
/* @media (max-width: 767px)*/
/* {*/
/*   .img-logo {*/
/*       width: 168%!important;*/
/*   }*/
/*   .text-slider.text-left*/
/*   {*/
/*   	text-align:center;*/
/*   }*/
/*   .cart_right{*/
/*   	padding-right: 29px;*/
/*     padding-left: 25px;*/
/*   }*/
/*   .cart_row{*/
/*   	margin-left:0;*/
/*   }*/
/*   .btn-block {*/
/*     width: 100%;*/
/* 	}*/
/* }*/
/* </style>*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb cart_menu">*/
/*     */
/*     <li class="cart_home"><a href="{{ breadcrumbs[0].href }}">{{ breadcrumbs[0].text }}</a></li>*/
/*     >*/
/*     <li><a href="{{ breadcrumbs[1].href }}">{{ breadcrumbs[1].text }}</a></li>*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6 cart_row' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-5 cart_row' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> {% if thumb or images %}*/
/*           <ul class="thumbnails">*/
/*             {% if thumb %}*/
/*             <li><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img id="thumb_big" src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endif %}*/
/*             {% if images %}*/
/*             <div style="margin-left:168px;">*/
/*             {% for image in images %}*/
/*             <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ heading_title }}"> <img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" /></a></li>*/
/*             {% endfor %}*/
/*             </div>*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*          */
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*               <form class="form-horizontal" id="form-review">*/
/*                 <div id="review"></div>*/
/*                 <h2>{{ text_write }}</h2>*/
/*                 {% if review_guest %}*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                     <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                     <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                     <div class="help-block">{{ text_note }}</div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <div class="col-sm-12">*/
/*                     <label class="control-label">{{ entry_rating }}</label>*/
/*                     &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                     <input type="radio" name="rating" value="1" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="2" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="3" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="4" />*/
/*                     &nbsp;*/
/*                     <input type="radio" name="rating" value="5" />*/
/*                     &nbsp;{{ entry_good }}</div>*/
/*                 </div>*/
/*                 {{ captcha }}*/
/*                 <div class="buttons clearfix">*/
/*                   <div class="pull-right">*/
/*                     <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 {{ text_login }}*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% endif %}</div>*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-3 cart_right' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class=" text-slider  text-left ">*/
/*                           */
/*             <p class="text-animate-1  margin_bottom_20 ">Aquatic plants and wild Grass</p>*/
/*             <h3 class="text-animate-2 margin_bottom_20">Acorus calamus <br> variegated</h3>                         */
/*               */
/*             <h3 class="text-animate-4 margin_bottom_30 " style="color:black;">RM 330</h3>*/
/*             */
/*           </div> */
/*           */
/*           <div id="product"> {% if options %}*/
/*             <hr>*/
/*             <h3>{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*               */
/*               <input type="hidden" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               <br />*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*             </div>*/
/*             */
/*           <p>Established by Mr Tan Ah Lee in 1976, Merry</p>*/
/*           <p>Horticulture hold more than 35 years of experience in</p>*/
/*           <p>the field of supplying tropical outdoor and indoor</p>*/
/*           <p>plants. Ever the years, Merry Horticulture has gained a</p>*/
/*           <p>solid reputation in delivering quality plants and </p> */
/*             */
/*           */
/*       </div>*/
/*       <div class="underline_div">*/
/*       	<p class="text-left"> Comes with Pots</p>*/
/*         <p class="text-right">Yes</p>*/
/*       </div>*/
/*       <div class="underline_div">*/
/*       	<p class="text-left"> Watering</p>*/
/*         <p class="text-right">Once a day</p>*/
/*       </div>*/
/*       <div class="underline_div">*/
/*       	<p class="text-left"> Sunlight</p>*/
/*         <p class="text-right">Not required</p>*/
/*       </div>*/
/*       <div class="underline_div">*/
/*       	<p class="text-left"> Best Environment</p>*/
/*         <p class="text-right">Indoor, Low humidity</p>*/
/*       </div>*/
/*       <div class="underline_div">*/
/*       	<p class="text-left"> Maximum Growth Height</p>*/
/*         <p class="text-right">180cm</p>*/
/*       </div>*/
/*       <div class="underline_div">*/
/*       	<p class="text-left"> Flower</p>*/
/*         <p class="text-right">Yes</p>*/
/*       </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 				$('#cart > ul').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
/* */
