<?php

/* layout.html */
class __TwigTemplate_fc3815012a01fc7b78d05f8ddbc71981c95154437f5982376b5bf3f077dbe539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'templates' => array($this, 'block_templates'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'after_css' => array($this, 'block_after_css'),
            'translations' => array($this, 'block_translations'),
            'after_translations' => array($this, 'block_after_translations'),
            'after_javascript' => array($this, 'block_after_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["sub_menu"]) ? $context["sub_menu"] : null)) {
            // line 2
            echo "<script type=\"text/javascript\">
jQuery('.toplevel_page_mailpoet-newsletters.menu-top-last')
  .addClass('wp-has-current-submenu')
  .find('a[href\$=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["sub_menu"]) ? $context["sub_menu"] : null), "html", null, true);
            echo "\"]')
  .addClass('current')
  .parent()
  .addClass('current');
</script>
";
        }
        // line 11
        echo "
<!-- system notices -->
<div id=\"mailpoet_notice_system\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

<!-- handlebars templates -->
";
        // line 16
        $this->displayBlock('templates', $context, $blocks);
        // line 17
        echo "
<!-- main container -->
<div class=\"wrap\">
  <!-- notices -->
  <div id=\"mailpoet_notice_error\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <div id=\"mailpoet_notice_success\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

  <!-- title block -->
  ";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        // line 26
        echo "  <!-- content block -->
  ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "</div>

<!-- stylesheets -->
";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("admin.css");
        // line 33
        echo "

";
        // line 35
        echo do_action("mailpoet_styles_admin_after");
        echo "

<!-- rtl specific stylesheet -->
";
        // line 38
        if ((isset($context["is_rtl"]) ? $context["is_rtl"] : null)) {
            // line 39
            echo "  ";
            echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("rtl.css");
            echo "
";
        }
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('after_css', $context, $blocks);
        // line 43
        echo "
<script type=\"text/javascript\">
  var mailpoet_date_format = \"";
        // line 45
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPDateTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_time_format = \"";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPTimeFormat(), "js"), "html", null, true);
        echo "\";
</script>

<!-- javascripts -->
";
        // line 50
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("vendor.js", "mailpoet.js");
        // line 53
        echo "

";
        // line 55
        $this->displayBlock('translations', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('after_translations', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin_vendor.js");
        // line 61
        echo "

";
        // line 63
        echo do_action("mailpoet_scripts_admin_before");
        echo "

";
        // line 65
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin.js");
        // line 67
        echo "

<script type=\"text/javascript\">
  if(window['HS'] !== undefined) {
    // HelpScout Beacon: Configuration
    HS.beacon.config({
      icon: 'message',
      zIndex: 50000,
      instructions: \"";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to give feedback to the MailPoet team? Contact us here. Please provide as much information as possible!");
        echo "\",
      showContactFields: true
    });

    // HelpScout Beacon: Custom information
    HS.beacon.ready(function() {
      HS.beacon.identify(
        ";
        // line 82
        echo json_encode(\MailPoet\Helpscout\Beacon::getData());
        echo "
      );
    });
  }
</script>

";
        // line 88
        $this->displayBlock('after_javascript', $context, $blocks);
    }

    // line 16
    public function block_templates($context, array $blocks = array())
    {
    }

    // line 25
    public function block_title($context, array $blocks = array())
    {
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 42
    public function block_after_css($context, array $blocks = array())
    {
    }

    // line 55
    public function block_translations($context, array $blocks = array())
    {
    }

    // line 57
    public function block_after_translations($context, array $blocks = array())
    {
    }

    // line 88
    public function block_after_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 88,  200 => 57,  195 => 55,  190 => 42,  185 => 27,  180 => 25,  175 => 16,  171 => 88,  162 => 82,  152 => 75,  142 => 67,  140 => 65,  135 => 63,  131 => 61,  129 => 59,  126 => 58,  124 => 57,  121 => 56,  119 => 55,  115 => 53,  113 => 50,  106 => 46,  102 => 45,  98 => 43,  96 => 42,  93 => 41,  87 => 39,  85 => 38,  79 => 35,  75 => 33,  73 => 31,  68 => 28,  66 => 27,  63 => 26,  61 => 25,  51 => 17,  49 => 16,  42 => 11,  33 => 5,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\layout.html");
    }
}
