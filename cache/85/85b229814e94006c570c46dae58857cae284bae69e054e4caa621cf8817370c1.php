<?php

/* layout.twig */
class __TwigTemplate_cd4067c09515ff59e068bbb34c4661145733336b61fd2d09a607577ceab039e6 extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width\"/>
    <title>Relvise</title>
    <link rel=\"stylesheet\" href=\"/assets/template/css/style.css\"/>
</head>
<body>
<div class=\"wrapper\">
    <header class=\"header\">
        <div class=\"header__container _container\">
            <a href=\"\" class=\"header__logo\">
                Relvise
            </a>
            <nav class=\"header__menu menu\">
                <ul class=\"menu__list\">
                    <li class=\"menu__item\">
                        <a href=\"\" class=\"menu__link\">Home</a>
                    </li>
                    <li class=\"menu__item\">
                        <a href=\"\" class=\"menu__link\">Product</a>
                    </li>
                    <li class=\"menu__item\">
                        <a href=\"\" class=\"menu__link\">Pricing</a>
                    </li>
                    <li class=\"menu__item\">
                        <a href=\"\" class=\"menu__link\">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>
    <main class=\"page\">
        <div class=\"page__main-block main-block\">
            <div class=\"main-block__container _container\">
                <div class=\"main-block__body\">
                    <h1 class=\"main-block__title\">Finance and Consultancy Solution </h1>
                    <div class=\"main-block__text\">We know how large objects will act,
                        but things on a small scale.
                    </div>
                    <div class=\"main-block__buttons\">
                        <a href=\"\" class=\"main-block__button block__button_orange\">Get Quote Now</a>
                        <a href=\"\" class=\"main-block__button main-block__button_border\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"main-block__image _ibg\">
                <img src=\"assets/template/img/cover.jpg\" alt=\"cover\">
            </div>
        </div>
        <section class=\"page__services services\">
            <div class=\"services__conteiner _container\">
                <div class=\"services__body\">
                    <div class=\"services__column\">
                        <div class=\"services__item item-service\">
                            <div class=\"item-service__icon\">
                                <img src=\"assets/template/img/icn settings .icn-lg.svg\" alt=\"Environmental Consulting\">
                            </div>
                            <h3 class=\"item-service__title\">Environmental Consulting</h3>
                            <div class=\"item-service__text\">We focus on ergonomics and meeting you where you work.</div>
                        </div>
                    </div>
                    <div class=\"services__column\">
                        <div class=\"services__item item-service\">
                            <div class=\"item-service__icon\">
                                <img src=\"assets/template/img/ant-design_shop-twotone.svg\" alt=\"Finance and consultancy\">
                            </div>
                            <h3 class=\"item-service__title\">Finance and consultancy</h3>
                            <div class=\"item-service__text\">Just type what's on your mind and we'll get you there.</div>
                        </div>
                    </div>
                    <div class=\"services__column\">
                        <div class=\"services__item item-service item-service_green\">
                            <div class=\"item-service__icon\">
                                <img src=\"assets/template/img/carbon_notebook.svg\" alt=\"Financial Services Consulting\">
                            </div>
                            <h3 class=\"item-service__title\">Financial Services Consulting</h3>
                            <div class=\"item-service__text\">the quick fox jumps over the lazy dog</div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <footer class=\"footer\">
        я подвал
    </footer>
</div>
<script src=\"/assets/template/js/script.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout.twig";
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
        return new Twig_Source("", "layout.twig", "D:\\OpenServer\\domains\\mymvclacal\\app\\views\\twig\\layout.twig");
    }
}
