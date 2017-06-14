<?php

/* newsletter/templates/components/heading.hbs */
class __TwigTemplate_b99a8fc5ef9607e07ab23e954a20f13e824489c356799ae40e8097a2788de1f2 extends Twig_Template
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
        echo "<div class=\"mailpoet_form_field mailpoet_heading_form_field\">
  <input
    type=\"text\"
    class=\"mailpoet_input mailpoet_input_title\"
    value=\"{{ model.subject }}\"
    placeholder=\"";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Click here to change the subject!");
        echo "\"
  />
</div>
<div class=\"mailpoet_form_field mailpoet_heading_form_field\">
  <input type=\"text\"
    class=\"mailpoet_input mailpoet_input_preheader\"
    value=\"{{ model.preheader }}\"
    placeholder=\"";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview text (usually displayed underneath the subject line in the inbox)");
        echo "\"
  />
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/heading.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/components/heading.hbs", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\components\\heading.hbs");
    }
}
