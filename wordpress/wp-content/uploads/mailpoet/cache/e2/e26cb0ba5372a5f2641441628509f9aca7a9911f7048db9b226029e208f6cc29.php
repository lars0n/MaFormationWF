<?php

/* settings/advanced.html */
class __TwigTemplate_4fbc721023ce291eb2cefe3852a3effc27cb07955a381a886ce59dbfedb04cea extends Twig_Template
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
    <!-- bounce email -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[bounce_email]\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce email address");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your bounced emails will be sent to this address.");
        echo "
          <a href=\"http://beta.docs.mailpoet.com/article/180-how-bounce-management-works-in-mailpoet-3\"
             target=\"_blank\"
          >";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[bounce_email]\"
            name=\"bounce[address]\"
            value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bounce", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"bounce@mydomain.com\"
          />
        </p>
      </td>
    </tr>
    <!-- task scheduler -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 31
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter task scheduler (cron)");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 34
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select what will activate your newsletter queue.");
        echo "
          <a href=\"http://docs.mailpoet.com/article/129-what-is-the-newsletter-task-scheduler\"
             target=\"_blank\"
          >";
        // line 37
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "wordpress", array()), "html", null, true);
        echo "\"
              ";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cron_trigger", array()), "method", array()) == $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "wordpress", array()))) {
            // line 48
            echo "              checked=\"checked\"
              ";
        }
        // line 50
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors to your website (recommended)");
        echo "
          </label>
        </p>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "mailpoet", array()), "html", null, true);
        echo "\"
              ";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cron_trigger", array()), "method", array()) == $this->getAttribute((isset($context["cron_trigger"]) ? $context["cron_trigger"] : null), "mailpoet", array()))) {
            // line 60
            echo "                checked=\"checked\"
                ";
        }
        // line 62
        echo "              />";
        echo twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet's own script. Doesn't work with [link]these hosts[/link]."), array("[link]" => "<a target=\"_blank\" href=\"http://docs.mailpoet.com/article/131-hosts-which-mailpoet-task-scheduler-wont-work\">", "[/link]" => "</a>"));
        // line 68
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- link tracking -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 77
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open and click tracking");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable or disable open and click tracking.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              value=\"1\"
              ";
        // line 90
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tracking", array()), "enabled", array())) {
            // line 91
            echo "              checked=\"checked\"
              ";
        }
        // line 93
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              value=\"\"
              ";
        // line 101
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "tracking", array()), "enabled", array())) {
            // line 102
            echo "              checked=\"checked\"
              ";
        }
        // line 104
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- share anonymous data? -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 113
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 116
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data and help us improve the plugin. We appreciate your help!");
        echo "
          <a
            href=\"http://docs.mailpoet.com/article/130-sharing-your-data-with-us\"
            target=\"_blank\"
          >";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"1\"
              ";
        // line 130
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            // line 131
            echo "                checked=\"checked\"
              ";
        }
        // line 133
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              value=\"\"
              ";
        // line 141
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            // line 142
            echo "                checked=\"checked\"
              ";
        }
        // line 144
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- reinstall -->
    <tr>
      <th scope=\"row\">
        <label>";
        // line 152
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall from scratch");
        echo "</label>
        <p class=\"description\">
          ";
        // line 154
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to start from the beginning? This will completely delete MailPoet and reinstall it from scratch. Remember: you will lose all of your data!");
        echo "
        </p>
      </th>
      <td>
        <p>
          <a
            id=\"mailpoet_reinstall\"
            class=\"button\"
            href=\"javascript:;\">";
        // line 162
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall now...");
        echo "</a>
        </p>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    \$(function() {
      \$('#mailpoet_reinstall').on('click', function() {
        if(confirm(
          \"";
        // line 174
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Are you sure? All of your MailPoet data will be permanently erased (newsletters, statistics, subscribers, etc.).");
        echo "\"
        )) {
          MailPoet.Modal.loading(true);
          MailPoet.Ajax.post({
            'api_version': window.mailpoet_api_version,
            'endpoint': 'setup',
            'action': 'reset'
          }).always(function() {
            MailPoet.Modal.loading(false);
          }).done(function(response) {
            window.location = \"";
        // line 184
        echo admin_url("admin.php?page=mailpoet-newsletters");
        echo "\";
          }).fail(function(response) {
            if (response.errors.length > 0) {
              MailPoet.Notice.error(
                response.errors.map(function(error) { return error.message; }),
                { scroll: true }
              );
            }
          });
        }
        return false;
      });
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/advanced.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 184,  282 => 174,  267 => 162,  256 => 154,  251 => 152,  239 => 144,  235 => 142,  233 => 141,  221 => 133,  217 => 131,  215 => 130,  202 => 120,  195 => 116,  189 => 113,  176 => 104,  172 => 102,  170 => 101,  158 => 93,  154 => 91,  152 => 90,  139 => 80,  133 => 77,  122 => 68,  119 => 62,  115 => 60,  113 => 59,  109 => 58,  97 => 50,  93 => 48,  91 => 47,  87 => 46,  75 => 37,  69 => 34,  63 => 31,  50 => 21,  39 => 13,  33 => 10,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/advanced.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\advanced.html");
    }
}
