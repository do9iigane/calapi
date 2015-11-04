<?php

/* freeword.twig */
class __TwigTemplate_cde6e435fe69d7639886c4efb35b36d8353431fbf299199fd741829eb5db32e8 extends Twig_Template
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
<a href=\"day.php\">日付検索</a>
<div class=\"container\" id=\"content\" tabindex=\"-1\">
    <h1>記念日API</h1>

    <h2>http://www.kinenbi.gr.jp/のwrapperです</h2>
    <form method=\"POST\" action=\"\" name=\"KS\">

        <input type=\"hidden\" name=\"MD\" value=\"2\">

        <div class=\"form-group\">
            <label for=\"searchword\">検索</label>
            <input type=\"text\" name=\"K\" class=\"form-control\" id=\"searchword\" placeholder=\"search word here.\" value=\"";
        // line 55
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($this->getAttribute($_data_, "post_data", array(), "any", false, true), "K", array(), "any", true, true)) {
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "post_data", array()), "K", array()), "html", null, true);
        }
        echo "\">
        </div>

        ";
        // line 58
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "error", array(), "any", true, true)) {
            // line 59
            echo "            <font color=\"red\">";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "error", array()), "html", null, true);
            echo "</font>
        ";
        }
        // line 61
        echo "
        <div class=\"radio\">
            <label>
                    <input type=\"radio\" name=\"SK\" id=\"optionsRadios1\" value=\"1\" ";
        // line 64
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (($this->getAttribute($this->getAttribute($_data_, "post_data", array()), "SK", array()) == 1)) {
            echo "checked";
        }
        echo ">いずれかを含む
            </label>
        </div>
        <div class=\"radio\">
            <label>
                <input type=\"radio\" name=\"SK\" id=\"optionsRadios2\" value=\"0\" ";
        // line 69
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if (($this->getAttribute($this->getAttribute($_data_, "post_data", array()), "SK", array()) == 0)) {
            echo "checked";
        }
        echo ">すべてを含む
            </label>
        </div>

        <div class=\"whatday_search\">
            <input type=\"submit\">
        </div>
    </form>

    ";
        // line 78
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        if ($this->getAttribute($_data_, "result", array(), "any", true, true)) {
            // line 79
            echo "        <h3>検索結果</h3>
        <table class=\"table table-striped table-bordered table-hover\">
            ";
            // line 81
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "result", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["aniversary"]) {
                // line 82
                echo "                <tr>
                    <td class=\"col-xs-6 col-md-1\">";
                // line 83
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "month", array()), "html", null, true);
                echo "月";
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "day", array()), "html", null, true);
                echo "日</td>
                    <td class=\"col-xs-6 col-md-3\">";
                // line 84
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "name", array()), "html", null, true);
                echo "</td>
                    <td class=\"col-xs-6 col-md-6\">";
                // line 85
                if (isset($context["aniversary"])) { $_aniversary_ = $context["aniversary"]; } else { $_aniversary_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_aniversary_, "description", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aniversary'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        </table>
    ";
        }
        // line 90
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
        return "freeword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 90,  164 => 88,  154 => 85,  149 => 84,  141 => 83,  138 => 82,  133 => 81,  129 => 79,  126 => 78,  111 => 69,  100 => 64,  95 => 61,  88 => 59,  85 => 58,  75 => 55,  19 => 1,);
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
/* <a href="day.php">日付検索</a>*/
/* <div class="container" id="content" tabindex="-1">*/
/*     <h1>記念日API</h1>*/
/* */
/*     <h2>http://www.kinenbi.gr.jp/のwrapperです</h2>*/
/*     <form method="POST" action="" name="KS">*/
/* */
/*         <input type="hidden" name="MD" value="2">*/
/* */
/*         <div class="form-group">*/
/*             <label for="searchword">検索</label>*/
/*             <input type="text" name="K" class="form-control" id="searchword" placeholder="search word here." value="{% if data.post_data.K is defined %}{{ data.post_data.K }}{% endif %}">*/
/*         </div>*/
/* */
/*         {% if data.error is defined %}*/
/*             <font color="red">{{ data.error }}</font>*/
/*         {% endif %}*/
/* */
/*         <div class="radio">*/
/*             <label>*/
/*                     <input type="radio" name="SK" id="optionsRadios1" value="1" {% if data.post_data.SK == 1 %}checked{% endif %}>いずれかを含む*/
/*             </label>*/
/*         </div>*/
/*         <div class="radio">*/
/*             <label>*/
/*                 <input type="radio" name="SK" id="optionsRadios2" value="0" {% if data.post_data.SK ==0 %}checked{% endif %}>すべてを含む*/
/*             </label>*/
/*         </div>*/
/* */
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
