<?php

/* __string_template__4605df2bc808cc633448edfbe91f0abdba13725a8eded84279870a63587bb303 */
class __TwigTemplate_2b557b014264ca1a94e2ca570e13622cfac709aeafa07b48d3b0dad237d0ca5b extends Twig_Template
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
}
</style>
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb cart_menu\">
    
    <li class=\"cart_home\"><a href=\"";
        // line 98
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 0, array(), "array"), "href", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 0, array(), "array"), "text", array());
        echo "</a></li>
    >
    <li><a href=\"";
        // line 100
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 1, array(), "array"), "href", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 1, array(), "array"), "text", array());
        echo "</a></li>
  </ul>
  <div class=\"row\">";
        // line 102
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 103
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 104
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 105
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 106
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 107
            echo "    ";
        } else {
            // line 108
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 109
            echo "    ";
        }
        // line 110
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 111
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 112
            echo "        ";
            $context["class"] = "col-sm-6 cart_row";
            // line 113
            echo "        ";
        } else {
            // line 114
            echo "        ";
            $context["class"] = "col-sm-5 cart_row";
            // line 115
            echo "        ";
        }
        // line 116
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> ";
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 117
            echo "          <ul class=\"thumbnails\">
            ";
            // line 118
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 119
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
            // line 121
            echo "            ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 122
                echo "            <div style=\"margin-left:168px;\">
            ";
                // line 123
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 124
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
                // line 126
                echo "            </div>
            ";
            }
            // line 128
            echo "          </ul>
          ";
        }
        // line 130
        echo "         
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 132
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 133
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 134
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 137
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 139
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 144
                    echo "                <tr>
                  <td>";
                    // line 145
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 146
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "              </table>
            </div>
            ";
        }
        // line 154
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 155
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 158
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                ";
            // line 159
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 160
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 162
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 163
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 168
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 170
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 175
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 176
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
                // line 186
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                </div>
                ";
                // line 188
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 191
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 195
                echo "                ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                ";
            }
            // line 197
            echo "              </form>
            </div>
            ";
        }
        // line 199
        echo "</div>
        </div>
        ";
        // line 201
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 202
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 203
            echo "        ";
        } else {
            // line 204
            echo "        ";
            $context["class"] = "col-sm-3 cart_right";
            // line 205
            echo "        ";
        }
        // line 206
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          <div class=\" text-slider  text-left \">
                          
            <p class=\"text-animate-1  margin_bottom_20 \">Aquatic plants and wild Grass</p>
            <h3 class=\"text-animate-2 margin_bottom_20\">Acorus calamus <br> variegated</h3>                         
              
            <h3 class=\"text-animate-4 margin_bottom_30 \" style=\"color:black;\">RM 330</h3>
            
          </div> 
          
          <div id=\"product\"> ";
        // line 216
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 217
            echo "            <hr>
            <h3>";
            // line 218
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 220
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 221
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 222
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 223
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 224
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 225
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 226
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 227
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 228
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 229
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 231
                    echo "              </select>
            </div>
            ";
                }
                // line 234
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 235
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 236
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 237
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 238
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 240
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 241
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
                        // line 242
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 243
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 244
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 245
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 247
                    echo " </div>
            </div>
            ";
                }
                // line 250
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 251
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 252
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 253
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 254
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 256
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 257
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
                        // line 258
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 259
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 260
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 261
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 263
                    echo " </div>
            </div>
            ";
                }
                // line 266
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 267
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 268
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 269
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
                // line 272
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
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
              <textarea name=\"option[";
                    // line 275
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
                // line 278
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 279
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 280
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 281
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 282
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 285
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 286
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 287
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 289
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
                // line 295
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 296
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 297
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 299
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
                // line 305
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 306
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 307
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 309
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
                // line 315
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "            ";
        }
        // line 317
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 318
            echo "            <hr>
            <h3>";
            // line 319
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 322
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 324
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
            // line 326
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 330
        echo "            <div class=\"form-group\">
              
              <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 332
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 333
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
              <br />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 335
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
        // line 371
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 372
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
        // line 450
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 455
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 461
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
        // line 528
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 532
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
        // line 570
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 

";
    }

    public function getTemplateName()
    {
        return "__string_template__4605df2bc808cc633448edfbe91f0abdba13725a8eded84279870a63587bb303";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1135 => 570,  1094 => 532,  1087 => 528,  1017 => 461,  1008 => 455,  1000 => 450,  919 => 372,  915 => 371,  874 => 335,  869 => 333,  865 => 332,  861 => 330,  855 => 326,  844 => 324,  840 => 323,  836 => 322,  830 => 319,  827 => 318,  824 => 317,  821 => 316,  815 => 315,  802 => 309,  795 => 307,  788 => 306,  785 => 305,  772 => 299,  765 => 297,  758 => 296,  755 => 295,  742 => 289,  735 => 287,  728 => 286,  725 => 285,  717 => 282,  709 => 281,  705 => 280,  698 => 279,  695 => 278,  683 => 275,  677 => 274,  670 => 273,  667 => 272,  655 => 269,  649 => 268,  642 => 267,  639 => 266,  634 => 263,  626 => 261,  619 => 260,  617 => 259,  612 => 258,  596 => 257,  590 => 256,  586 => 254,  580 => 253,  576 => 252,  569 => 251,  566 => 250,  561 => 247,  553 => 245,  546 => 244,  544 => 243,  540 => 242,  522 => 241,  516 => 240,  512 => 238,  506 => 237,  502 => 236,  495 => 235,  492 => 234,  487 => 231,  480 => 229,  473 => 228,  471 => 227,  464 => 226,  460 => 225,  456 => 224,  450 => 223,  444 => 222,  437 => 221,  434 => 220,  430 => 219,  426 => 218,  423 => 217,  421 => 216,  407 => 206,  404 => 205,  401 => 204,  398 => 203,  395 => 202,  393 => 201,  389 => 199,  384 => 197,  378 => 195,  369 => 191,  363 => 188,  358 => 186,  345 => 176,  341 => 175,  333 => 170,  328 => 168,  320 => 163,  316 => 162,  312 => 160,  310 => 159,  306 => 158,  301 => 155,  298 => 154,  293 => 151,  286 => 149,  277 => 146,  273 => 145,  270 => 144,  266 => 143,  259 => 139,  255 => 137,  251 => 136,  247 => 134,  245 => 133,  241 => 132,  237 => 130,  233 => 128,  229 => 126,  212 => 124,  208 => 123,  205 => 122,  202 => 121,  188 => 119,  186 => 118,  183 => 117,  178 => 116,  175 => 115,  172 => 114,  169 => 113,  166 => 112,  164 => 111,  157 => 110,  154 => 109,  151 => 108,  148 => 107,  145 => 106,  142 => 105,  139 => 104,  137 => 103,  133 => 102,  126 => 100,  119 => 98,  19 => 1,);
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
