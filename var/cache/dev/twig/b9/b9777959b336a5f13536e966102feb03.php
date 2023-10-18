<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* about/index.html.twig */
class __TwigTemplate_819f4f912eb420a77b3462cad04763a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "A propos de nous
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/about.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
\t<main>
\t\t<h1 class=\"addNews__title\">A propos de nous</h1>

\t\t<p>
\t\t\tPrésidents d’honneur :
\t\t\tBaron de VINCK, décédé en 1942
\t\t\tM. André LE GUILLOU décédé en 2003
\t\t\tPrésident honoraire fondateur : M. CHARVET, décédé en 1969
\t\t\tPrésident : M. Francis KELEDJIAN
\t\t\t
\t\t\t
\t\t\tSecrétaire :
\t\t\tM. Jean-Claude GAGNE
\t\t\t
\t\t\t
\t\t\tTrésorier et Responsable des OSL :
\t\t\tM. Marc BIGEY
\t\t\t
\t\t\t
\t\t\tResponsable de la Communication :
\t\t\tM. Gérard CRUAU
\t\t\t
\t\t\t
\t\t\tWebmaster et Responsable de la Cote en Euros :
\t\t\tM. Christophe BENELLI
\t\t\t
\t\t\tSociété des Collectionneurs de Coins datés et de Millésimes
\t\t\t
\t\t\tFondée le 31 mars 1936, l’association a pour but de regrouper les philatélistes qui étudient la fabrication des timbres-postes français en se basant sur la méthode du Baron de VINCK de WINNEZEELE.
\t\t\tElle est adhérente à la Fédération Française des Associations Philatéliques. Elle a obtenu le prix annuel de la Fédération au congrès de MONTPELLIER en 1939.
\t\t\t
\t\t\tSTATUTS
\t\t\t
\t\t\t
\t\t\tAssociation fédérée n° 92-1C
\t\t\tSiège Social (domicilié chez le trésorier Mr Marc Bigey) : 38, allée des 32 Arpents – 91190 GIF SUR YVETTE
\t\t\tSTATUTS
\t\t\tArticle 1er Il est fondé en France, une association qui prend le titre de :
\t\t\t« SOCIÉTÉ DES COLLECTIONNEURS DE COINS DATÉS ET MILLÉSIMES« 
\t\t\t(SO.CO.CO.DA.MI.)
\t\t\tLes statuts sont déposés à la Préfecture de l’Essonne.
\t\t\tLe siège social est situé à : 38, allée des 32 Arpents 91190 GIF SUR YVETTE
\t\t\tArticle 2 L’Association a pour but de faciliter les échanges entre collectionneurs, par tous les
\t\t\tmoyens que le bureau jugera utiles, et d’accroître les connaissances déjà acquises
\t\t\tdans la branche de la philatélie qui la concerne.
\t\t\tArticle 3 L’Association a son siège chez l’un des membres du bureau désigné parmi les
\t\t\tPrésident, Secrétaire, Trésorier ou Chef des Echanges.
\t\t\tArticle 4 L’Association se compose de membres d’honneur, de membres actifs et de membres
\t\t\thonoraires.
\t\t\tArticle 5 Toute personne majeure pourra participer aux activités de l’Association en tant que
\t\t\tmembre actif.
\t\t\tArticle 6 Les marchands de timbres pourront faire partie de l’Association comme membres
\t\t\tactifs mais ils ne pourront pas être membres du bureau.
\t\t\tArticle 7 Pour être admis membre actif de l’Association, il faut être présenté par le Président
\t\t\td’une Association Philatélique adhérente à la Fédération Française des Associations
\t\t\tPhilatéliques (F.F.A.P.) ou par deux membres actifs de notre Association.
\t\t\tLa demande comporte l’engagement des parrains d’user de leur influence morale sur
\t\t\tle sociétaire qu’ils présentent si celui-ci ne remplit pas ses engagements envers
\t\t\tl’Association.
\t\t\tCOTISATION
\t\t\tArticle 8 Un droit d’entrée pour tout nouvel adhérent doit être versé dès l’admission.
\t\t\tArticle 9 L’Assemblée Générale a lieu au cours des premiers mois de l’année et, entre autres décisions, fixe le montant de la cotisation pour l’exercice suivant. Cette cotisation doit être payée avant le 1er du mois concerné pour que le Sociétaire puisse participer à l’Assemblée Générale.
\t\t\tArticle 10 Les membres d’honneur n’ont aucun droit d’entrée, ni aucune cotisation à payer.
\t\t\tBUREAU
\t\t\tArticle 11 L’Association est administrée par un bureau. Le bureau est formé d’au moins 3 membres constitués du Président, du Trésorier et du Secrétaire. Ils s’entourent d’autres membres actifs pour la bonne marche de l’association.
\t\t\tArticle 12 Les membres actifs élisent le bureau et celui-ci choisit en son sein un Président, un Secrétaire, un Trésorier. Les membres du bureau doivent être majeurs et de nationalité française.
\t\t\tArticle 13 Les membres du bureau sont élus pour trois ans et ils sont renouvelés annuellement par tiers. Ils sont rééligibles.
\t\t\tArticle 14 Les membres du bureau sont élus à main levée et à la majorité des voix des votants.
\t\t\tLe vote par correspondance est admis. Les sociétaires désireux de faire acte de candidature devront en avertir le Président, ou le Secrétaire, ou le Trésorier, ou le Responsable du Service des Echanges avant l’envoi de la convocation de l’Assemblée Générale.
\t\t\tATTRIBUTION DES MEMBRES DU BUREAU
\t\t\tArticle 15 Le Président est le représentant légal de l’Association. Il préside les Assemblées Générales et les réunions qui ont lieu le 1er samedi tous les deux mois sauf en juillet/août. Il dirige les travaux et propose des résolutions aux questions. Il vise les opérations de trésorerie et les bilans. Il s’assure de la collecte des informations
\t\t\trelatives aux tirages des timbres en cours (dates, presses).
\t\t\tArticle 16 Le Secrétaire est chargé de l’instruction des candidatures, des convocations, de la correspondance de l’Association. Il prépare les élections. Il distribue la Cote et s’occupe des commandes d’ouvrages et de catalogues.
\t\t\tArticle 17 Le trésorier a la responsabilité de gérer le patrimoine financier de l’Association. Il effectue les paiements, perçoit les sommes dues à l’Association, encaisse les cotisations, prépare le compte de résultat et le bilan présentés à l’Assemblée Générale annuelle où il rend compte de sa mission.
\t\t\tArticle 18 Le Responsable du Service des Echanges a en charge la collecte des offres et des demandes de cession ou d’échanges de timbres collectionnés dans le cadre des activités de l’Association. Il diffuse toutes les informations nécessaires aux adhérents soit par le site internet, soit par courrier.
\t\t\tIl assure les réceptions et les expéditions des timbres entre bailleurs et demandeurs.
\t\t\tLes mouvements financiers sont assurés par le trésorier comme indiqué dans l’article 17.
\t\t\t
\t\t\tLe Responsable du Service des Echanges tient un état des recettes et dépenses de cette activité qu’il transmet au Trésorier pour être inclus aux comptes de l’Association.
\t\t\tArticle 19 Un commissaire aux comptes est nommé chaque année par l’Assemblée Générale.
\t\t\tASSEMBLÉES GÉNÉRALES
\t\t\tArticle 20 L’Assemblée Générale annuelle se tiendra durant les premiers mois de l’année en cours.
\t\t\tLes sociétaires seront avertis individuellement par bulletin de convocation, un pouvoir étant mis à leur disposition dans le cas où ils ne pourraient être présents.
\t\t\tLa non réception de l’avis individuel de la convocation ne pourra être cause de nullité de l’Assemblée Générale.
\t\t\tLors de l’Assemblée Générale, il sera pris connaissance des comptes-rendus moral et financier ainsi que celui du Service des Echanges.
\t\t\tElle procédera au renouvellement partiel des membres du bureau et fixera le montant de la cotisation de l’année suivante.
\t\t\tArticle 21 L’Association édite un bulletin périodique qui publie les admissions, les démissions, les comptes-rendus des membres du bureau et tous les articles se rattachant à notre spécialité. Ce bulletin est envoyé à chaque sociétaire par les soins du Secrétaire. De plus, des communiqués seront publiés dans les journaux philatéliques.
\t\t\tDISPONIBILITÉ DES FONDS
\t\t\tArticle 22 L’emploi des fonds sera décidé par le bureau. Ces fonds pourront être consacrés à l’édition d’études sur les coins datés, à la publication annuelle d’une Cote des coins datés, de bulletins périodiques, de suppléments de mise à jour et de sites internet de
\t\t\tdiffusion d’informations, en direction des adhérents ou du public. Ils peuvent également être utilisés pour toutes opérations visant à la promotion de la collection des coins datés.
\t\t\tArticle 23 Une partie des fonds sera utilisée au paiement d’une assurance couvrant, en cas de perte ou de vol, les envois concernant le Service des Echanges, routés sur le territoire.
\t\t\tDÉMISSIONS
\t\t\tArticle 24 Le sociétaire qui, après deux rappels, n’aura pas payé sa cotisation, sera considéré comme démissionnaire mais restera redevable des cotisations courues.
\t\t\tArticle 25 Tout membre désirant quitter l’Association doit adresser sa démission par lettre recommandée avant l’échéance de sa cotisation annuelle. Cette démission ne pourra être acceptée que si le sociétaire est en règle avec l’Association. Dans le cas où la démission ne pourrait être acceptée, le bureau examinera s’il convient d’exclure le sociétaire.
\t\t\tArticle 26 Lorsqu’un sociétaire est défaillant ou lorsqu’une contestation s’élève entre lui et l’Association, les parrains du sociétaire sont appelés à intervenir auprès de lui.
\t\t\tDISSOLUTION
\t\t\tArticle 27 La dissolution de l’Association ne pourra être votée qu’à la majorité absolue des membres inscrits depuis plus de deux ans.
\t\t\tArticle 28 Les fonds disponibles seront versés en totalité à une oeuvre de bienfaisance, sauf le cas où la majorité absolue des membres désignés à l’article précédent en disposerait
\t\t\tautrement dans un but de promotion de la Philatélie.
\t\t\tMODIFICATION DES STATUTS
\t\t\tArticle 29 Le bureau pourra proposer des modifications aux statuts s’il le juge utile. Toute proposition venant d’autres sociétaires, devra être signées par dix d’entre eux et soumise au Président.
\t\t\tArticle 30 Le bureau a plein pouvoir de décision pour tout cas non prévu aux présents statuts.
\t\t\t
\t\t\t
\t\t\tMelun, le 20 avril 2013
\t\t\tLe Président
\t\t\tFrancis Keledjian

\t\t</p>
\t</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "about/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 12,  107 => 11,  95 => 8,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos de nous
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/base.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/about.css') }}\"/>
{% endblock %}

{% block body %}

\t<main>
\t\t<h1 class=\"addNews__title\">A propos de nous</h1>

\t\t<p>
\t\t\tPrésidents d’honneur :
\t\t\tBaron de VINCK, décédé en 1942
\t\t\tM. André LE GUILLOU décédé en 2003
\t\t\tPrésident honoraire fondateur : M. CHARVET, décédé en 1969
\t\t\tPrésident : M. Francis KELEDJIAN
\t\t\t
\t\t\t
\t\t\tSecrétaire :
\t\t\tM. Jean-Claude GAGNE
\t\t\t
\t\t\t
\t\t\tTrésorier et Responsable des OSL :
\t\t\tM. Marc BIGEY
\t\t\t
\t\t\t
\t\t\tResponsable de la Communication :
\t\t\tM. Gérard CRUAU
\t\t\t
\t\t\t
\t\t\tWebmaster et Responsable de la Cote en Euros :
\t\t\tM. Christophe BENELLI
\t\t\t
\t\t\tSociété des Collectionneurs de Coins datés et de Millésimes
\t\t\t
\t\t\tFondée le 31 mars 1936, l’association a pour but de regrouper les philatélistes qui étudient la fabrication des timbres-postes français en se basant sur la méthode du Baron de VINCK de WINNEZEELE.
\t\t\tElle est adhérente à la Fédération Française des Associations Philatéliques. Elle a obtenu le prix annuel de la Fédération au congrès de MONTPELLIER en 1939.
\t\t\t
\t\t\tSTATUTS
\t\t\t
\t\t\t
\t\t\tAssociation fédérée n° 92-1C
\t\t\tSiège Social (domicilié chez le trésorier Mr Marc Bigey) : 38, allée des 32 Arpents – 91190 GIF SUR YVETTE
\t\t\tSTATUTS
\t\t\tArticle 1er Il est fondé en France, une association qui prend le titre de :
\t\t\t« SOCIÉTÉ DES COLLECTIONNEURS DE COINS DATÉS ET MILLÉSIMES« 
\t\t\t(SO.CO.CO.DA.MI.)
\t\t\tLes statuts sont déposés à la Préfecture de l’Essonne.
\t\t\tLe siège social est situé à : 38, allée des 32 Arpents 91190 GIF SUR YVETTE
\t\t\tArticle 2 L’Association a pour but de faciliter les échanges entre collectionneurs, par tous les
\t\t\tmoyens que le bureau jugera utiles, et d’accroître les connaissances déjà acquises
\t\t\tdans la branche de la philatélie qui la concerne.
\t\t\tArticle 3 L’Association a son siège chez l’un des membres du bureau désigné parmi les
\t\t\tPrésident, Secrétaire, Trésorier ou Chef des Echanges.
\t\t\tArticle 4 L’Association se compose de membres d’honneur, de membres actifs et de membres
\t\t\thonoraires.
\t\t\tArticle 5 Toute personne majeure pourra participer aux activités de l’Association en tant que
\t\t\tmembre actif.
\t\t\tArticle 6 Les marchands de timbres pourront faire partie de l’Association comme membres
\t\t\tactifs mais ils ne pourront pas être membres du bureau.
\t\t\tArticle 7 Pour être admis membre actif de l’Association, il faut être présenté par le Président
\t\t\td’une Association Philatélique adhérente à la Fédération Française des Associations
\t\t\tPhilatéliques (F.F.A.P.) ou par deux membres actifs de notre Association.
\t\t\tLa demande comporte l’engagement des parrains d’user de leur influence morale sur
\t\t\tle sociétaire qu’ils présentent si celui-ci ne remplit pas ses engagements envers
\t\t\tl’Association.
\t\t\tCOTISATION
\t\t\tArticle 8 Un droit d’entrée pour tout nouvel adhérent doit être versé dès l’admission.
\t\t\tArticle 9 L’Assemblée Générale a lieu au cours des premiers mois de l’année et, entre autres décisions, fixe le montant de la cotisation pour l’exercice suivant. Cette cotisation doit être payée avant le 1er du mois concerné pour que le Sociétaire puisse participer à l’Assemblée Générale.
\t\t\tArticle 10 Les membres d’honneur n’ont aucun droit d’entrée, ni aucune cotisation à payer.
\t\t\tBUREAU
\t\t\tArticle 11 L’Association est administrée par un bureau. Le bureau est formé d’au moins 3 membres constitués du Président, du Trésorier et du Secrétaire. Ils s’entourent d’autres membres actifs pour la bonne marche de l’association.
\t\t\tArticle 12 Les membres actifs élisent le bureau et celui-ci choisit en son sein un Président, un Secrétaire, un Trésorier. Les membres du bureau doivent être majeurs et de nationalité française.
\t\t\tArticle 13 Les membres du bureau sont élus pour trois ans et ils sont renouvelés annuellement par tiers. Ils sont rééligibles.
\t\t\tArticle 14 Les membres du bureau sont élus à main levée et à la majorité des voix des votants.
\t\t\tLe vote par correspondance est admis. Les sociétaires désireux de faire acte de candidature devront en avertir le Président, ou le Secrétaire, ou le Trésorier, ou le Responsable du Service des Echanges avant l’envoi de la convocation de l’Assemblée Générale.
\t\t\tATTRIBUTION DES MEMBRES DU BUREAU
\t\t\tArticle 15 Le Président est le représentant légal de l’Association. Il préside les Assemblées Générales et les réunions qui ont lieu le 1er samedi tous les deux mois sauf en juillet/août. Il dirige les travaux et propose des résolutions aux questions. Il vise les opérations de trésorerie et les bilans. Il s’assure de la collecte des informations
\t\t\trelatives aux tirages des timbres en cours (dates, presses).
\t\t\tArticle 16 Le Secrétaire est chargé de l’instruction des candidatures, des convocations, de la correspondance de l’Association. Il prépare les élections. Il distribue la Cote et s’occupe des commandes d’ouvrages et de catalogues.
\t\t\tArticle 17 Le trésorier a la responsabilité de gérer le patrimoine financier de l’Association. Il effectue les paiements, perçoit les sommes dues à l’Association, encaisse les cotisations, prépare le compte de résultat et le bilan présentés à l’Assemblée Générale annuelle où il rend compte de sa mission.
\t\t\tArticle 18 Le Responsable du Service des Echanges a en charge la collecte des offres et des demandes de cession ou d’échanges de timbres collectionnés dans le cadre des activités de l’Association. Il diffuse toutes les informations nécessaires aux adhérents soit par le site internet, soit par courrier.
\t\t\tIl assure les réceptions et les expéditions des timbres entre bailleurs et demandeurs.
\t\t\tLes mouvements financiers sont assurés par le trésorier comme indiqué dans l’article 17.
\t\t\t
\t\t\tLe Responsable du Service des Echanges tient un état des recettes et dépenses de cette activité qu’il transmet au Trésorier pour être inclus aux comptes de l’Association.
\t\t\tArticle 19 Un commissaire aux comptes est nommé chaque année par l’Assemblée Générale.
\t\t\tASSEMBLÉES GÉNÉRALES
\t\t\tArticle 20 L’Assemblée Générale annuelle se tiendra durant les premiers mois de l’année en cours.
\t\t\tLes sociétaires seront avertis individuellement par bulletin de convocation, un pouvoir étant mis à leur disposition dans le cas où ils ne pourraient être présents.
\t\t\tLa non réception de l’avis individuel de la convocation ne pourra être cause de nullité de l’Assemblée Générale.
\t\t\tLors de l’Assemblée Générale, il sera pris connaissance des comptes-rendus moral et financier ainsi que celui du Service des Echanges.
\t\t\tElle procédera au renouvellement partiel des membres du bureau et fixera le montant de la cotisation de l’année suivante.
\t\t\tArticle 21 L’Association édite un bulletin périodique qui publie les admissions, les démissions, les comptes-rendus des membres du bureau et tous les articles se rattachant à notre spécialité. Ce bulletin est envoyé à chaque sociétaire par les soins du Secrétaire. De plus, des communiqués seront publiés dans les journaux philatéliques.
\t\t\tDISPONIBILITÉ DES FONDS
\t\t\tArticle 22 L’emploi des fonds sera décidé par le bureau. Ces fonds pourront être consacrés à l’édition d’études sur les coins datés, à la publication annuelle d’une Cote des coins datés, de bulletins périodiques, de suppléments de mise à jour et de sites internet de
\t\t\tdiffusion d’informations, en direction des adhérents ou du public. Ils peuvent également être utilisés pour toutes opérations visant à la promotion de la collection des coins datés.
\t\t\tArticle 23 Une partie des fonds sera utilisée au paiement d’une assurance couvrant, en cas de perte ou de vol, les envois concernant le Service des Echanges, routés sur le territoire.
\t\t\tDÉMISSIONS
\t\t\tArticle 24 Le sociétaire qui, après deux rappels, n’aura pas payé sa cotisation, sera considéré comme démissionnaire mais restera redevable des cotisations courues.
\t\t\tArticle 25 Tout membre désirant quitter l’Association doit adresser sa démission par lettre recommandée avant l’échéance de sa cotisation annuelle. Cette démission ne pourra être acceptée que si le sociétaire est en règle avec l’Association. Dans le cas où la démission ne pourrait être acceptée, le bureau examinera s’il convient d’exclure le sociétaire.
\t\t\tArticle 26 Lorsqu’un sociétaire est défaillant ou lorsqu’une contestation s’élève entre lui et l’Association, les parrains du sociétaire sont appelés à intervenir auprès de lui.
\t\t\tDISSOLUTION
\t\t\tArticle 27 La dissolution de l’Association ne pourra être votée qu’à la majorité absolue des membres inscrits depuis plus de deux ans.
\t\t\tArticle 28 Les fonds disponibles seront versés en totalité à une oeuvre de bienfaisance, sauf le cas où la majorité absolue des membres désignés à l’article précédent en disposerait
\t\t\tautrement dans un but de promotion de la Philatélie.
\t\t\tMODIFICATION DES STATUTS
\t\t\tArticle 29 Le bureau pourra proposer des modifications aux statuts s’il le juge utile. Toute proposition venant d’autres sociétaires, devra être signées par dix d’entre eux et soumise au Président.
\t\t\tArticle 30 Le bureau a plein pouvoir de décision pour tout cas non prévu aux présents statuts.
\t\t\t
\t\t\t
\t\t\tMelun, le 20 avril 2013
\t\t\tLe Président
\t\t\tFrancis Keledjian

\t\t</p>
\t</main>

{% endblock %}
", "about/index.html.twig", "/Applications/MAMP/htdocs/Pro/sococodami/templates/about/index.html.twig");
    }
}
