<?php

/* newsletter/templates/blocks/image/settings.hbs */
class __TwigTemplate_6dcc05d52f3a3a9262938ed7aa155658ff3f4a6bb213cfc13a7148f3821e8664 extends Twig_Template
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
        echo "<h3>";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Image");
        echo "</h3>
<div class=\"mailpoet_form_field\">
    <label>
        <div class=\"mailpoet_form_field_title\">";
        // line 4
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Link");
        echo " <span class=\"mailpoet_form_field_optional\">(";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Optional");
        echo ")</div>
        <div class=\"mailpoet_form_field_input_option\">
            <input type=\"text\" name=\"src\" class=\"mailpoet_input mailpoet_field_image_link\" value=\"{{ model.link }}\" placeholder=\"http://\" />
        </div>
    </label>
</div>
<div class=\"mailpoet_form_field\">
    <label>
        <div class=\"mailpoet_form_field_title\">";
        // line 12
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Address");
        echo "</div>
        <div class=\"mailpoet_form_field_input_option\">
            <input type=\"text\" name=\"src\" class=\"mailpoet_input mailpoet_field_image_address\" value=\"{{ model.src }}\" placeholder=\"http://\" /><br />
        </div>
    </label>
</div>
<div class=\"mailpoet_form_field\">
    <label>
        <div class=\"mailpoet_form_field_title\">";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Alternative text");
        echo "</div>
        <div class=\"mailpoet_form_field_input_option\">
            <input type=\"text\" name=\"alt\" class=\"mailpoet_input mailpoet_field_image_alt_text\" value=\"{{ model.alt }}\" />
        </div>
    </label>
</div>
<div class=\"mailpoet_form_field\">
    <div class=\"mailpoet_form_field_checkbox_option\">
        <label>
            <input type=\"checkbox\" name=\"fullWidth\" class=\"mailpoet_field_image_full_width\" value=\"true\" {{#if model.fullWidth }}CHECKED{{/if}}/>
            ";
        // line 30
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Full width");
        echo "
        </label>
    </div>
</div>
<hr />
<div class=\"mailpoet_form_field\">
    <input type=\"button\" name=\"select-another-image\" class=\"button button-secondary mailpoet_button_full mailpoet_field_image_select_another_image\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select another image"), "html_attr");
        echo "\" />
</div>

<div class=\"mailpoet_form_field\">
    <input type=\"button\" class=\"button button-primary mailpoet_done_editing\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Done"), "html_attr");
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/image/settings.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 40,  72 => 36,  63 => 30,  50 => 20,  39 => 12,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/image/settings.hbs", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\image\\settings.hbs");
    }
}
