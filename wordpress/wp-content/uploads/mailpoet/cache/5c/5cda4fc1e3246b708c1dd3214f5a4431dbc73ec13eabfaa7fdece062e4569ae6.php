<?php

/* settings.html */
class __TwigTemplate_4cb826d91337bec17566cfeb7d6572d26e3479aea1d41f85c57943d66b971612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "settings.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div id=\"mailpoet_settings\">

    <h1 class=\"title\">";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings");
        echo "</h1>

    <!-- settings form  -->
    <form
      id=\"mailpoet_settings_form\"
      name=\"mailpoet_settings_form\"
      class=\"mailpoet_form\"
      autocomplete=\"off\"
      novalidate
    >
      <!-- tabs -->
      <h2 class=\"nav-tab-wrapper\" id=\"mailpoet_settings_tabs\">
        <a class=\"nav-tab\" href=\"#mta\">";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send With...");
        echo "</a>
        <a class=\"nav-tab\" href=\"#basics\">";
        // line 19
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Basics");
        echo "</a>
        <a class=\"nav-tab\" href=\"#signup\">";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign-up Confirmation");
        echo "</a>
        <a class=\"nav-tab\" href=\"#advanced\">";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Advanced");
        echo "</a>
        <a class=\"nav-tab\" href=\"#premium\">";
        // line 22
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Premium");
        echo "</a>
      </h2>

      <!-- sending method -->
      <div data-tab=\"mta\" class=\"mailpoet_panel\">
        ";
        // line 27
        $this->loadTemplate("settings/mta.html", "settings.html", 27)->display($context);
        // line 28
        echo "      </div>

       <!-- basics -->
      <div data-tab=\"basics\" class=\"mailpoet_panel\">
        ";
        // line 32
        $this->loadTemplate("settings/basics.html", "settings.html", 32)->display($context);
        // line 33
        echo "      </div>

      <!-- sign-up confirmation -->
      <div data-tab=\"signup\" class=\"mailpoet_panel\">
        ";
        // line 37
        $this->loadTemplate("settings/signup.html", "settings.html", 37)->display($context);
        // line 38
        echo "      </div>

     <!-- advanced -->
      <div data-tab=\"advanced\" class=\"mailpoet_panel\">
        ";
        // line 42
        $this->loadTemplate("settings/advanced.html", "settings.html", 42)->display($context);
        // line 43
        echo "      </div>

      <!-- premium -->
      <div data-tab=\"premium\" class=\"mailpoet_panel\">
        ";
        // line 47
        $this->loadTemplate("settings/premium.html", "settings.html", 47)->display($context);
        // line 48
        echo "      </div>

      <p class=\"submit mailpoet_settings_submit\" style=\"display:none;\">
        <input
          type=\"submit\"
          class=\"button button-primary\"
          name=\"submit\"
          value=\"";
        // line 55
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Save settings");
        echo "\"
        />
      </p>
    </form>
  </div>

  <script type=\"text/javascript\">
    jQuery(function(\$) {
      // on dom loaded
      \$(function() {
        // on form submission
        \$('#mailpoet_settings_form').on('submit', function() {
          // if we're setting up a sending method, try to activate it
          if (\$('.mailpoet_mta_setup_save').is(':visible')) {
            \$('.mailpoet_mta_setup_save').trigger('click');
          }
          var mailpoet_premium_key = \$('#mailpoet_premium_key').val();
          // sync mss key with premium key
          \$('#mailpoet_api_key').val(mailpoet_premium_key);
          if (mailpoet_premium_key.length > 0) {
            \$('#mailpoet_premium_key_verify').trigger('click');
          }
          saveSettings();
          return false;
        });

        function saveSettings() {
          // serialize form data
          var settings_data = \$('#mailpoet_settings_form').serializeObject();

          // show loading screen
          MailPoet.Modal.loading(true);

          MailPoet.Ajax.post({
            api_version: window.mailpoet_api_version,
            endpoint: 'settings',
            action: 'set',
            data: settings_data
          }).always(function() {
            MailPoet.Modal.loading(false);
          }).done(function(response) {
            MailPoet.Notice.success(
              \"";
        // line 97
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Settings saved"), "js"), "html", null, true);
        echo "\",
              { scroll: true }
            );
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        }

        // setup toggle checkboxes
        function toggleContent() {
          \$('#'+\$(this).data('toggle'))[
            (\$(this).is(':checked'))
            ? 'show'
            : 'hide'
          ]();
        }

        \$(document).on('click', 'input[data-toggle]', toggleContent);
        \$('input[data-toggle]').each(toggleContent);

        // page preview
        \$('.mailpoet_page_preview').on('click', function() {
          var selection = \$(this).siblings('.mailpoet_page_selection');

          if (selection.length > 0) {
            \$(this).attr('href', \$(selection).find('option[value=\"'+\$(selection).val()+'\"]').data('preview-url'));
            \$(this).attr('target', '_blank');
          } else {
            \$(this).attr('href', 'javascript:;');
            \$(this).removeAttr('target');
          }
        });
      });
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 97,  117 => 55,  108 => 48,  106 => 47,  100 => 43,  98 => 42,  92 => 38,  90 => 37,  84 => 33,  82 => 32,  76 => 28,  74 => 27,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings.html");
    }
}
