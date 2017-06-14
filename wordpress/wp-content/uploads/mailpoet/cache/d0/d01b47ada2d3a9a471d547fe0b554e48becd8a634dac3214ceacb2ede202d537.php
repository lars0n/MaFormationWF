<?php

/* newsletter/templates/blocks/image/block.hbs */
class __TwigTemplate_38ad57a72f5716e98f8906d4b32bf4f201b8d3f06176780ed2a2496073d4b2e8 extends Twig_Template
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
        echo "<div class=\"mailpoet_tools\"></div>
<div class=\"mailpoet_content\" style=\"text-align: {{ model.styles.block.textAlign }}\"><a href=\"{{ model.link }}\" onClick=\"return false;\"><img src=\"{{#ifCond model.src '!=' ''}}{{ model.src }}{{ else }}{{ imageMissingSrc }}{{/ifCond}}\" alt=\"{{ model.alt }}\" onerror=\"if(this.src != '{{ imageMissingSrc }}') {this.src = '{{ imageMissingSrc }}'; this.style.width='auto';}\"  /></a></div>
<div class=\"mailpoet_block_highlight\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/image/block.hbs";
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
        return new Twig_Source("", "newsletter/templates/blocks/image/block.hbs", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\image\\block.hbs");
    }
}
