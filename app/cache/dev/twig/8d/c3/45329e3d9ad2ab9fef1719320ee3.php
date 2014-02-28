<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_8dc345329e3d9ad2ab9fef1719320ee3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "file"), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "line"));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "class"));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                echo "window.location='";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "method"), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ((((200 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        $context["request_route"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status Code</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\" /></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery"), "all"))) {
            // line 57
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery")));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest"), "all"))) {
            // line 67
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest")));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes"), "all"))) {
            // line 77
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes")));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies"), "all"))) {
            // line 87
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies")));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestheaders")));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content") == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content")) {
            // line 103
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content"), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestserver")));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "responseheaders")));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            // line 119
            echo "    ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata")));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes"))) {
            // line 129
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes")));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes"))) {
            // line 139
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes")));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) {
            // line 147
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"))), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "request"), "method"), "requestattributes")));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  349 => 149,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  244 => 97,  223 => 86,  206 => 77,  204 => 76,  159 => 53,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  303 => 128,  300 => 105,  297 => 104,  291 => 102,  265 => 107,  255 => 103,  190 => 68,  113 => 48,  351 => 150,  347 => 163,  344 => 119,  339 => 146,  329 => 154,  327 => 140,  320 => 149,  313 => 145,  306 => 107,  299 => 137,  263 => 95,  249 => 100,  232 => 93,  218 => 83,  179 => 68,  191 => 67,  186 => 9,  180 => 63,  23 => 3,  205 => 78,  188 => 95,  178 => 66,  170 => 89,  160 => 96,  172 => 64,  165 => 60,  134 => 54,  63 => 18,  260 => 148,  256 => 109,  251 => 101,  185 => 66,  153 => 55,  124 => 45,  100 => 24,  77 => 33,  81 => 34,  231 => 89,  228 => 88,  200 => 9,  195 => 90,  174 => 59,  161 => 63,  148 => 46,  292 => 121,  288 => 101,  280 => 170,  250 => 144,  212 => 79,  198 => 105,  175 => 65,  97 => 23,  146 => 88,  127 => 60,  110 => 22,  102 => 40,  90 => 32,  76 => 17,  59 => 13,  274 => 97,  269 => 156,  259 => 124,  253 => 50,  248 => 145,  242 => 96,  238 => 137,  234 => 112,  225 => 87,  221 => 86,  217 => 150,  213 => 82,  194 => 97,  192 => 96,  58 => 14,  243 => 92,  240 => 157,  237 => 93,  227 => 109,  215 => 100,  210 => 81,  202 => 77,  197 => 91,  184 => 125,  150 => 78,  137 => 66,  118 => 49,  104 => 32,  53 => 11,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 147,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 98,  268 => 85,  264 => 131,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 82,  177 => 91,  169 => 99,  143 => 43,  140 => 42,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  71 => 30,  38 => 7,  155 => 56,  135 => 49,  126 => 47,  114 => 43,  84 => 29,  70 => 15,  67 => 14,  61 => 12,  94 => 34,  89 => 29,  85 => 24,  75 => 19,  68 => 29,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 31,  88 => 20,  78 => 26,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  196 => 102,  183 => 93,  171 => 58,  166 => 56,  163 => 72,  158 => 62,  156 => 62,  151 => 47,  142 => 51,  138 => 50,  136 => 48,  121 => 50,  117 => 39,  105 => 18,  91 => 33,  62 => 20,  49 => 11,  24 => 6,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 35,  120 => 44,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 19,  55 => 9,  52 => 12,  50 => 8,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 69,  189 => 73,  187 => 67,  182 => 93,  176 => 79,  173 => 74,  168 => 57,  164 => 97,  162 => 54,  154 => 60,  149 => 75,  147 => 53,  144 => 70,  141 => 75,  133 => 65,  130 => 39,  125 => 42,  122 => 41,  116 => 31,  112 => 36,  109 => 35,  106 => 45,  103 => 25,  99 => 40,  95 => 42,  92 => 21,  86 => 28,  82 => 19,  80 => 27,  73 => 16,  64 => 23,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 11,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
