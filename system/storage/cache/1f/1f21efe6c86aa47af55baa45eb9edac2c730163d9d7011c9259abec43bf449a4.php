<?php

/* common/filemanager.twig */
class __TwigTemplate_111d91de7db13a998811392a68fd52b569627e9a656b6a77cbe0c68abd9585da extends Twig_Template
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
        echo "<div id=\"filemanager\" class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"row\">
        <div class=\"col-sm-5\"><a href=\"";
        // line 9
        echo (isset($context["parent"]) ? $context["parent"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_parent"]) ? $context["button_parent"] : null);
        echo "\" id=\"button-parent\" class=\"btn btn-default\"><i class=\"fa fa-level-up\"></i></a> <a href=\"";
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" id=\"button-refresh\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-folder\" class=\"btn btn-default\"><i class=\"fa fa-folder\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 16
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "\" class=\"form-control\">
            <span class=\"input-group-btn\">
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 18
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </span></div>
        </div>
      </div>
      <hr />
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["images"]) ? $context["images"] : null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 24
            echo "      <div class=\"row\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["image"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "        <div class=\"col-sm-3 col-xs-6 text-center\">
          ";
                // line 27
                if (($this->getAttribute($context["image"], "type", array()) == "directory")) {
                    // line 28
                    echo "          <div class=\"text-center\"><a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"directory\" style=\"vertical-align: middle;\"><i class=\"fa fa-folder fa-5x\"></i></a></div>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 30
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\" />
            ";
                    // line 31
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "</label>
          ";
                }
                // line 33
                echo "          ";
                if (($this->getAttribute($context["image"], "type", array()) == "image")) {
                    // line 34
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"thumbnail\"><img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\" /></a>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 36
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\" />
            ";
                    // line 37
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "</label>
          ";
                }
                // line 39
                echo "        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </div>
      <br />
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
    <div class=\"modal-footer\">";
        // line 45
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
";
        // line 49
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 50
            echo "\$('a.thumbnail').on('click', function(e) {
\te.preventDefault();

\t";
            // line 53
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 54
                echo "\t\$('#";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "').find('img').attr('src', \$(this).find('img').attr('src'));
\t";
            }
            // line 56
            echo "
\t\$('#";
            // line 57
            echo (isset($context["target"]) ? $context["target"] : null);
            echo "').val(\$(this).parent().find('input').val());

\t\$('#modal-image').modal('hide');
});
";
        }
        // line 62
        echo "
\$('a.directory').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('.pagination a').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-parent').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-refresh').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('input[name=\\'search\\']').on('keydown', function(e) {
\tif (e.which == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('#button-search').on('click', function(e) {
\tvar url = 'index.php?route=common/filemanager&user_token=";
        // line 94
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'search\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\t";
        // line 102
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 103
            echo "\turl += '&thumb=' + '";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "';
\t";
        }
        // line 105
        echo "
\t";
        // line 106
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 107
            echo "\turl += '&target=' + '";
            echo (isset($context["target"]) ? $context["target"] : null);
            echo "';
\t";
        }
        // line 109
        echo "
\t\$('#modal-image').load(url);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=common/filemanager/upload&user_token=";
        // line 130
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\talert(json['error']);
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#button-folder').popover({
\thtml: true,
\tplacement: 'bottom',
\ttrigger: 'click',
\ttitle: '";
        // line 168
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "',
\tcontent: function() {
\t\thtml  = '<div class=\"input-group\">';
\t\thtml += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 171
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '  <span class=\"input-group-btn\"><button type=\"button\" title=\"";
        // line 172
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></span>';
\t\thtml += '</div>';

\t\treturn html;
\t}
});

\$('#button-folder').on('shown.bs.popover', function() {
\t\$('#button-create').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/folder&user_token=";
        // line 182
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'folder=' + encodeURIComponent(\$('input[name=\\'folder\\']').val()),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-create').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-create').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('#modal-image #button-delete').on('click', function(e) {
\tif (confirm('";
        // line 211
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/delete&user_token=";
        // line 213
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 213,  367 => 211,  333 => 182,  320 => 172,  316 => 171,  310 => 168,  267 => 130,  244 => 109,  238 => 107,  236 => 106,  233 => 105,  227 => 103,  225 => 102,  212 => 94,  178 => 62,  170 => 57,  167 => 56,  161 => 54,  159 => 53,  154 => 50,  152 => 49,  145 => 45,  142 => 44,  134 => 41,  127 => 39,  122 => 37,  118 => 36,  106 => 34,  103 => 33,  98 => 31,  94 => 30,  88 => 28,  86 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  64 => 18,  57 => 16,  50 => 12,  46 => 11,  42 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div id="filemanager" class="modal-dialog modal-lg">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title">{{ heading_title }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <div class="row">*/
/*         <div class="col-sm-5"><a href="{{ parent }}" data-toggle="tooltip" title="{{ button_parent }}" id="button-parent" class="btn btn-default"><i class="fa fa-level-up"></i></a> <a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" id="button-refresh" class="btn btn-default"><i class="fa fa-refresh"></i></a>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_upload }}" id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_folder }}" id="button-folder" class="btn btn-default"><i class="fa fa-folder"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_delete }}" id="button-delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>*/
/*         </div>*/
/*         <div class="col-sm-7">*/
/*           <div class="input-group">*/
/*             <input type="text" name="search" value="{{ filter_name }}" placeholder="{{ entry_search }}" class="form-control">*/
/*             <span class="input-group-btn">*/
/*             <button type="button" data-toggle="tooltip" title="{{ button_search }}" id="button-search" class="btn btn-primary"><i class="fa fa-search"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*       </div>*/
/*       <hr />*/
/*       {% for image in images|batch(4) %}*/
/*       <div class="row">*/
/*         {% for image in image %}*/
/*         <div class="col-sm-3 col-xs-6 text-center">*/
/*           {% if image.type == 'directory' %}*/
/*           <div class="text-center"><a href="{{ image.href }}" class="directory" style="vertical-align: middle;"><i class="fa fa-folder fa-5x"></i></a></div>*/
/*           <label>*/
/*             <input type="checkbox" name="path[]" value="{{ image.path }}" />*/
/*             {{ image.name }}</label>*/
/*           {% endif %}*/
/*           {% if image.type == 'image' %}*/
/*           <a href="{{ image.href }}" class="thumbnail"><img src="{{ image.thumb }}" alt="{{ image.name }}" title="{{ image.name }}" /></a>*/
/*           <label>*/
/*             <input type="checkbox" name="path[]" value="{{ image.path }}" />*/
/*             {{ image.name }}</label>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <br />*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div class="modal-footer">{{ pagination }}</div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* {% if target %}*/
/* $('a.thumbnail').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	{% if thumb %}*/
/* 	$('#{{ thumb }}').find('img').attr('src', $(this).find('img').attr('src'));*/
/* 	{% endif %}*/
/* */
/* 	$('#{{ target }}').val($(this).parent().find('input').val());*/
/* */
/* 	$('#modal-image').modal('hide');*/
/* });*/
/* {% endif %}*/
/* */
/* $('a.directory').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('.pagination a').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('#button-parent').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('#button-refresh').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href'));*/
/* });*/
/* */
/* $('input[name=\'search\']').on('keydown', function(e) {*/
/* 	if (e.which == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('#button-search').on('click', function(e) {*/
/* 	var url = 'index.php?route=common/filemanager&user_token={{ user_token }}&directory={{ directory }}';*/
/* */
/* 	var filter_name = $('input[name=\'search\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	{% if thumb %}*/
/* 	url += '&thumb=' + '{{ thumb }}';*/
/* 	{% endif %}*/
/* */
/* 	{% if target %}*/
/* 	url += '&target=' + '{{ target }}';*/
/* 	{% endif %}*/
/* */
/* 	$('#modal-image').load(url);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-upload').on('click', function() {*/
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file[]" value="" multiple="multiple" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file[]\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file[]\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=common/filemanager/upload&user_token={{ user_token }}&directory={{ directory }}',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$('#button-upload i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 					$('#button-upload').prop('disabled', true);*/
/* 				},*/
/* 				complete: function() {*/
/* 					$('#button-upload i').replaceWith('<i class="fa fa-upload"></i>');*/
/* 					$('#button-upload').prop('disabled', false);*/
/* 				},*/
/* 				success: function(json) {*/
/* 					if (json['error']) {*/
/* 						alert(json['error']);*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$('#button-refresh').trigger('click');*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* */
/* $('#button-folder').popover({*/
/* 	html: true,*/
/* 	placement: 'bottom',*/
/* 	trigger: 'click',*/
/* 	title: '{{ entry_folder }}',*/
/* 	content: function() {*/
/* 		html  = '<div class="input-group">';*/
/* 		html += '  <input type="text" name="folder" value="" placeholder="{{ entry_folder }}" class="form-control">';*/
/* 		html += '  <span class="input-group-btn"><button type="button" title="{{ button_folder }}" id="button-create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></span>';*/
/* 		html += '</div>';*/
/* */
/* 		return html;*/
/* 	}*/
/* });*/
/* */
/* $('#button-folder').on('shown.bs.popover', function() {*/
/* 	$('#button-create').on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=common/filemanager/folder&user_token={{ user_token }}&directory={{ directory }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: 'folder=' + encodeURIComponent($('input[name=\'folder\']').val()),*/
/* 			beforeSend: function() {*/
/* 				$('#button-create').prop('disabled', true);*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-create').prop('disabled', false);*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					alert(json['error']);*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					alert(json['success']);*/
/* */
/* 					$('#button-refresh').trigger('click');*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* */
/* $('#modal-image #button-delete').on('click', function(e) {*/
/* 	if (confirm('{{ text_confirm }}')) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=common/filemanager/delete&user_token={{ user_token }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: $('input[name^=\'path\']:checked'),*/
/* 			beforeSend: function() {*/
/* 				$('#button-delete').prop('disabled', true);*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-delete').prop('disabled', false);*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					alert(json['error']);*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					alert(json['success']);*/
/* */
/* 					$('#button-refresh').trigger('click');*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* //--></script>*/
/* */
