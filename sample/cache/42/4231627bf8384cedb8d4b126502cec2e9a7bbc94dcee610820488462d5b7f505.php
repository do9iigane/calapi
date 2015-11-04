<?php

/* day.twig */
class __TwigTemplate_ea4084590d8d8d29e8cb21b5ba06c31a112e84d027ee86d19ae39e2182e9a67b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>記念日API</title>
    <!-- Bootstrap -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
        /* ページトップ */
        #page-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            font-size: 80%;
        }

        #page-top a {
            background: #666;
            text-decoration: none;
            color: #fff;
            width: 100px;
            padding: 25px 0;
            text-align: center;
            display: block;
            border-radius: 10px;
        }

        #page-top a:hover {
            text-decoration: none;
            background: #999;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<a href=\"freeword.php\">自由検索</a>
<div class=\"container\" id=\"content\" tabindex=\"-1\">
    <h1>記念日API</h1>

    <h2>http://www.kinenbi.gr.jp/のwrapperです</h2>
    <form method=\"POST\" action=\"\" name=\"S\" id=\"hoge\">
        <input type=\"hidden\" name=\"MD\" value=\"1\">
        <div>

            <select id=\"m\" name=\"M\">
                ";
        // line 54
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_data_, "range", array()), "month", array()));
        foreach ($context['_seq'] as $context["key"] => $context["month"]) {
            // line 55
            echo "                    <option value=\"";
            if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
            echo twig_escape_filter($this->env, $_month_, "html", null, true);
            echo "\" ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
            if (($this->getAttribute($this->getAttribute($_data_, "post_data", array(), "any", false, true), "M", array(), "any", true, true) && ($_month_ == $this->getAttribute($this->getAttribute($_data_, "post_data", array()), "M", array())))) {
                echo "selected";
            }
            echo ">";
            if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
            echo twig_escape_filter($this->env, $_month_, "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </select>月
            <select id=\"d\" name=\"D\">
                ";
        // line 59
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_data_, "range", array()), "day", array()));
        foreach ($context['_seq'] as $context["key"] => $context["day"]) {
            // line 60
            echo "                    <option value=\"";
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            echo twig_escape_filter($this->env, $_day_, "html", null, true);
            echo "\" ";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            if (($this->getAttribute($this->getAttribute($_data_, "post_data", array(), "any", false, true), "D", array(), "any", true, true) && ($_day_ == $this->getAttribute($this->getAttribute($_data_, "post_data", array()), "D", array())))) {
                echo "selected";
            }
            echo ">";
            if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
            echo twig_escape_filter($this->env, $_day_, "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </select>日
        </div>
        <div class=\"whatday_search\">
            <input type=\"submit\">
        </div>
    </form>

    ";
        // line 69
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "result", array(), "any", true, true)) {
            // line 70
            echo "        <h3>検索結果</h3>
        <table class=\"table table-striped table-bordered table-hover\">
            ";
            // line 72
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "result", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["aniversary"]) {
                // line 73
                echo "                <tr>
                    <td class=\"col-xs-6 col-md-1\">";
                // line 74
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "month", array()), "html", null, true);
                echo "月";
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "day", array()), "html", null, true);
                echo "日</td>
                    <td class=\"col-xs-6 col-md-3\">";
                // line 75
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "name", array()), "html", null, true);
                echo "</td>
                    <td class=\"col-xs-6 col-md-6\">";
                // line 76
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "description", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aniversary'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        </table>
    ";
        }
        // line 81
        echo "</div>


<p id=\"page-top\"><a href=\"#\">PAGE TOP</a></p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>

<script>
    \$(function () {
        var topBtn = \$('#page-top');
        topBtn.hide();
        //スクロールが200に達したらボタン表示
        \$(window).scroll(function () {
            if (\$(this).scrollTop() > 500) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        //スクロールしてトップ
        topBtn.click(function () {
            \$('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });
</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "day.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 81,  173 => 79,  163 => 76,  158 => 75,  150 => 74,  147 => 73,  142 => 72,  138 => 70,  135 => 69,  126 => 62,  107 => 60,  102 => 59,  98 => 57,  79 => 55,  74 => 54,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>記念日API</title>*/
/*     <!-- Bootstrap -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">*/
/*     <style type="text/css">*/
/*         /* ページトップ *//* */
/*         #page-top {*/
/*             position: fixed;*/
/*             bottom: 20px;*/
/*             right: 20px;*/
/*             font-size: 80%;*/
/*         }*/
/* */
/*         #page-top a {*/
/*             background: #666;*/
/*             text-decoration: none;*/
/*             color: #fff;*/
/*             width: 100px;*/
/*             padding: 25px 0;*/
/*             text-align: center;*/
/*             display: block;*/
/*             border-radius: 10px;*/
/*         }*/
/* */
/*         #page-top a:hover {*/
/*             text-decoration: none;*/
/*             background: #999;*/
/*         }*/
/*     </style>*/
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <a href="freeword.php">自由検索</a>*/
/* <div class="container" id="content" tabindex="-1">*/
/*     <h1>記念日API</h1>*/
/* */
/*     <h2>http://www.kinenbi.gr.jp/のwrapperです</h2>*/
/*     <form method="POST" action="" name="S" id="hoge">*/
/*         <input type="hidden" name="MD" value="1">*/
/*         <div>*/
/* */
/*             <select id="m" name="M">*/
/*                 {% for key,month in data.range.month %}*/
/*                     <option value="{{ month }}" {% if data.post_data.M is defined and month==data.post_data.M %}selected{% endif %}>{{ month }}</option>*/
/*                 {% endfor %}*/
/*             </select>月*/
/*             <select id="d" name="D">*/
/*                 {% for key,day in data.range.day %}*/
/*                     <option value="{{ day }}" {% if data.post_data.D is defined and day==data.post_data.D %}selected{% endif %}>{{ day }}</option>*/
/*                 {% endfor %}*/
/*             </select>日*/
/*         </div>*/
/*         <div class="whatday_search">*/
/*             <input type="submit">*/
/*         </div>*/
/*     </form>*/
/* */
/*     {% if data.result is defined %}*/
/*         <h3>検索結果</h3>*/
/*         <table class="table table-striped table-bordered table-hover">*/
/*             {% for aniversary in data.result %}*/
/*                 <tr>*/
/*                     <td class="col-xs-6 col-md-1">{{ aniversary.month }}月{{ aniversary.day }}日</td>*/
/*                     <td class="col-xs-6 col-md-3">{{ aniversary.name }}</td>*/
/*                     <td class="col-xs-6 col-md-6">{{ aniversary.description }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* */
/* <p id="page-top"><a href="#">PAGE TOP</a></p>*/
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* */
/* <script>*/
/*     $(function () {*/
/*         var topBtn = $('#page-top');*/
/*         topBtn.hide();*/
/*         //スクロールが200に達したらボタン表示*/
/*         $(window).scroll(function () {*/
/*             if ($(this).scrollTop() > 500) {*/
/*                 topBtn.fadeIn();*/
/*             } else {*/
/*                 topBtn.fadeOut();*/
/*             }*/
/*         });*/
/*         //スクロールしてトップ*/
/*         topBtn.click(function () {*/
/*             $('body,html').animate({*/
/*                 scrollTop: 0*/
/*             }, 500);*/
/*             return false;*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* </body>*/
/* </html>*/
