<?php

/* settings/mta.html */
class __TwigTemplate_c078460c948e8ab455f917805a59db6f435ff4a3d57b66bca58df301fec6b842 extends Twig_Template
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
        $context["intervals"] = array(0 => 1, 1 => 2, 2 => 5, 3 => 10, 4 => 15);
        // line 2
        $context["default_frequency"] = array("website" => array("emails" => 25, "interval" => 5), "smtp" => array("emails" => 100, "interval" => 5));
        // line 12
        echo "
<!-- mta: group -->
<input
  type=\"hidden\"
  id=\"mta_group\"
  name=\"mta_group\"
  value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()), "html", null, true);
        echo "\"
/>
<!-- mta: method -->
<input
  type=\"hidden\"
  id=\"mta_method\"
  name=\"mta[method]\"
  value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "method", array()), "html", null, true);
        echo "\"
/>

<!-- mta: sending frequency -->
<input
  type=\"hidden\"
  id=\"mta_frequency_emails\"
  name=\"mta[frequency][emails]\"
  value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mta_frequency_interval\"
  name=\"mta[frequency][interval]\"
  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()), "html", null, true);
        echo "\"
/>

<!-- mta: mailpoet sending service key -->
<input
  type=\"hidden\"
  id=\"mailpoet_api_key\"
  name=\"mta[mailpoet_api_key]\"
  value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()), "html", null, true);
        echo "\"
/>

<!-- smtp: available sending methods -->
<ul class=\"mailpoet_sending_methods clearfix\">
  <li
    data-group=\"mailpoet\"
    ";
        // line 54
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 55
        echo "  >
    <h3>
      <img
        src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/img/mailpoet_logo.png\"
        alt=\"MailPoet\"
        width=\"137\"
        height=\"54\"
      />
    </h3>

    <p
      class=\"mailpoet_description";
        // line 66
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
      id=\"mailpoet_sending_method_active_text\"
    >
      <strong>";
        // line 69
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You're now sending with MailPoet!");
        echo "</strong>
      <br />
      ";
        // line 71
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Great, you're all set up. Your emails will now be sent quickly and reliably!");
        echo "
    </p>

    <p
      class=\"mailpoet_description";
        // line 75
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
      id=\"mailpoet_sending_method_inactive_text\"
    >
      <strong>";
        // line 78
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Solve all of your sending problems!");
        echo "</strong>
      <br />
      ";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Let MailPoet send your emails and get the Premium features for as little as 10 dollars or euros per month.");
        echo "
      <br/>
      <br/>
      <a
        href=\"";
        // line 84
        echo admin_url("admin.php?page=mailpoet-premium");
        echo "\"
        class=\"button button-primary\"
      >";
        // line 86
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Find out more");
        echo "</a>
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 90
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <button
        class=\"mailpoet_sending_service_activate button-secondary\"
        ";
        // line 96
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet") ||  !(isset($context["mss_key_valid"]) ? $context["mss_key_valid"] : null))) {
            echo " disabled=\"disabled\"";
        }
        // line 97
        echo "      >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</button>
    </div>
  </li>
  <li
    data-group=\"website\"
    ";
        // line 102
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 103
        echo "  >
    <h3>";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host / web server");
        echo "</h3>

    <p class=\"mailpoet_description\">
      <strong>";
        // line 107
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Free, but not recommended");
        echo "</strong>
      <br />
      ";
        // line 109
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Web hosts generally have a bad reputation as a sender. Your newsletter will probably be considered spam.");
        echo "
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 113
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/website\">";
        // line 119
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
  <li
    data-group=\"smtp\"
    ";
        // line 124
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 125
        echo "  >
    <h3>";
        // line 126
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Third-party");
        echo "</h3>

    <p class=\"mailpoet_description\">
      <strong>";
        // line 129
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("For SMTP, SendGrid or Amazon SES");
        echo "</strong>
      <br />
      ";
        // line 131
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We only recommend using a third-party service if you are a technical user.");
        echo "
    </p>

    <div class=\"mailpoet_status\">
      <span>";
        // line 135
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
    </div>

    <div class=\"mailpoet_actions\">
      <a
        class=\"button-secondary\"
        href=\"#mta/smtp\">";
        // line 141
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
    </div>
  </li>
</ul>

<p class=\"mailpoet_sending_methods_help\">
  ";
        // line 147
        echo twig_replace_filter($this->env->getExtension('MailPoet\Twig\I18n')->translate("Need help to pick? [link]Check out the comparison table of sending methods[/link]."), array("[link]" => "<a target=\"_blank\" href=\"http://beta.docs.mailpoet.com/article/181-comparison-table-of-sending-methods\">", "[/link]" => "</a>"));
        // line 153
        echo "
</p>

<div id=\"mailpoet_sending_method_setup\">
  <!-- Sending Method: Website -->
  <div
    class=\"mailpoet_sending_method\"
    data-group=\"website\"
    style=\"display:none;\"
  >
    <table class=\"form-table\">
      <tbody>
          <th scope=\"row\">
            <label for=\"mailpoet_web_host\">
              ";
        // line 167
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
            </label>
          </th>
          <td>
            <p>
              <!-- sending frequency -->
              <select
                id=\"mailpoet_web_host\"
                name=\"web_host\"
              >
                <option value=\"auto\">
                  ";
        // line 178
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Safe default values");
        echo "
                </option>
                <option
                  value=\"manual\"
                  ";
        // line 182
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == "manual")) {
            // line 183
            echo "                    selected=\"selected\"
                  ";
        }
        // line 185
        echo "                >
                  ";
        // line 186
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("I'll set my own frequency");
        echo "
                </option>

                <!-- web hosts -->
                <optgroup
                  label=\"";
        // line 191
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Input your host's recommended sending frequency");
        echo "\"
                >
                ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "web", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 194
            echo "                  <option
                    value=\"";
            // line 195
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                    data-emails=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                    data-interval=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                    ";
            // line 198
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == $context["host_key"])) {
                // line 199
                echo "                      selected=\"selected\"
                    ";
            }
            // line 201
            echo "                  >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                </optgroup>
              </select>
              &nbsp;
              <!-- website: sending frequency -->
              <span id=\"mailpoet_website_sending_frequency\"></span>
            </p>

            <!-- website: manual sending frequency -->
            <div id=\"mailpoet_sending_frequency_manual\" style=\"display:none;\">
              <p>
                <input
                  id=\"website_frequency_emails\"
                  type=\"number\"
                  min=\"1\"
                  max=\"1000\"
                  ";
        // line 218
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website")) {
            // line 219
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
                  ";
        } else {
            // line 221
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
            echo "\"
                  ";
        }
        // line 223
        echo "                />
                ";
        // line 224
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
                <select id=\"website_frequency_interval\">
                  ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 227
            echo "                    <option
                      value=\"";
            // line 228
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                      ";
            // line 230
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 231
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array())))) {
                // line 233
                echo "                      selected=\"selected\"
                      ";
            }
            // line 235
            echo "                      ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 236
                echo "                        selected=\"selected\"
                      ";
            }
            // line 238
            echo "                    >
                      ";
            // line 239
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                      ";
            // line 240
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()))) {
                // line 241
                echo "                        (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                      ";
            }
            // line 243
            echo "                    </option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                </select>
                <span id=\"mailpoet_website_daily_emails\"></span>
              </p>
              <br />
              <p>
                ";
        // line 250
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Warning!</strong> Sending more than the recommended amount of emails? You may break the terms of your web host or provider!");
        echo "'
                <br />
                ";
        // line 252
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please ask your host for the maximum number of emails you are allowed to send per day.");
        echo "
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Sending Method: SMTP -->
  <div class=\"mailpoet_sending_method\" data-group=\"smtp\" style=\"display:none;\">
    <table class=\"form-table\">
      <tbody>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_smtp_provider\">
              ";
        // line 268
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Provider");
        echo "
            </label>
          </th>
          <td>
            <!-- smtp provider -->
            <select
              id=\"mailpoet_smtp_provider\"
              name=\"smtp_provider\"
            >
              <option data-interval=\"5\" data-emails=\"100\" value=\"manual\">
                ";
        // line 278
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Custom SMTP");
        echo "
              </option>
              <!-- providers -->
              <optgroup label=\"";
        // line 281
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select your provider");
        echo "\">
                ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 283
            echo "                  <option
                    value=\"";
            // line 284
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                    data-emails=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                    data-interval=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                    data-fields=\"";
            // line 287
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["host"], "fields", array()), ","), "html", null, true);
            echo "\"
                    ";
            // line 288
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) == $context["host_key"])) {
                // line 289
                echo "                      selected=\"selected\"
                    ";
            }
            // line 291
            echo "                  >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "              </optgroup>
            </select>
          </td>
        </tr>
        <tr>
          <th scope=\"row\">
            <label for=\"mailpoet_smtp_provider\">
              ";
        // line 300
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
            </label>
          </th>
          <td>
            <!-- smtp: sending frequency -->
            <p>
              <input
                id=\"smtp_frequency_emails\"
                type=\"number\"
                min=\"1\"
                max=\"1000\"
                ";
        // line 311
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 312
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
                ";
        } else {
            // line 314
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "emails", array()), "html", null, true);
            echo "\"
                ";
        }
        // line 316
        echo "              />
              ";
        // line 317
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
              <select id=\"smtp_frequency_interval\">
                ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 320
            echo "                  <option
                    value=\"";
            // line 321
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                    ";
            // line 323
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 324
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "interval", array())))) {
                // line 326
                echo "                    selected=\"selected\"
                    ";
            }
            // line 328
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 329
                echo "                      selected=\"selected\"
                    ";
            }
            // line 331
            echo "                  >
                    ";
            // line 332
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                    ";
            // line 333
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "smtp", array()), "interval", array()))) {
                // line 334
                echo "                      (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                    ";
            }
            // line 336
            echo "                  </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "              </select>
              <span id=\"mailpoet_smtp_daily_emails\"></span>
            </p>
          </td>
        </tr>
        <!-- smtp: host -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"host\">
          <th scope=\"row\">
            <label for=\"settings[mta_host]\">
              ";
        // line 347
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Hostname");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 350
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
            </p>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_host]\"
              name=\"mta[host]\"
              value=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "host", array()), "html", null, true);
        echo "\" />
          </td>
        </tr>
        <!-- smtp: port -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"port\">
          <th scope=\"row\">
            <label for=\"settings[mta_port]\">
              ";
        // line 366
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Port");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"number\"
              max=\"65535\"
              min=\"1\"
              maxlength=\"5\"
              style=\"width:5em;\"
              id=\"settings[mta_port]\"
              name=\"mta[port]\"
              value=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "port", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: amazon region -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"region\">
          <th scope=\"row\">
            <label for=\"settings[mta_region]\">
              ";
        // line 387
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Region");
        echo "
            </label>
          </th>
          <td>
            <select
              id=\"settings[mta_region]\"
              name=\"mta[region]\"
              value=\"";
        // line 394
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 395
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()), "html", null, true);
        }
        // line 396
        echo "\"
            >
              ";
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()), "AmazonSES", array()), "regions", array()));
        foreach ($context['_seq'] as $context["region"] => $context["server"]) {
            // line 399
            echo "                <option
                  value=\"";
            // line 400
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "\"
                  ";
            // line 401
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()) == $context["server"])) {
                // line 402
                echo "                    selected=\"selected\"
                  ";
            }
            // line 404
            echo "                >
                  ";
            // line 405
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo "            </select>
          </td>
        </tr>

        <!-- smtp: amazon access_key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"access_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_access_key]\">
              ";
        // line 416
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Access Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_access_key]\"

              name=\"mta[access_key]\"
              value=\"";
        // line 426
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 427
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "access_key", array()), "html", null, true);
        }
        // line 428
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: amazon secret_key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"secret_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_secret_key]\">
              ";
        // line 437
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secret Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_secret_key]\"

              name=\"mta[secret_key]\"
              value=\"";
        // line 447
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 448
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "secret_key", array()), "html", null, true);
        }
        // line 449
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: domain -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"domain\">
          <th scope=\"row\">
            <label for=\"settings[mta_domain]\">
              ";
        // line 458
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Domain");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 461
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
            </p>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_domain]\"
              name=\"mta[domain]\"
              value=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "domain", array()), "html", null, true);
        echo "\" />
          </td>
        </tr>

        <!-- smtp: api key -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"api_key\">
          <th scope=\"row\">
            <label for=\"settings[mta_api_key]\">
              ";
        // line 478
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("API Key");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_api_key]\"
              name=\"mta[api_key]\"
              value=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "api_key", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>

        <!-- smtp: login -->
        <tr id=\"mta_login\" class=\"mailpoet_smtp_field\" data-field=\"login\">
          <th scope=\"row\">
            <label for=\"settings[mta_login]\">
              ";
        // line 496
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Login");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"text\"
              class=\"regular-text\"
              id=\"settings[mta_login]\"
              name=\"mta[login]\"
              value=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "login", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>
        <!-- smtp: password -->
        <tr id=\"mta_password\" class=\"mailpoet_smtp_field\" data-field=\"password\">
          <th scope=\"row\">
            <label for=\"settings[mta_password]\">
              ";
        // line 513
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Password");
        echo "
            </label>
          </th>
          <td>
            <input
              type=\"password\"
              class=\"regular-text\"
              id=\"settings[mta_password]\"
              name=\"mta[password]\"
              value=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "password", array()), "html", null, true);
        echo "\"
            />
          </td>
        </tr>
        <!-- smtp: security protocol -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"encryption\">
          <th scope=\"row\">
            <label for=\"settings[mta_encryption]\">
              ";
        // line 530
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secure Connection");
        echo "
            </label>
          </th>
          <td>
            <select id=\"settings[mta_encryption]\" name=\"mta[encryption]\">
              <option value=\"\">";
        // line 535
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</option>
              <option
                value=\"ssl\"
                ";
        // line 538
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "ssl")) {
            // line 539
            echo "                  selected=\"selected\"
                ";
        }
        // line 541
        echo "              >SSL</option>
              <option
                value=\"tls\"
                ";
        // line 544
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "tls")) {
            // line 545
            echo "                  selected=\"selected\"
                ";
        }
        // line 547
        echo "              >TLS</option>
            </select>
          </td>
        </tr>
        <!-- smtp: authentication -->
        <tr class=\"mailpoet_smtp_field\" data-field=\"authentication\">
          <th scope=\"row\">
            <label>
              ";
        // line 555
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Authentication");
        echo "
            </label>
            <p class=\"description\">
              ";
        // line 558
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this option set to Yes. Only a tiny portion of SMTP services prefer Authentication to be turned off.");
        echo "
            </p>
          </th>
          <td>
            <label>
              <input
                type=\"radio\"
                value=\"1\"
                name=\"mta[authentication]\"
                ";
        // line 568
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) || ($this->getAttribute($this->getAttribute(        // line 569
(isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "1"))) {
            // line 570
            echo "                  checked=\"checked\"
                ";
        }
        // line 572
        echo "              />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
            </label>
            &nbsp;
            <label>
              <input
                type=\"radio\"
                value=\"-1\"
                name=\"mta[authentication]\"
                ";
        // line 580
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "-1")) {
            // line 581
            echo "                  checked=\"checked\"
                ";
        }
        // line 583
        echo "              />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
            </label>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <table class=\"form-table\">
    <tbody>
      <!-- SPF -->
      <tr id=\"mailpoet_mta_spf\">
        <th scope=\"row\">
          <label>
            ";
        // line 597
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF Signature (Highly recommended!)");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 600
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This improves your delivery rate by verifying that you're allowed to send emails from your domain.");
        echo "
          </p>
        </th>
        <td>
          <p>
            ";
        // line 605
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF is set up in your DNS. Read your host's support documentation for more information.");
        echo "
          </p>
        </td>
      </tr>
      <!-- test method -->
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_mta_test_email\">
            ";
        // line 613
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Test the sending method");
        echo "
          </label>
        </th>
        <td>
          <p>
            <input
              type=\"text\"
              id=\"mailpoet_mta_test_email\"
              class=\"regular-text\"
              value=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "user_email", array()), "html", null, true);
        echo "\"
            />
            <a
              id=\"mailpoet_mta_test\"
              class=\"button-secondary\"
            >";
        // line 627
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a test email");
        echo "</a>
          </p>
        </td>
      </tr>
      <!-- activate or cancel -->
      <tr>
        <th scope=\"row\">
          <p>
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_save button button-primary\"
            >";
        // line 638
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</a>
            &nbsp;
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_cancel\"
            >";
        // line 643
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or Cancel");
        echo "</a>
          </p>
        </th>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    var sending_frequency_template =
      Handlebars.compile(\$('#mailpoet_sending_frequency_template').html());

    // om dom loaded
    \$(function() {
      // constrain number type inputs
      \$('input[type=\"number\"]').on('keyup', function() {
        var currentValue = \$(this).val();
        if(!currentValue) return;

        var minValue = \$(this).attr('min');
        var maxValue = \$(this).attr('max');
        \$(this).val(Math.min(Math.max(minValue, currentValue), maxValue));
      });

      // testing sending method
      \$('#mailpoet_mta_test').on('click', function() {
        // get form data
        var data = \$('#mailpoet_settings_form').serializeObject();
        // get test email and include it in data
        var recipient = \$('#mailpoet_mta_test_email').val();

        var settings = jQuery('#mailpoet_settings_form').serializeObject();
        var mailer = settings.mta;
        mailer.method = getMethodFromGroup(
          (\$('.mailpoet_sending_method:visible').data('group') !== undefined)
          ? \$('.mailpoet_sending_method:visible').data('group')
          : \$('#mta_group').val()
        );

        // check that we have a from address
        if(settings.sender.address.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 688
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email could not be sent. Make sure the option \"Email notifications\" has a FROM email address in the Basics tab."), "js"), "html", null, true);
        echo "',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'mailer',
          action: 'send',
          data: {
            mailer: mailer,
            newsletter: {
              subject: \"";
        // line 701
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Sending Method Test");
        echo "\",
              body: {
                text: \"";
        // line 703
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "\"
              }
            },
            subscriber: recipient
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          MailPoet.Notice.success(
            \"";
        // line 712
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email has been sent! Check your inbox."), "js"), "html", null, true);
        echo "\",
            { scroll: true }
          );
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return _.escape(error.message); }),
              { scroll: true }
            );
          }
        });
      });

      // sending frequency update based on selected provider
      \$('#mailpoet_smtp_provider').on('change keyup', setProviderForm);
      \$('#mailpoet_web_host').on('change keyup', renderHostSendingFrequency);

      // update manual sending frequency when values are changed
      \$('#website_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('website');
      });
      \$('#website_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('website');
      });

      \$('#smtp_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('smtp');
      });
      \$('#smtp_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('smtp');
      });

      // save configuration of a sending method
      \$('.mailpoet_sending_service_activate').on('click', function(e) {
        e.preventDefault();
        saveSendingMethodConfiguration('mailpoet');
      });
      \$('.mailpoet_mta_setup_save').on('click', function() {
        // get selected method
        var group = \$('.mailpoet_sending_method:visible').data('group');
        saveSendingMethodConfiguration(group);
      });

      function saveSendingMethodConfiguration(group) {
        var emails = \$('#'+group+'_frequency_emails').val(),
          interval = \$('#'+group+'_frequency_interval').val();

        // set sending method
        if(group === undefined) {
          MailPoet.Notice.error(
            \"";
        // line 762
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have selected an invalid sending method."), "js"), "html", null, true);
        echo "\"
          );
        } else {
          // set new sending method active
          setSendingMethodGroup(group);

          // update sending frequency values
          \$('#mta_frequency_emails').val(emails);
          \$('#mta_frequency_interval').val(interval);

          // enforce signup confirmation depending on selected group
          setSignupConfirmation(group);

          // back to selection of sending methods
          MailPoet.Router.navigate('mta', { trigger: true });

          // save settings
          \$('.mailpoet_settings_submit > input').trigger('click');
        }
      }

      function setSignupConfirmation(group) {
        if (group === 'mailpoet') {
          // force signup confirmation (select \"Yes\")
          \$('.mailpoet_signup_confirmation[value=\"1\"]').attr('checked', true);
          \$('.mailpoet_signup_confirmation[value=\"\"]').attr('checked', false);

          // hide radio inputs
          \$('#mailpoet_signup_confirmation_input').hide();

          // show mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').show();

          // show signup confirmation options
          \$('#mailpoet_signup_options').show();
        } else {
          // show radio inputs
          \$('#mailpoet_signup_confirmation_input').show();

          // hide mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').hide();
        }
      }

      function setSendingMethodGroup(group) {
        // deactivate other sending methods
        \$('.mailpoet_sending_methods .mailpoet_active')
          .removeClass('mailpoet_active');

        // set active sending method
        \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"]')
          .addClass('mailpoet_active');

        // set smtp method value
        \$('#mta_group').val(group);

        var method = getMethodFromGroup(group);

        \$('#mta_method').val(method);

        // set MailPoet method description
        \$('#mailpoet_sending_method_active_text')
          .toggleClass('mailpoet_hidden', group !== 'mailpoet');
        \$('#mailpoet_sending_method_inactive_text')
          .toggleClass('mailpoet_hidden', group === 'mailpoet');

        // Hide server error notices
        \$('.mailpoet_notice_server').hide();

        updateMailPoetMethodButton();
      }

      function getMethodFromGroup(group) {
        var group = group || 'website';
        switch(group) {
          case 'mailpoet':
            return 'MailPoet';
          break;
          case 'website':
            return 'PHPMail';
          break;
          case 'smtp':
            var method = \$('#mailpoet_smtp_provider').val();
            if(method === 'manual') {
              return 'SMTP';
            }
            return method;
          break;
        }
      }

      // cancel configuration of a sending method
      \$('.mailpoet_mta_setup_cancel').on('click', function() {
        // back to selection of sending methods
        MailPoet.Router.navigate('mta', { trigger: true });
      });

      // render sending frequency form
      \$('#mailpoet_smtp_provider').trigger('change');
      \$('#mailpoet_web_host').trigger('change');
    });

    function setProviderForm() {
      // check provider
      var provider = \$(this).find('option:selected').first();
      var fields = provider.data('fields');

      if(fields === undefined) {
        fields = [
          'host',
          'port',
          'login',
          'password',
          'authentication',
          'encryption'
        ];
      } else {
        fields = fields.split(',');
      }

      \$('.mailpoet_smtp_field').hide();

      fields.map(function(field) {
        \$('.mailpoet_smtp_field[data-field=\"'+field+'\"]').show();
      });

      // update sending frequency
      renderSMTPSendingFrequency(provider);
    }

    function renderSMTPSendingFrequency() {
      // set sending frequency
      setSendingFrequency({
        output: '#mailpoet_smtp_daily_emails',
        only_daily: true,
        emails: \$('#smtp_frequency_emails').val(),
        interval: \$('#smtp_frequency_interval').val()
      });
    }

    function renderHostSendingFrequency() {
      var host = \$(this).find('option:selected').first();
      var emails =
        host.data('emails') || ";
        // line 905
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
        echo ";
      var interval =
        host.data('interval') || ";
        // line 907
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()), "html", null, true);
        echo ";
      var fields =
        host.data('fields') || '';

      if(host.val() === 'manual' ) {
        // hide  sending frequency
        \$('#mailpoet_website_sending_frequency').hide();
        // show manual sending frequency form
        \$('#mailpoet_sending_frequency_manual').slideDown(200);

        // set sending frequency
        setSendingFrequency({
          output: '#mailpoet_website_daily_emails',
          only_daily: true,
          emails: \$('#website_frequency_emails').val(),
          interval: \$('#website_frequency_interval').val()
        });
      } else {
        \$('#mailpoet_sending_frequency_manual').slideUp(200, function() {
          \$('#mailpoet_website_sending_frequency').show();

          \$('#website_frequency_emails').val(emails);
          \$('#website_frequency_interval').val(interval);
        });

        // set sending frequency
        setSendingFrequency({
          output: '#mailpoet_website_sending_frequency',
          emails: emails,
          interval: interval
        });
      }
    }

    function updateSendingFrequency(method) {
      // get emails
      var options = {
        only_daily: true,
        emails: \$('#'+method+'_frequency_emails').val(),
        interval: \$('#'+method+'_frequency_interval').val()
      };

      var MINUTES_PER_DAY = 1440;
      var SECONDS_PER_DAY = 86400;

      options.daily_emails = ~~(
        (MINUTES_PER_DAY / options.interval) * options.emails
      );

      options.emails_per_second = (~~(
        ((options.daily_emails) / 86400) * 10)
      ) / 10;


      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$('#mailpoet_'+method+'_daily_emails').html(
        sending_frequency_template(options)
      );

      // update actual sending frequency values
      \$('#mta_frequency_emails').val(options.emails);
      \$('#mta_frequency_interval').val(options.interval);
    }

    function setSendingFrequency(options) {
      options.daily_emails = ~~((1440 / options.interval) * options.emails);

      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$(options.output).html(
        sending_frequency_template(options)
      );
    }

    Handlebars.registerHelper('format_time', function(value, block) {
      var label = null;
      var labels = {
        minute: \"";
        // line 987
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every minute");
        echo "\",
        minutes: \"";
        // line 988
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d minutes");
        echo "\",
        hour: \"";
        // line 989
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every hour");
        echo "\",
        hours: \"";
        // line 990
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d hours");
        echo "\"
      };

      // cast time as int
      value = ~~(value);

      // format time depending on the value
      if(value >= 60) {
        // we're dealing with hours
        if(value === 60) {
          label = labels.hour;
        } else {
          label = labels.hours;
        }
        value /= 60;
      } else {
        // we're dealing with minutes
        if(value === 1) {
          label = labels.minute;
        } else {
          label = labels.minutes;
        }
      }

      if(label !== null) {
        return label.replace('%1\$d', value);
      } else {
        return value;
      }
    });
  });

  // enable/disable MSS method activate button
  function updateMailPoetMethodButton() {
    var \$ = jQuery;
    var group = \$('.mailpoet_sending_methods .mailpoet_active').data('group');
    var key_invalid = \$('.mailpoet_mss_key_valid').hasClass('mailpoet_hidden');
    \$('.mailpoet_sending_service_activate').prop('disabled', group === 'mailpoet' || key_invalid);
  }

</script>

";
        // line 1032
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_sending_frequency_template", "settings/templates/sending_frequency.hbs");
        // line 1035
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/mta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1503 => 1035,  1501 => 1032,  1456 => 990,  1452 => 989,  1448 => 988,  1444 => 987,  1361 => 907,  1356 => 905,  1210 => 762,  1157 => 712,  1145 => 703,  1140 => 701,  1124 => 688,  1076 => 643,  1068 => 638,  1054 => 627,  1046 => 622,  1034 => 613,  1023 => 605,  1015 => 600,  1009 => 597,  991 => 583,  987 => 581,  985 => 580,  973 => 572,  969 => 570,  967 => 569,  966 => 568,  954 => 558,  948 => 555,  938 => 547,  934 => 545,  932 => 544,  927 => 541,  923 => 539,  921 => 538,  915 => 535,  907 => 530,  896 => 522,  884 => 513,  873 => 505,  861 => 496,  849 => 487,  837 => 478,  826 => 470,  814 => 461,  808 => 458,  797 => 449,  794 => 448,  792 => 447,  779 => 437,  768 => 428,  765 => 427,  763 => 426,  750 => 416,  740 => 408,  731 => 405,  728 => 404,  724 => 402,  722 => 401,  718 => 400,  715 => 399,  711 => 398,  707 => 396,  704 => 395,  702 => 394,  692 => 387,  680 => 378,  665 => 366,  655 => 359,  643 => 350,  637 => 347,  626 => 338,  619 => 336,  613 => 334,  611 => 333,  607 => 332,  604 => 331,  600 => 329,  597 => 328,  593 => 326,  591 => 324,  590 => 323,  586 => 321,  583 => 320,  579 => 319,  574 => 317,  571 => 316,  565 => 314,  559 => 312,  557 => 311,  543 => 300,  534 => 293,  525 => 291,  521 => 289,  519 => 288,  515 => 287,  511 => 286,  507 => 285,  503 => 284,  500 => 283,  496 => 282,  492 => 281,  486 => 278,  473 => 268,  454 => 252,  449 => 250,  442 => 245,  435 => 243,  429 => 241,  427 => 240,  423 => 239,  420 => 238,  416 => 236,  413 => 235,  409 => 233,  407 => 231,  406 => 230,  402 => 228,  399 => 227,  395 => 226,  390 => 224,  387 => 223,  381 => 221,  375 => 219,  373 => 218,  356 => 203,  347 => 201,  343 => 199,  341 => 198,  337 => 197,  333 => 196,  329 => 195,  326 => 194,  322 => 193,  317 => 191,  309 => 186,  306 => 185,  302 => 183,  300 => 182,  293 => 178,  279 => 167,  263 => 153,  261 => 147,  252 => 141,  243 => 135,  236 => 131,  231 => 129,  225 => 126,  222 => 125,  218 => 124,  210 => 119,  201 => 113,  194 => 109,  189 => 107,  183 => 104,  180 => 103,  176 => 102,  167 => 97,  163 => 96,  154 => 90,  147 => 86,  142 => 84,  135 => 80,  130 => 78,  122 => 75,  115 => 71,  110 => 69,  102 => 66,  91 => 58,  86 => 55,  82 => 54,  72 => 47,  61 => 39,  52 => 33,  41 => 25,  31 => 18,  23 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/mta.html", "C:\\xampp\\htdocs\\Formation\\PARIS-IV\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\mta.html");
    }
}
