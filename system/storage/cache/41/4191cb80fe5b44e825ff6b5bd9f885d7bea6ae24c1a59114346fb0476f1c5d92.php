<?php

/* default/template/product/review.twig */
class __TwigTemplate_0e48c619c9acfc7d2703b3b5d5e646a641f10e8f78710d2fe80eeda0f432dda9 extends Twig_Template
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
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "<table class=\"table table-striped table-bordered\">
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 5
                echo $this->getAttribute($context["review"], "author", array());
                echo "</strong></td>
    <td class=\"text-right\">";
                // line 6
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 9
                echo $this->getAttribute($context["review"], "text", array());
                echo "</p>
      ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 11
                    echo "      ";
                    if (($this->getAttribute($context["review"], "rating", array()) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 12
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
  </tr>
</table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "<div class=\"text-right\">";
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
";
        } else {
            // line 18
            echo "<p>";
            echo (isset($context["text_no_reviews"]) ? $context["text_no_reviews"] : null);
            echo "</p>
";
        }
        // line 19
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 18,  68 => 16,  54 => 12,  47 => 11,  43 => 10,  39 => 9,  33 => 6,  29 => 5,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if reviews %}*/
/* {% for review in reviews %}*/
/* <table class="table table-striped table-bordered">*/
/*   <tr>*/
/*     <td style="width: 50%;"><strong>{{ review.author }}</strong></td>*/
/*     <td class="text-right">{{ review.date_added }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td colspan="2"><p>{{ review.text }}</p>*/
/*       {% for i in 1..5 %}*/
/*       {% if review.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*       {% endfor %}</td>*/
/*   </tr>*/
/* </table>*/
/* {% endfor %}*/
/* <div class="text-right">{{ pagination }}</div>*/
/* {% else %}*/
/* <p>{{ text_no_reviews }}</p>*/
/* {% endif %} */
