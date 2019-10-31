<?php

/* default/template/extension/total/shipping.twig */
class __TwigTemplate_bda1411625b101253cf64420c917ce0f81c962e1752c505cedea30bc8c3db258 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\"><a href=\"#collapse-shipping\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-shipping\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <p>";
        // line 7
        echo (isset($context["text_shipping"]) ? $context["text_shipping"] : null);
        echo "</p>
      <div class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 10
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
              <option value=\"\">";
        // line 13
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 15
            echo "              ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 16
                echo "              <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
              ";
            } else {
                // line 18
                echo "              <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
              ";
            }
            // line 20
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 25
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 32
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"postcode\" value=\"";
        // line 34
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
          </div>
        </div>
        <button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 37
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_quote"]) ? $context["button_quote"] : null);
        echo "</button>
      </div>
      <script type=\"text/javascript\"><!--
\$('#button-quote').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/quote',
\t\ttype: 'post',
\t\tdata: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&postcode=' + encodeURIComponent(\$('input[name=\\'postcode\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-quote').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-quote').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}

\t\t\t\tif (json['error']['country']) {
\t\t\t\t\t\$('select[name=\\'country_id\\']').after('<div class=\"text-danger\">' + json['error']['country'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['zone']) {
\t\t\t\t\t\$('select[name=\\'zone_id\\']').after('<div class=\"text-danger\">' + json['error']['zone'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['postcode']) {
\t\t\t\t\t\$('input[name=\\'postcode\\']').after('<div class=\"text-danger\">' + json['error']['postcode'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['shipping_method']) {
\t\t\t\t\$('#modal-shipping').remove();

\t\t\t\thtml  = '<div id=\"modal-shipping\" class=\"modal\">';
\t\t\t\thtml += '  <div class=\"modal-dialog\">';
\t\t\t\thtml += '    <div class=\"modal-content\">';
\t\t\t\thtml += '      <div class=\"modal-header\">';
\t\t\t\thtml += '        <h4 class=\"modal-title\">";
        // line 82
        echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
        echo "</h4>';
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-body\">';

\t\t\t\tfor (i in json['shipping_method']) {
\t\t\t\t\thtml += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

\t\t\t\t\tif (!json['shipping_method'][i]['error']) {
\t\t\t\t\t\tfor (j in json['shipping_method'][i]['quote']) {
\t\t\t\t\t\t\thtml += '<div class=\"radio\">';
\t\t\t\t\t\t\thtml += '  <label>';

\t\t\t\t\t\t\tif (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 94
        echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
        echo "') {
\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\" />';
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\thtml += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-footer\">';
\t\t\t\thtml += '        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 109
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</button>';

\t\t\t\t";
        // line 111
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            // line 112
            echo "\t\t\t\thtml += '        <input type=\"button\" value=\"";
            echo (isset($context["button_shipping"]) ? $context["button_shipping"] : null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />';
\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\thtml += '        <input type=\"button\" value=\"";
            echo (isset($context["button_shipping"]) ? $context["button_shipping"] : null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" disabled=\"disabled\" />';
\t\t\t\t";
        }
        // line 116
        echo "
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '    </div>';
\t\t\t\thtml += '  </div>';
\t\t\t\thtml += '</div> ';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#modal-shipping').modal('show');

\t\t\t\t\$('input[name=\\'shipping_method\\']').on('change', function() {
\t\t\t\t\t\$('#button-shipping').prop('disabled', false);
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-shipping', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/shipping',
\t\ttype: 'post',
\t\tdata: 'shipping_method=' + encodeURIComponent(\$('input[name=\\'shipping_method\\']:checked').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 186
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 192
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 199
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'country_id\\']').trigger('change');
//--></script>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 199,  291 => 192,  282 => 186,  210 => 116,  202 => 114,  194 => 112,  192 => 111,  187 => 109,  169 => 94,  154 => 82,  104 => 37,  96 => 34,  91 => 32,  81 => 25,  75 => 21,  69 => 20,  61 => 18,  53 => 16,  50 => 15,  46 => 14,  42 => 13,  36 => 10,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title"><a href="#collapse-shipping" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ heading_title }} <i class="fa fa-caret-down"></i></a></h4>*/
/*   </div>*/
/*   <div id="collapse-shipping" class="panel-collapse collapse">*/
/*     <div class="panel-body">*/
/*       <p>{{ text_shipping }}</p>*/
/*       <div class="form-horizontal">*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*           <div class="col-sm-10">*/
/*             <select name="country_id" id="input-country" class="form-control">*/
/*               <option value="">{{ text_select }}</option>*/
/*               {% for country in countries %}*/
/*               {% if country.country_id == country_id %}*/
/*               <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*               {% else %}*/
/*               <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*           <div class="col-sm-10">*/
/*             <select name="zone_id" id="input-zone" class="form-control">*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-postcode">{{ entry_postcode }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control" />*/
/*           </div>*/
/*         </div>*/
/*         <button type="button" id="button-quote" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_quote }}</button>*/
/*       </div>*/
/*       <script type="text/javascript"><!--*/
/* $('#button-quote').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/shipping/quote',*/
/* 		type: 'post',*/
/* 		data: 'country_id=' + $('select[name=\'country_id\']').val() + '&zone_id=' + $('select[name=\'zone_id\']').val() + '&postcode=' + encodeURIComponent($('input[name=\'postcode\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-quote').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-quote').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				}*/
/* */
/* 				if (json['error']['country']) {*/
/* 					$('select[name=\'country_id\']').after('<div class="text-danger">' + json['error']['country'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['zone']) {*/
/* 					$('select[name=\'zone_id\']').after('<div class="text-danger">' + json['error']['zone'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['postcode']) {*/
/* 					$('input[name=\'postcode\']').after('<div class="text-danger">' + json['error']['postcode'] + '</div>');*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['shipping_method']) {*/
/* 				$('#modal-shipping').remove();*/
/* */
/* 				html  = '<div id="modal-shipping" class="modal">';*/
/* 				html += '  <div class="modal-dialog">';*/
/* 				html += '    <div class="modal-content">';*/
/* 				html += '      <div class="modal-header">';*/
/* 				html += '        <h4 class="modal-title">{{ text_shipping_method }}</h4>';*/
/* 				html += '      </div>';*/
/* 				html += '      <div class="modal-body">';*/
/* */
/* 				for (i in json['shipping_method']) {*/
/* 					html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';*/
/* */
/* 					if (!json['shipping_method'][i]['error']) {*/
/* 						for (j in json['shipping_method'][i]['quote']) {*/
/* 							html += '<div class="radio">';*/
/* 							html += '  <label>';*/
/* */
/* 							if (json['shipping_method'][i]['quote'][j]['code'] == '{{ shipping_method }}') {*/
/* 								html += '<input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" checked="checked" />';*/
/* 							} else {*/
/* 								html += '<input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" />';*/
/* 							}*/
/* */
/* 							html += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';*/
/* 						}*/
/* 					} else {*/
/* 						html += '<div class="alert alert-danger alert-dismissible">' + json['shipping_method'][i]['error'] + '</div>';*/
/* 					}*/
/* 				}*/
/* */
/* 				html += '      </div>';*/
/* 				html += '      <div class="modal-footer">';*/
/* 				html += '        <button type="button" class="btn btn-default" data-dismiss="modal">{{ button_cancel }}</button>';*/
/* */
/* 				{% if shipping_method %}*/
/* 				html += '        <input type="button" value="{{ button_shipping }}" id="button-shipping" data-loading-text="{{ text_loading }}" class="btn btn-primary" />';*/
/* 				{% else %}*/
/* 				html += '        <input type="button" value="{{ button_shipping }}" id="button-shipping" data-loading-text="{{ text_loading }}" class="btn btn-primary" disabled="disabled" />';*/
/* 				{% endif %}*/
/* */
/* 				html += '      </div>';*/
/* 				html += '    </div>';*/
/* 				html += '  </div>';*/
/* 				html += '</div> ';*/
/* */
/* 				$('body').append(html);*/
/* */
/* 				$('#modal-shipping').modal('show');*/
/* */
/* 				$('input[name=\'shipping_method\']').on('change', function() {*/
/* 					$('#button-shipping').prop('disabled', false);*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).delegate('#button-shipping', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/shipping/shipping',*/
/* 		type: 'post',*/
/* 		data: 'shipping_method=' + encodeURIComponent($('input[name=\'shipping_method\']:checked').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-shipping').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-shipping').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			}*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('input[name=\'postcode\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('input[name=\'postcode\']').parent().parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
