<?php

/* newsletter/templates/blocks/social/blockIcon.hbs */
class __TwigTemplate_4b1cdda8ac52a5d5f061ea833723e675ed7a2aa43eb47abac46e8cd98e213d59 extends Twig_Template
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
        echo "<a href=\"{{ link }}\" onClick=\"return false;\"><img src=\"{{#ifCond image '!=' ''}}{{ image }}{{ else }}{{ imageMissingSrc }}{{/ifCond}}\" onerror=\"if (this.src != '{{ imageMissingSrc }}') this.src = '{{ imageMissingSrc }}';\" alt=\"{{ text }}\" style=\"width: {{ width }}; height: {{ height }};\"/></a>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/social/blockIcon.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/blocks/social/blockIcon.hbs", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\social\\blockIcon.hbs");
    }
}
