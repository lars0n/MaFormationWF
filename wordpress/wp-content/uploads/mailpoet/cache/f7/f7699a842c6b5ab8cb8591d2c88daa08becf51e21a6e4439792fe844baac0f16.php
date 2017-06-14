<?php

/* settings/premium.html */
class __TwigTemplate_d0974dfa2fde6c62dce44b6044d5641b5e385acfe3794582e86a7d81114bd110 extends Twig_Template
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
        echo "<table class=\"form-table\">
  <tbody>
    <!-- premium key -->
    <tr>
      <th scope=\"row\">
        <label for=\"mailpoet_premium_key\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Premium License Key");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This key is used for automatic upgrades of your Premium features and access to support.");
        echo "
        </p>
      </th>
      <td>
        <div>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_premium_key\"
            name=\"premium[premium_key]\"
            value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "premium", array(), "any", false, true), "premium_key", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "premium", array(), "any", false, true), "premium_key", array()), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()))) : ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()))), "html", null, true);
        echo "\"
          />
          <a
            id=\"mailpoet_premium_key_verify\"
            class=\"button-secondary\"
          >";
        // line 25
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Verify");
        echo "</a>
        </div>
        <div
          class=\"mailpoet_premium_key_valid mailpoet_key_valid mailpoet_success";
        // line 28
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "premium", array()), "premium_key", array()) ||  !(isset($context["premium_key_valid"]) ? $context["premium_key_valid"] : null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 30
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your Premium key has been successfully validated.");
        echo "
        </div>
        <div
          class=\"mailpoet_premium_key_invalid mailpoet_key_invalid mailpoet_error";
        // line 33
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "premium", array()), "premium_key", array()) || (isset($context["premium_key_valid"]) ? $context["premium_key_valid"] : null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your Premium key is invalid.");
        echo "
        </div>
        <div
          class=\"mailpoet_mss_key_valid mailpoet_key_valid mailpoet_success";
        // line 38
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()) ||  !(isset($context["mss_key_valid"]) ? $context["mss_key_valid"] : null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 40
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your MailPoet Sending Service key has been successfully validated.");
        echo "
        </div>
        <div
          class=\"mailpoet_mss_key_invalid mailpoet_key_invalid mailpoet_error";
        // line 43
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()) || (isset($context["mss_key_valid"]) ? $context["mss_key_valid"] : null))) {
            echo " mailpoet_hidden";
        }
        echo "\"
        >
          ";
        // line 45
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your MailPoet Sending Service key is invalid.");
        echo "
        </div>
        <br/>
        <div
          class=\"mailpoet_premium_download\"
          ";
        // line 50
        if (((isset($context["premium_plugin_installed"]) ? $context["premium_plugin_installed"] : null) ||  !(isset($context["premium_key_valid"]) ? $context["premium_key_valid"] : null))) {
            // line 51
            echo "            style=\"display: none;\"
          ";
        }
        // line 53
        echo "        >
          <a
            class=\"mailpoet_premium_install_link button-primary\"
            href=\"";
        // line 56
        echo twig_escape_filter($this->env, ((array_key_exists("premium_install_url", $context)) ? (_twig_default_filter((isset($context["premium_install_url"]) ? $context["premium_install_url"] : null), "#")) : ("#")), "html", null, true);
        echo "\"
          >";
        // line 57
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Install Premium now.");
        echo "
          </a>
          <span>
            ";
        // line 60
        echo twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("[link]Read guide[/link] on how to install Premium."), array("[link]" => "<a target=\"_blank\" href=\"http://beta.docs.mailpoet.com/article/194-instructions-to-install-the-premium-plugin\">", "[/link]" => "</a>"));
        // line 66
        echo "
           </span>
        </div>
        <div
          class=\"mailpoet_premium_activate\"
          ";
        // line 71
        if ((( !(isset($context["premium_plugin_installed"]) ? $context["premium_plugin_installed"] : null) || (isset($context["premium_plugin_active"]) ? $context["premium_plugin_active"] : null)) ||  !(isset($context["premium_key_valid"]) ? $context["premium_key_valid"] : null))) {
            // line 72
            echo "            style=\"display: none;\"
          ";
        }
        // line 74
        echo "        >
          <span>";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You need to activate the MailPoet Premium plugin.");
        echo "</span>
          <a
            class=\"mailpoet_premium_activate_link button-primary\"
            href=\"";
        // line 78
        echo twig_escape_filter($this->env, ((array_key_exists("premium_activate_url", $context)) ? (_twig_default_filter((isset($context["premium_activate_url"]) ? $context["premium_activate_url"] : null), "#")) : ("#")), "html", null, true);
        echo "\"
          >";
        // line 79
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate Premium.");
        echo "</a>
        </div>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    \$(function() {
      // verifying license key
      \$('#mailpoet_premium_key_verify').on('click', function () {
        // get license key
        var key = \$('#mailpoet_premium_key').val();

        if(key.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 97
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please specify a license key before validating it."), "js"), "html", null, true);
        echo "',
            { scroll: true }
          );
        }

        MailPoet.Modal.loading(true);

        var promise1 = verifyMailPoetPremiumKey(key);
        var promise2 = verifyMailPoetSendingServiceKey(key);

        // wait until both requests are completed before hiding the loading modal
        promise1.always(function() {
          promise2.always(function() {
            MailPoet.Modal.loading(false);
          });
        });
      });

      function verifyMailPoetPremiumKey(key) {
        \$('.mailpoet_premium_key_valid, .mailpoet_premium_key_invalid').addClass('mailpoet_hidden');
        \$('.mailpoet_premium_download, .mailpoet_premium_activate').hide();

        return MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'services',
          action: 'checkPremiumKey',
          data: {
            key: key
          }
        }).done(function(response) {
          // Hide server error notices
          \$('.mailpoet_notice_server').hide();
          \$('.mailpoet_premium_key_valid').text(response.data.message);
          \$('.mailpoet_premium_key_valid').removeClass('mailpoet_hidden');
          if (!response.meta.premium_plugin_installed) {
            \$('.mailpoet_premium_install_link')
              .attr('href', response.meta.premium_install_url || '#');
            \$('.mailpoet_premium_download').show();
          } else if (!response.meta.premium_plugin_active) {
            \$('.mailpoet_premium_activate_link')
              .attr('href', response.meta.premium_activate_url || '#');
            \$('.mailpoet_premium_activate').show();
          }
        }).fail(function(response) {
          if (response.errors.length > 0) {
            \$('.mailpoet_premium_key_invalid').text(
              response.errors.map(function(error) { return error.message; }).join(' ')
            );
            \$('.mailpoet_premium_key_invalid').removeClass('mailpoet_hidden');
          }
        });
      }

      function verifyMailPoetSendingServiceKey(key) {
        \$('.mailpoet_mss_key_valid, .mailpoet_mss_key_invalid').addClass('mailpoet_hidden');

        return MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'services',
          action: 'checkMSSKey',
          data: {
            key: key
          }
        }).done(function(response) {
          // Hide server error notices
          \$('.mailpoet_notice_server').hide();
          \$('.mailpoet_mss_key_valid').text(response.data.message);
          \$('.mailpoet_mss_key_valid').removeClass('mailpoet_hidden');
          updateMailPoetMethodButton();
        }).fail(function(response) {
          if (response.errors.length > 0) {
            \$('.mailpoet_mss_key_invalid').text(
              response.errors.map(function(error) { return error.message; }).join(' ')
            );
            \$('.mailpoet_mss_key_invalid').removeClass('mailpoet_hidden');
            updateMailPoetMethodButton();
          }
        });
      }

    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/premium.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 97,  163 => 79,  159 => 78,  153 => 75,  150 => 74,  146 => 72,  144 => 71,  137 => 66,  135 => 60,  129 => 57,  125 => 56,  120 => 53,  116 => 51,  114 => 50,  106 => 45,  99 => 43,  93 => 40,  86 => 38,  80 => 35,  73 => 33,  67 => 30,  60 => 28,  54 => 25,  46 => 20,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/premium.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\premium.html");
    }
}
