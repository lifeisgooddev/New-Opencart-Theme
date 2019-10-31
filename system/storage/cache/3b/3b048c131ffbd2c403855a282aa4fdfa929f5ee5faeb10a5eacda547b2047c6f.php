<?php

/* default/template/extension/total/voucher.twig */
class __TwigTemplate_51b2bb82c0ffc381952ca47610812ecc1bb32056f921fecdb4fbfb703bce0f56 extends Twig_Template
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
    <h4 class=\"panel-title\"><a href=\"#collapse-voucher\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-voucher\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
        // line 7
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" name=\"voucher\" value=\"";
        // line 9
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "\" id=\"input-voucher\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <input type=\"submit\" value=\"";
        // line 11
        echo (isset($context["button_voucher"]) ? $context["button_voucher"] : null);
        echo "\" id=\"button-voucher\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"  class=\"btn btn-primary\" />
        </span> </div>
      <script type=\"text/javascript\"><!--
\$('#button-voucher').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/voucher/voucher',
\t\ttype: 'post',
\t\tdata: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t}
\t\t\t
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
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  35 => 9,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h4 class="panel-title"><a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ heading_title }} <i class="fa fa-caret-down"></i></a></h4>*/
/*   </div>*/
/*   <div id="collapse-voucher" class="panel-collapse collapse">*/
/*     <div class="panel-body">*/
/*       <label class="col-sm-2 control-label" for="input-voucher">{{ entry_voucher }}</label>*/
/*       <div class="input-group">*/
/*         <input type="text" name="voucher" value="{{ voucher }}" placeholder="{{ entry_voucher }}" id="input-voucher" class="form-control" />*/
/*         <span class="input-group-btn">*/
/*         <input type="submit" value="{{ button_voucher }}" id="button-voucher" data-loading-text="{{ text_loading }}"  class="btn btn-primary" />*/
/*         </span> </div>*/
/*       <script type="text/javascript"><!--*/
/* $('#button-voucher').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/voucher/voucher',*/
/* 		type: 'post',*/
/* 		data: 'voucher=' + encodeURIComponent($('input[name=\'voucher\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* 			*/
/* 			if (json['error']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				*/
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			}*/
/* 			*/
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
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
